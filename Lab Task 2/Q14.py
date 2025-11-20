#Accept a tuple of integers. Print elements whose square is > 50 using list
# comprehension.

t=tuple(int(x) for x in input("Enter tuple: ").split(","))
result=[x for x in t if x*x > 50]
print("result:", result)