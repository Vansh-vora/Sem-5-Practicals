#Write a generator function that yields the square of numbers from 1 to 10.

def square():
  for i in range(1,10+1):
    yield i*i

for x in square():
  print(x)