#Write a Python program that calculates the factorial of a number using a while loop.

num = int(input("Enter a number to calculate its factorial: "))
factorial =1
i=1

while i <=num:
  factorial *= i
  i+=1

print("Factorial of",num,"is",factorial)