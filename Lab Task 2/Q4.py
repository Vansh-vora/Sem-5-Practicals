#Accept a tuple of 10 integers. Count even and odd numbers. Extract
# prime numbers into a new tuple. Display max, min, and sum of the new
# tuple.

t= tuple(int(input("Enter integer {}:".format(i+1))) for i in range(10))

even=0
odd=0
primes=[]

for num in t:
  if num%2==0:
    even+=1
  else:
    odd+=1

  if num>1:
    for i in range(2, int(num ** 0.5) + 1):
      if num%i==0:
        break
    else:
      primes.append(num)

print("Total even numbers:", even)
print("Total odd numbers:", odd)

new_tuple=tuple(primes)
print("New tuple of prime numbers:",new_tuple)

if new_tuple:
        print("Maximum in new tuple:", max(new_tuple))
        print("Minimum in new tuple:", min(new_tuple))
        print("Sum of new tuple:", sum(new_tuple))
else:
         print("No prime numbers found.")
