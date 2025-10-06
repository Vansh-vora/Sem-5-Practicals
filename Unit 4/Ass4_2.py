#Create a TravelAgency class that manages multiple Trip objects. Each trip
# contains destination, cost, and duration. Accept trips from the user and display the
# most expensive trip

# Class representing a single trip
class Trip:
    def __init__(self, destination, cost, duration):
        self.destination = destination
        self.cost = cost
        self.duration = duration  # in days

    def __str__(self):
        return f"Destination: {self.destination}, Cost: ₹{self.cost}, Duration: {self.duration} days"


# Class representing the travel agency
class TravelAgency:
    def __init__(self):
        self.trips = []

    def add_trip(self):
        destination = input("Enter destination: ")
        cost = float(input("Enter trip cost (₹): "))
        duration = int(input("Enter duration (in days): "))
        trip = Trip(destination, cost, duration)
        self.trips.append(trip)
        print(f"✅ Trip added successfully: {trip}\n")

    def display_most_expensive_trip(self):
        if not self.trips:
            print("⚠️ No trips available. Please add trips first.\n")
            return
        most_expensive = max(self.trips, key=lambda t: t.cost)
        print("\n💰 The Most Expensive Trip:")
        print(most_expensive)


# Main function
def main():
    agency = TravelAgency()

    while True:
        print("\n===== ✈️ Travel Agency Menu =====")
        print("1. Add a Trip")
        print("2. View Most Expensive Trip")
        print("3. Exit")
        choice = input("Enter your choice: ")

        if choice == "1":
            agency.add_trip()
        elif choice == "2":
            agency.display_most_expensive_trip()
        elif choice == "3":
            print("👋 Thank you for using Travel Agency System!")
            break
        else:
            print("❌ Invalid choice. Please try again.\n")


if __name__ == "__main__":
    main()
