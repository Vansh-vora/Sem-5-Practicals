#Accept a tuple of integers. Without converting to list, find the 3rd highest
# and 2nd lowest values.

t=tuple(int(x) for x in input("Enter tuple of integers (comma separated): ").split(","))
u=sorted(set(t), reverse=True)
print(u)
print("Third highest value:", u[2])
u=sorted(set(t))
print(u)
print("Second lowest value:", u[1])
