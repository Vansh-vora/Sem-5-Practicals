#Accept 10 integers. Remove duplicates, sort in descending order, print the
#second highest and second lowest unique value, and average of top 5
#values.

numbers=[]

for i in range(10):
  n=int(input("Enter integer {}:".format(i+1)))
  numbers.append(n)

print ("Original List with Duplicate values:", numbers)
print("List after removing duplicates and sorting in descending order:")
u=sorted(set(numbers), reverse=True)
print(u)
print("Second highest", u[1])
print("Second Lowest", u[-2])
print(u[5:])
print(u[1:5])
print("Average of top 5 values:", sum(u[:5])/5)
