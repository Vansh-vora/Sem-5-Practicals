#Accept a number and check whether it is a palindrome using logic (no
# string conversion allowed).

n=int(input("Enter a number:"))
orig=n
rev=0

while n>0:
  rev=rev*10 + (n%10)
  n//=10

print("Palindrome" if rev==orig else "Not a palindrome")