#Write a Python program using lambda to calculate the cube of a given number.

cube= lambda x: x**3

number=int(input("Enter a number to calculate its cube:"))
print("Cube of ",number,"is:",cube(number))