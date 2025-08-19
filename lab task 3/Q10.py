#0.Write a function using **varargs to print employee details like name, department, and salary

def print_employee_details(**details):
  for key, value in details.items():
    print(key,":",value)

name= input("Enter employee name: ")
department = input("Enter employee department: ")
salary = float(input("Enter employee salary: "))
print_employee_details(name=name, department=department, salary=salary)
