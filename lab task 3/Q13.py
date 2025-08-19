#Write a function that takes two numbers and returns both their sum and difference.

def sum_and_difference(a, b):
  total = a+b
  diff = a-b
  return total,diff

x = int(input("Enter first number: "))
y = int(input("Enter second number: "))

d,e= sum_and_difference(x, y)
print("Sum is:", d)
print("Difference is:", e)