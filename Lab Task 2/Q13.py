#Continuously accept numbers until user enters 0. Store in a list. Print
# max, min, sum, and count of even numbers.

lst=[]

while True:
  n=int(input("Enter a number (0 to stop):"))
  if n==0:
    break
  lst.append(n)

print("List of numbers entered:", lst)
print("Maximum:",max(lst))
print("Minimum:",min(lst))
print("Sum:",sum(lst))
even_count=sum(1 for x in lst if x%2==0)
print("Count of even numbers:", even_count) 