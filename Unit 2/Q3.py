#Write a program to input a list of 10 names and check if there are any
# duplicate entries. If yes, display the duplicates

list=[]
for i in range(10):
  name=list.append(input("Enter name {}:".format(i+1)))

  duplicates=set()
  for name in list:
    if list.count(name)>1:
      duplicates.add(name)
      print("Duplicate entries found:", duplicates)
      break
  else:
    print("No duplicate entries found.")
