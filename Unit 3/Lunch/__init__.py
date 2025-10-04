#Write a Python program that creates a package called “Lunch” which consists of fruit.py and vegetable.py. Fruit.py contains 3 function called apple(), banana(), orange(). Vegetable.py contains 2 function called potato() and tomato(). Create one main file outside the lunch package and import Lunch to access fruit.py and vegetable.py file using init .py file. Call all the functions in main file using the concept of Package.

#__init__.py

from .fruit import apple, banana, orange
from .vegetable import potato, tomato
