#Given a list of integers, write a Python program to remove all duplicates without
# using set(), and preserve the original order

lst=[1,2,3,4,2,3,5,1,6,4]
unique=[]

for item in lst:
  if item not in unique:
    unique.append(item)

print("List after removing duplicates:",unique)