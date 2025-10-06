# Write a program to divide one number from another number with exception handling and show ZeroDivisionError.

# Program to divide two numbers with exception handling

try:
    # Taking input from user
    numerator = float(input("Enter numerator: "))
    denominator = float(input("Enter denominator: "))

    # Division operation
    result = numerator / denominator
    print(f"Result: {numerator} ÷ {denominator} = {result}")

except ZeroDivisionError:
    print("❌ Error: Cannot divide by zero!")

except ValueError:
    print("❌ Error: Please enter valid numbers.")

except Exception as e:
    print(f"⚠️ Unexpected error: {e}")

finally:
    print("✅ Division operation completed.")
