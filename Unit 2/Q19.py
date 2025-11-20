#Create a list of 10 random numbers and remove all elements greater than
#the average of the list. Display final list

import random

lst = [random.randint(1,100) for _ in range(10)]
avg = sum(lst) / len(lst)

lst = [x for x in lst if x <= avg]
print(lst)
