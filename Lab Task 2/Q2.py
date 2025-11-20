#Print the following hollow triangle pattern using nested `for` loops:
 #*
 #* *
 #* *
 #* *
#******

for i in range(1, 6):
  if i==5:
    print("* " * 6)
  else:
    print(" " * (5-i), end="")
    if i==1:
      print("*")
    else:
      print("*", " " * (2*i - 3) + "*")