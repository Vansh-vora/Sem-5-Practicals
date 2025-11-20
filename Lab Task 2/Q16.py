#Accept 10 numbers. Create a second list with even numbers only. Count
# frequency of each even number using `count()` method.

num=[]
for i in range(10):
  n=int(input("Enter number {}:".format(i+1)))
  num.append(n) 

even_nums=[x for x in num if x%2==0]
print("List of even numbers:", even_nums)
for x in set(even_nums):
  print("Number {} occurs {} times".format(x, even_nums.count(x)))
  