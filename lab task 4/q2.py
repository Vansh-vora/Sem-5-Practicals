#  Define a class Teacher with the following specification: 
#  Private members
#        Name : 20 char
#          Subject: 10 char
#      Basic, DA,HRA : float
#      Salary: float
# Calculate () - function computes the salary and returns it.
# Salary is sum of basic, DA and HRA
#  Public member: Readdata() function accept the data values and invoke the calculate function

class Teacher:
    # Constructor
    def __init__(self):
        # Private data members
        self.__name = ""
        self.__subject = ""
        self.__basic = 0.0
        self.__da = 0.0
        self.__hra = 0.0
        self.__salary = 0.0

    # Private method to calculate salary
    def __calculate(self):
        self.__salary = self.__basic + self.__da + self.__hra
        return self.__salary

    # Public method to read data and compute salary
    def readdata(self):
        # Taking input from user
        self.__name = input("Enter Teacher Name: ")[:20]
        self.__subject = input("Enter Subject: ")[:10]
        self.__basic = float(input("Enter Basic Pay: "))
        self.__da = float(input("Enter DA: "))
        self.__hra = float(input("Enter HRA: "))

        # Calculate salary
        total = self.__calculate()

        # Display the data
        print("\n--- Teacher Details ---")
        print(f"Name: {self.__name}")
        print(f"Subject: {self.__subject}")
        print(f"Basic: ₹{self.__basic}")
        print(f"DA: ₹{self.__da}")
        print(f"HRA: ₹{self.__hra}")
        print(f"💰 Total Salary: ₹{total}")


# Example usage
if __name__ == "__main__":
    t1 = Teacher()
    t1.readdata()
