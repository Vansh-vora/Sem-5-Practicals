# Demonstrate the usage of assert and with keyword

# Program to demonstrate assert and with

# Function to write positive numbers to a file
def write_positive_numbers(numbers, filename):
    with open(filename, "w") as file:   # Using 'with' to handle file safely
        for num in numbers:
            # Assert that number is positive
            assert num > 0, f"Negative number detected: {num}"
            file.write(f"{num}\n")
    print(f"✅ Successfully wrote positive numbers to '{filename}'")


# Example usage
numbers_list = [10, 20, 5, -3, 15]  # -3 will trigger assert

try:
    write_positive_numbers(numbers_list, "numbers.txt")
except AssertionError as e:
    print(f"❌ AssertionError: {e}")
finally:
    print("✅ Program execution completed.")
