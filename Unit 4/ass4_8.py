#Create a Vehicle base class with subclasses Car, Bike, and Truck. Each
# should override a method calculate_trip_cost(distance) using their
# own fuel efficiency

class Vehicle:
    def __init__(self, name, fuel_price):
        self.name = name
        self.fuel_price = fuel_price

    def calculate_trip_cost(self, distance):
        raise NotImplementedError("This method should be overridden in subclasses")
    
    def get_details(self):
        return f"{self.name} (Fuel Price: ${self.fuel_price}/L)"
    
class Car(Vehicle):
    def __init__(self, name, fuel_price):
        super().__init__(name, fuel_price)
        self.fuel_efficincy= 15

    def calculate_trip_cost(self, distance):
        fuel_needed = distance / self.fuel_efficincy
        return fuel_needed * self.fuel_price
    
class Bike(Vehicle):
    def __init__(self, name, fuel_price):
        super().__init__(name, fuel_price)
        self.fuel_efficincy= 40

    def calculate_trip_cost(self, distance):
        fuel_needed = distance / self.fuel_efficincy
        return fuel_needed * self.fuel_price
    
class Truck(Vehicle):
    def __init__(self, name, fuel_price):
        super().__init__(name, fuel_price)
        self.fuel_efficincy= 8

    def calculate_trip_cost(self, distance):
        fuel_needed = distance / self.fuel_efficincy
        return fuel_needed * self.fuel_price
    
def main():
    print("===== 🚗 Vehicle Trip Cost Calculator =====")
    vehicles = []

    while True:
        print("\nSelect Vehicle Type to Add:")
        print("1. Car")
        print("2. Bike")
        print("3. Truck")
        print("4. Done Adding Vehicles")
        choice = input("Enter choice (1-4): ")

        if choice == "4":
            break

        name = input("Enter vehicle name/model: ")
        fuel_price = float(input("Enter fuel price per liter ($): "))

        if choice == "1":
            vehicle = Car(name, fuel_price)
        elif choice == "2":
            vehicle = Bike(name, fuel_price)
        elif choice == "3":
            vehicle = Truck(name, fuel_price)
        else:
            print("❌ Invalid choice. Please try again.")
            continue

        vehicles.append(vehicle)
        print(f"✅ Added: {vehicle.get_details()}")

    if not vehicles:
        print("⚠️ No vehicles added. Exiting.")
        return


    distance = float(input("\nEnter trip distance (in km): "))
    print("\n===== Trip Cost Estimates =====")
    for v in vehicles:
        cost = v.calculate_trip_cost(distance)
        print(f"{v.get_details()} - Trip Cost: ${cost:.2f}")

if __name__ == "__main__":
    main()