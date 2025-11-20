#Write a Python program to print a square pattern with diagonals. Example
#for input 5:
#* *
# * *
# *
# * *
#* *

n = int(input())

for i in range(n):
    for j in range(n):
        if i==j or i+j==n-1:
            print("*", end="")
        else:
            print(" ", end="")
    print()
