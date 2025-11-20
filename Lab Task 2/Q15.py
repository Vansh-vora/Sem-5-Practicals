#Create two lists: one with keys and one with values. Combine them into a
# dictionary using `zip()` and update one of the values.

keys=['name', 'age', 'city']
values=['Alice', 30, 'New York']

d=dict(zip(keys, values))
print("Original dictionary:", d)

d["age"]=31
print("Updated dictionary:", d)
