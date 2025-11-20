#Create a number guessing game where the program randomly picks a
# number from 1 to 100, and the user has to guess it in limited attempts (use loop + conditions).

import random

n=random.randint(1, 100)

for i in range(7):
  g=int(input("Guess the number (Attempt {}): ".format(i+1)))
  if g==n:
    print("Congratulations! You guessed the number.")
    break
  elif g<n:
    print("Too low!")
  else:
    print("Too high!")
else:
  print("Sorry, you've used all attempts. The number was:", n)