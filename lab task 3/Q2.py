#. Write a function to find the largest of three numbers

def largest_of_three(a,b,c):
  if a>=b and a>=c:
    return a
  elif b>=a and b>=c:
    return b
  else:
    return c
  

a=input("Enter first number: ")
b=input("Enter second number: ")
c=input("Enter third number: ")
  
print("Largest number is:",largest_of_three(a,b,c))