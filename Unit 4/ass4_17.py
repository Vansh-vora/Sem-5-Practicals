#Design a mini Library Management System with Book, Member, and
# Transaction classes to demonstrate attributes, methods, encapsulation, and
# object relationships. Add books, issue/return books, and track availability.

from datetime import date

# ---------- Book Class ----------
class Book:
    def __init__(self, title, author, isbn):
        self.__title = title              # encapsulated attributes
        self.__author = author
        self.__isbn = isbn
        self.__is_available = True        # initially available

    # Getters (to access private attributes safely)
    def get_title(self):
        return self.__title

    def get_author(self):
        return self.__author

    def get_isbn(self):
        return self.__isbn

    def is_available(self):
        return self.__is_available

    # Setters (to modify private attributes safely)
    def set_availability(self, status):
        self.__is_available = status

    def __str__(self):
        status = "Available" if self.__is_available else "Issued"
        return f"📘 {self.__title} by {self.__author} | ISBN: {self.__isbn} | {status}"


# ---------- Member Class ----------
class Member:
    def __init__(self, name, member_id):
        self.__name = name
        self.__member_id = member_id
        self.__borrowed_books = []  # list of Book objects

    def get_name(self):
        return self.__name

    def get_member_id(self):
        return self.__member_id

    def borrow_book(self, book):
        if book.is_available():
            book.set_availability(False)
            self.__borrowed_books.append(book)
            print(f"✅ {self.__name} has borrowed '{book.get_title()}'")
        else:
            print(f"❌ Sorry, '{book.get_title()}' is currently unavailable.")

    def return_book(self, book):
        if book in self.__borrowed_books:
            book.set_availability(True)
            self.__borrowed_books.remove(book)
            print(f"📗 {self.__name} has returned '{book.get_title()}'")
        else:
            print(f"⚠️ {self.__name} did not borrow '{book.get_title()}'")

    def show_borrowed_books(self):
        if not self.__borrowed_books:
            print(f"📭 {self.__name} has not borrowed any books.")
        else:
            print(f"📚 {self.__name}'s borrowed books:")
            for book in self.__borrowed_books:
                print(f"   - {book.get_title()}")

    def __str__(self):
        return f"👤 Member: {self.__name} | ID: {self.__member_id}"


# ---------- Transaction Class ----------
class Transaction:
    def __init__(self, member, book, action):
        self.member = member
        self.book = book
        self.action = action   # "Issue" or "Return"
        self.date = date.today()

    def __str__(self):
        return f"{self.date} - {self.action}: '{self.book.get_title()}' by {self.member.get_name()}"


# ---------- Library System Demo ----------
if __name__ == "__main__":
    # Create some books
    b1 = Book("The Great Gatsby", "F. Scott Fitzgerald", "9780743273565")
    b2 = Book("1984", "George Orwell", "9780451524935")
    b3 = Book("To Kill a Mockingbird", "Harper Lee", "9780061120084")

    # Create members
    m1 = Member("Rahul Sharma", "M101")
    m2 = Member("Priya Singh", "M102")

    # Transactions list
    transactions = []

    # Issue some books
    m1.borrow_book(b1)
    transactions.append(Transaction(m1, b1, "Issued"))

    m2.borrow_book(b2)
    transactions.append(Transaction(m2, b2, "Issued"))

    # Try borrowing already borrowed book
    m1.borrow_book(b2)

    # Return a book
    m1.return_book(b1)
    transactions.append(Transaction(m1, b1, "Returned"))

    # Display borrowed books
    m1.show_borrowed_books()
    m2.show_borrowed_books()

    # Display all books
    print("\n📚 Library Book List:")
    for book in [b1, b2, b3]:
        print("  ", book)

    # Display all transactions
    print("\n🧾 Transaction Log:")
    for t in transactions:
        print("  ", t)
