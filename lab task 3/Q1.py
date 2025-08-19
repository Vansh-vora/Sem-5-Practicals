#Write a Python function to calculate the factorial of a number. Call the function for multiple test cases.

def factorial(n):
  result = 1
  for i in range(1, n+1):
    result *= i
  return result

print("Factorial of 5= ",factorial(5))
print("Factorial of 7= ",factorial(7))
