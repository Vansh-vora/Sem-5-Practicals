#function
# Write a python program to create a class Bank with following members:
#  Id- Private
#  Name -Protected
#  Balance – Public
# Member Functions:
 #• Constructor to initialize balance as 1000.
 #Create another class named Customer and add following methods:
 #withdraw()  - To withdraw money
 #deposit() - To deposit money
 #interest()  -  calculate interest
 #Call all the methods appropriately and print Id, Name and Balance.

class Bank:
    def __init__(self, id, name):
        # Private, Protected, and Public members
        self.__id = id           # Private
        self._name = name        # Protected
        self.balance = 1000.0    # Public (initialized to 1000)

    # Method to display account details
    def display(self):
        print("\n--- Account Details ---")
        print(f"Customer ID: {self.__id}")
        print(f"Customer Name: {self._name}")
        print(f"Current Balance: ₹{self.balance:.2f}")


class Customer(Bank):
    # Withdraw money
    def withdraw(self, amount):
        if amount <= 0:
            print("❌ Invalid withdrawal amount!")
        elif amount > self.balance:
            print("⚠️ Insufficient balance!")
        else:
            self.balance -= amount
            print(f"✅ Withdrawn ₹{amount}. New Balance: ₹{self.balance:.2f}")

    # Deposit money
    def deposit(self, amount):
        if amount <= 0:
            print("❌ Invalid deposit amount!")
        else:
            self.balance += amount
            print(f"✅ Deposited ₹{amount}. New Balance: ₹{self.balance:.2f}")

    # Calculate simple interest
    def interest(self, rate, time):
        si = (self.balance * rate * time) / 100
        print(f"💰 Interest for {time} years at {rate}% = ₹{si:.2f}")
        self.balance += si
        print(f"Updated Balance after adding interest: ₹{self.balance:.2f}")


# Example usage
if __name__ == "__main__":
    # Create Customer object
    c1 = Customer(101, "Rahul Sharma")

    # Perform operations
    c1.display()
    c1.deposit(2000)
    c1.withdraw(500)
    c1.interest(5, 2)  # 5% rate for 2 years
    c1.display()
