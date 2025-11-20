#Accept an integer input and display a right-angled number triangle pattern
#using nested loops. Example for input 4:
#1
#2 3
#4 5 6
#7 8 9 10

n= int(input("Enter the number of rows:"))
c=1
for i in range(1,n+1):
  for j in range(i):
    print(c, end=" ")
    c+=1

  print()