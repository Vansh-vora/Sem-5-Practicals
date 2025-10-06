#Simulate an online ticket booking system where user inputs seat numbers. Handle
# errors for invalid seat number range, already booked seats, and invalid data types

class TicketBookingSystem:
    def __init__(self, total_seats=20):
        self.total_seats = total_seats
        self.booked_seats = set()  # keeps track of booked seats

    def display_available_seats(self):
        available = [str(i) for i in range(1, self.total_seats + 1) if i not in self.booked_seats]
        print(f"Available seats: {', '.join(available)}")

    def book_seat(self, seat_number):
        try:
            # Convert input to integer
            seat_number = int(seat_number)

            # Check if seat is within range
            if seat_number < 1 or seat_number > self.total_seats:
                raise ValueError(f"Seat number must be between 1 and {self.total_seats}.")

            # Check if seat is already booked
            if seat_number in self.booked_seats:
                raise ValueError(f"Seat {seat_number} is already booked.")

            # Book the seat
            self.booked_seats.add(seat_number)
            print(f"✅ Seat {seat_number} booked successfully!")

        except ValueError as ve:
            print(f"❌ Error: {ve}")

        except Exception:
            print("❌ Invalid input! Please enter a valid seat number.")


# Main program
def main():
    print("===== 🎟️ Online Ticket Booking System =====")
    system = TicketBookingSystem(total_seats=20)

    while True:
        system.display_available_seats()
        seat_input = input("Enter seat number to book (or 'done' to exit): ").lower()
        if seat_input == "done":
            print("Thank you for using the booking system! Exiting...")
            break
        system.book_seat(seat_input)


if __name__ == "__main__":
    main()
