#Write a function that takes a list of numbers as input and returns the sum of all numbers.

def sum_of_numbers(numbers):
  return sum(numbers)

numbers=(list(input("Enter numbers separated by space:").split()))
print("Sum of numbers is:",sum_of_numbers(list(map(int, numbers))))