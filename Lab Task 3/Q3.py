#Write a function to check whether a given number is prime or not.
def prime(n):
  if n<2:
    return False
  for i in range(2,int(n**0.5)+1):
    if n%i==0:
      return False
    return True
  
print(prime(11))