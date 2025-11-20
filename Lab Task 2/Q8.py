#Given a list of numbers, use `enumerate()` to print index and value. Use
# `all()` to check if all elements are positive, and `any()` to check if any is a
# multiple of 7.

list=[]

for i in range(10):
  n=list.append(int(input("Enter number {}:".format(i+1))))
  

print("List with index and value:")
for index, value in enumerate(list):
  print("Index:",index,"Value:",value)

if all(x>0 for x in list):
    print("All elements are positive.")
else:
    print("Not all elements are positive.")

if any(x%7==0 for x in list):
    print("At least one element is a multiple of 7.")
else:
    print("No elements are multiples of 7.")

  