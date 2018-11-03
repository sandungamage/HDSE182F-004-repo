def encrypt(string):


 
  cipher = ''

  for char in string:
 
    if char == ' ':

      cipher = cipher + char

    elif  char.isupper():

      cipher = cipher + chr((ord(char) + 3 - 65) % 26 + 65)

    else:

      cipher = cipher + chr((ord(char) + 3 - 97) % 26 + 97)


  
  return cipher



text = input("enter string value: ")

print("encryption value: ", encrypt(text))
