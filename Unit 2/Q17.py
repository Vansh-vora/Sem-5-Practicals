#Accept a number from the user and reverse it using a while loop (without
#converting it into a string).
n = int(input("Enter number: "))
rev = 0

while n > 0:
    d = n % 10
    rev = rev*10 + d
    n //= 10

print("Reversed:", rev)
