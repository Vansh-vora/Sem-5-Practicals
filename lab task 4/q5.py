# Write a program to raise an exception if number is negative

# Program to raise exception for negative numbers

try:
    num = float(input("Enter a number: "))

    # Check for negative number
    if num < 0:
        raise ValueError("❌ Negative numbers are not allowed!")

    print(f"You entered a valid number: {num}")

except ValueError as e:
    print(e)

finally:
    print("✅ Program execution completed.")
