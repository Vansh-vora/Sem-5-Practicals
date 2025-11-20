#Accept a tuple of integers and count how many elements are divisible by 3
# but not by 5. Also, calculate their sum

numbers=[]
n=int(input("Enter the number of elements in the tuple:"))
for i in range(n):
  num=int(input("Enter elemnt {}:".format(i+1)))
  numbers.append(num)
  
tup=tuple(numbers)
count=0
total_sum=0
for num in tup:
  if num%3==0 and num%5!=0:
    count+=1
    total_sum+=num
    print("Count of elements divisible by 3 but not by 5:", count)
    print("Sum of elements divisible by 3 but not by 5:", total_sum)
  else:
    print("No elements divisible by 3 but not by 5 found.")