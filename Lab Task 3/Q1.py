# Write a Python function to calculate the factorial of a number. Call the function for multiple
# test cases.
def factorial(n):
  fact=1
  for i in range(1,n+1):
    fact*=i
  return fact

print( factorial(5))
print(factorial(7))