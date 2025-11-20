#Create a program to input two lists and convert them into a dictionary
#using one as keys and one as values. Swap key-value pairs and display the
#reversed dictionary.

keys = input().split()
values = input().split()

d = dict(zip(keys, values))
rev = {v:k for k,v in d.items()}
print("Original:", d)
print("Reversed:", rev)
