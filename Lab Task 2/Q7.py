#Create two sets: even and prime numbers between 1–20. 
# Find union,intersection, difference, and symmetric difference. Convert one to
# frozenset and try modifying it (handle the error).

even= {x for x in range(1,21) if x%2==0}
prime={2,3,5,7,11,13,17,19}

print("Union:", even | prime)
print("Intersection:", even & prime)
print("Difference (even - prime):", even - prime)
print("Symmetric Difference:", even ^ prime)

f=frozenset(even)
try:
  f.add(22)
except Exception as e:
  print("Error:", e)