import pymongo

print ("!...User Login...!")

myclient = pymongo.MongoClient("mongodb://127.0.0.1:27017")

mydb = myclient["user"]

username = (input("Username : "))
password = (input("Password : "))
if(mydb.login.find({"uname" : username , "pword" : password})):
    print("login")
else:
    print("wrong username or password")

    
