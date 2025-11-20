#Write a Python program to flatten a nested list (e.g., `[[1, 2], [3, 4], [5]]`)
# into a single list `[1, 2, 3, 4, 5]` without using built-in `sum()`

lst=[[1,2],[3,4],[5]]
flat=[]

for sub in lst:
  for item in sub:
    flat.append(item)

print("Flattened list:", flat)