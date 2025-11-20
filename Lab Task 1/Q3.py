#Write a Python program that counts how many times a value appears in a tuple

t = (1,2,3,2,4,2,5,1,2)
val = int(input("Enter a value to count in the tuple:"))

count= t.count(val)
print("The count is:",count)