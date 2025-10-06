#Build a Restaurant ordering system. Create classes for MenuItem and 
# Order. Allow adding menu items and computing the total bill with tax. Access 
# attributes via methods only (no direct attribute printing).

# Class representing a single menu item
class MenuItem:
    def __init__(self, name, price):
        self.__name = name          # private attribute
        self.__price = price        # private attribute

    # Getter methods
    def get_name(self):
        return self.__name

    def get_price(self):
        return self.__price


# Class representing a customer's order
class Order:
    def __init__(self, tax_rate=0.1):  # Default tax = 10%
        self.__items = []              # private list of MenuItem objects
        self.__tax_rate = tax_rate

    def add_item(self, menu_item):
        """Add a menu item to the order."""
        self.__items.append(menu_item)
        print(f"✅ Added: {menu_item.get_name()} - ₹{menu_item.get_price():.2f}")

    def calculate_total(self):
        """Calculate total cost before tax."""
        return sum(item.get_price() for item in self.__items)

    def calculate_total_with_tax(self):
        """Calculate total including tax."""
        total = self.calculate_total()
        return total + (total * self.__tax_rate)

    def show_bill(self):
        """Display order summary and total."""
        print("\n🧾 Order Summary:")
        if not self.__items:
            print("No items added yet.")
            return

        for item in self.__items:
            print(f"- {item.get_name()} : ₹{item.get_price():.2f}")

        subtotal = self.calculate_total()
        total_with_tax = self.calculate_total_with_tax()

        print(f"\nSubtotal: ₹{subtotal:.2f}")
        print(f"Tax (10%): ₹{subtotal * self.__tax_rate:.2f}")
        print(f"💰 Total Bill: ₹{total_with_tax:.2f}\n")


# Main Function
def main():
    print("===== 🍴 Restaurant Ordering System =====")
    menu = []

    # Create menu
    while True:
        choice = input("\nDo you want to add a menu item? (yes/no): ").lower()
        if choice == "no":
            break
        name = input("Enter item name: ")
        price = float(input("Enter item price: ₹"))
        menu.append(MenuItem(name, price))
        print(f"✅ Menu Item '{name}' added.")

    # Display Menu
    if not menu:
        print("\nNo menu items available. Exiting.")
        return

    print("\n📜 Menu:")
    for i, item in enumerate(menu, start=1):
        print(f"{i}. {item.get_name()} - ₹{item.get_price():.2f}")

    # Create an order
    order = Order()

    while True:
        choice = input("\nEnter menu item number to order (or 'done' to finish): ").lower()
        if choice == "done":
            break

        if not choice.isdigit() or int(choice) < 1 or int(choice) > len(menu):
            print("❌ Invalid choice. Try again.")
            continue

        order.add_item(menu[int(choice) - 1])

    # Display Final Bill
    order.show_bill()


if __name__ == "__main__":
    main()

