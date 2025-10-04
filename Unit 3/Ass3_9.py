#Create an outer function that will accept two parameters a and b. Create an inner function inside an outer function that will calculate the addition of a and b. At last, an outer function will add 5 into addition and return it.

def outer_function(a, b):
    def inner_function():
        return a + b

    result =inner_function() + 5
    return result

x=float(input("Enter first number: "))
y=float(input("Enter second number: "))
final_result = outer_function(x, y)
print("The final result is:", final_result)