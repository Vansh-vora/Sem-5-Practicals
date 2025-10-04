#. Write a program to create function calculation () such that it can accept two variables and calculate addition and subtraction. Also, it must return both addition and subtraction in a single return call.

def calculation(a, b):
    add = a + b
    sub = a - b
    return add, sub

x=float(input("Enter first number:"))
y=float(input("Enter second number:"))

add_result, sub_result =calculation(x, y)


print("Addition:", add_result)
print("Subtraction:", sub_result) 