#Write a program to demonstrate the use of finally with exception.

# Program to demonstrate finally with exception

try:
    num1 = float(input("Enter numerator: "))
    num2 = float(input("Enter denominator: "))

    result = num1 / num2
    print(f"Result: {num1} ÷ {num2} = {result}")

except ZeroDivisionError:
    print("❌ Error: Cannot divide by zero!")

except ValueError:
    print("❌ Error: Invalid input! Please enter numeric values.")

finally:
    print("✅ This block executes regardless of exception occurrence.")
