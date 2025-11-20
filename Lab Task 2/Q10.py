#Demonstrate list operations: `append()`, `extend()`, `insert()`, `remove()`,
# `pop()`, `reverse()`, `sort()` in descending order.

lst=[1,2,3]

lst.append(4)
print("After append(4):", lst)
lst.extend([5,6])
print("After extend([5,6]):", lst)
lst.insert(0,0)
print("After insert(0,0):", lst)
lst.remove(3)
print("After remove(3):", lst)
popped_element=lst.pop()
print("After pop():", lst, "Popped element:", popped_element)
lst.reverse()
print("After reverse():", lst)
lst.sort(reverse=True)
print("After sort() in descending order:", lst)
