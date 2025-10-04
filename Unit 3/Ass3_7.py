#Write a program to create a function employee () using the following conditions. 
# a. It should accept the employee’s name and salary and display both.
# b. If the salary is missing in the function call, then assign default value 10000 to salary

def employee(name, salary=10000):
  print("Employee Name: ", name)
  print("Employee Salary :", salary)

name=input("Enter Employee Name:")

salary_input=input("Enter Employee Salary (Press Enter to skip):")

if salary_input =="":
  employee(name)
else:
  salary=float(input("Enter Employee Salary:"))
  employee(name, salary)