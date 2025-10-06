#Develop a Ride Sharing Application with classes Driver, Passenger, Ride,
# and Payment. Include dynamic ride fare calculation based on distance and surge
# pricing, custom exceptions for invalid payment method or ride cancellation, and
# file handling to log completed rides using with.

# ---------- Custom Exceptions ----------
class InvalidPaymentMethodError(Exception):
    """Raised when an unsupported payment method is used."""
    pass

class RideCancelledError(Exception):
    """Raised when a ride is cancelled by the user or driver."""
    pass


# ---------- Class Definitions ----------
class Driver:
    def __init__(self, name, vehicle, base_rate=10):
        self.name = name
        self.vehicle = vehicle
        self.base_rate = base_rate  # base fare per km

    def __str__(self):
        return f"Driver: {self.name}, Vehicle: {self.vehicle}"


class Passenger:
    def __init__(self, name):
        self.name = name

    def __str__(self):
        return f"Passenger: {self.name}"


class Ride:
    def __init__(self, driver, passenger, distance_km, surge_multiplier=1.0):
        self.driver = driver
        self.passenger = passenger
        self.distance_km = distance_km
        self.surge_multiplier = surge_multiplier
        self.fare = 0
        self.completed = False

    def calculate_fare(self):
        """Calculate dynamic fare based on distance and surge pricing."""
        self.fare = self.distance_km * self.driver.base_rate * self.surge_multiplier
        return self.fare

    def start_ride(self):
        print(f"🚘 Ride started for {self.passenger.name} with {self.driver.name}")
        print(f"Distance: {self.distance_km} km | Surge: {self.surge_multiplier}x")

    def complete_ride(self):
        self.completed = True
        print(f"✅ Ride completed. Fare: ₹{self.fare:.2f}")
