#Write a program to find common elements between two tuples without
#converting them to lists or sets.

t1 = tuple(map(int, input().split()))
t2 = tuple(map(int, input().split()))

common = []

for x in t1:
    if x in t2 and x not in common:
        common.append(x)

print("Common:", tuple(common))
