#Create a program to read product details from a CSV file. Handle file not found,
# incorrect CSV format, and empty file errors with different exception blocks.

import csv
import os

def read_products(file_path):
    try:
        # Check if file exists
        if not os.path.exists(file_path):
            raise FileNotFoundError(f"The file '{file_path}' does not exist.")

        # Open the CSV file
        with open(file_path, mode='r', newline='') as file:
            reader = csv.DictReader(file)
            
            # Check if CSV headers are correct
            expected_headers = ['ProductID', 'ProductName', 'Price', 'Quantity']
            if reader.fieldnames != expected_headers:
                raise ValueError(f"Incorrect CSV format. Expected headers: {expected_headers}")

            products = list(reader)
            
            # Check if file is empty (no rows)
            if not products:
                raise EOFError("CSV file is empty. No product data found.")

            # Display products
            print("\n📦 Product Details:")
            for product in products:
                print(f"ID: {product['ProductID']}, "
                      f"Name: {product['ProductName']}, "
                      f"Price: ₹{product['Price']}, "
                      f"Quantity: {product['Quantity']}")

    # Exception handling
    except FileNotFoundError as fnf_error:
        print(f"❌ File Error: {fnf_error}")

    except ValueError as ve:
        print(f"❌ Format Error: {ve}")

    except EOFError as eof_error:
        print(f"❌ Empty File Error: {eof_error}")

    except Exception as e:
        print(f"❌ An unexpected error occurred: {e}")


# Main program
def main():
    print("===== 🛒 Read Product Details from CSV =====")
    file_path = input("Enter CSV file path: ")
    read_products(file_path)


if __name__ == "__main__":
    main()
