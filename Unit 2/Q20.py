#Write a program that simulates a basic bank transaction system using
#dictionary: account numbers as keys and balance as values. Allow user to
#deposit, withdraw, and check balance.

bank = {}

# -------------------------------
# Step 1: Take account details from user
# -------------------------------
n = int(input("How many accounts you want to add? "))

for _ in range(n):
    acc = int(input("Enter Account Number: "))
    bal = int(input("Enter Opening Balance: "))
    bank[acc] = bal

# -------------------------------
# Step 2: Menu-driven program
# -------------------------------
while True:
    print("\n1. Deposit")
    print("2. Withdraw")
    print("3. Check Balance")
    print("4. Exit")

    ch = int(input("Enter your choice: "))

    if ch == 1:  # Deposit
        acc = int(input("Enter Account Number: "))
        if acc in bank:
            amt = int(input("Enter Amount to Deposit: "))
            bank[acc] += amt
            print("Amount Deposited Successfully!")
        else:
            print("Invalid Account Number!")

    elif ch == 2:  # Withdraw
        acc = int(input("Enter Account Number: "))
        if acc in bank:
            amt = int(input("Enter Amount to Withdraw: "))
            if bank[acc] >= amt:
                bank[acc] -= amt
                print("Withdraw Successful!")
            else:
                print("Insufficient Balance!")
        else:
            print("Invalid Account Number!")

    elif ch == 3:  # Check Balance
        acc = int(input("Enter Account Number: "))
        if acc in bank:
            print("Balance:", bank[acc])
        else:
            print("Invalid Account Number!")

    elif ch == 4:
        print("Exiting...")
        break

    else:
        print("Invalid choice! Try again.")
