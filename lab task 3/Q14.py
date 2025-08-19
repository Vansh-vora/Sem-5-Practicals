#Write a generator function that yields the square of numbers from 1 to 10

def square_generator():
  for i in range(1, 11):
    yield i**2

for square in square_generator():
  print(square)