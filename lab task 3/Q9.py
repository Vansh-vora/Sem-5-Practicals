#Write a function using *varargs to calculate the average of any number of numeric arguments

def average(*numbers):
  if len(numbers) == 0:
    return 0
  return sum(numbers) / len(numbers)

print("Average of 10, 20, 30 is:", average(10, 20, 30))
print("Average of 5, 15, 25, 35 is:", average(5, 15, 25, 35))
