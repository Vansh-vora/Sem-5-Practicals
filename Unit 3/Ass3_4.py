#. Write a Python program to select a random element from a list, set. Use random.choice()

import random

#list
fruits = ['apple', 'banana', 'cherry', 'date']
random_fruit = random.choice(fruits)
print("Randomly selected fruit:", random_fruit)

#set
colors = {'red', 'blue', 'green'}
random_color = random.choice(list(colors))
print("Randomly selected color:", random_color) 

