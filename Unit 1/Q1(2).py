##Create a Python program that will have one string variable =“ Welcome to Python”.
#Perform following operations:

string_var="Welcome to Python"

#• Print whole string
print("Whole String:", string_var)

#• Print only first character of string
print("First Character:", string_var[0])

#• Print 3rdcharacter to -1 character of string using slicing operator
print("3 rd to -1 Character:", string_var[2:-1])

#• Print string from 4thcharacter to the end of string using slicing operator
print("4th Character to End:", string_var[3:])

#• Print whole string 5 times using appropriate operator.
print("Whole String 5 Times:", string_var * 5)

#• Count the occurance of “to”
print("Count of 'to':", string_var.count("to"))

#• Print length of string
print("Length of String:", len(string_var))

#• Convert the string to lowecase
print("Lowercase String:", string_var.lower())

#• Find the substring “Python”
print("Substring 'Python' found at index:", string_var.find("Python"))

#• Remove leading space from string
print("String without Leading Space:", string_var.lstrip())

#• Check whether string is ending with “is” or not.
print("Does string end with 'is':", string_var.endswith("is"))