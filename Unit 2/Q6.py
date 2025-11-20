#Take 10 user inputs. If the number is prime, skip it (use `continue`). If it is
#divisible by 10, stop the loop (use `break`). Use `else` to confirm normal
#loop completion

def is_prime(n):
    if n < 2: return False
    for i in range(2, n):
        if n % i == 0:
            return False
    return True

for i in range(10):
    x = int(input("Enter number: "))
    
    if is_prime(x):
        continue
    if x % 10 == 0:
        break
else:
    print("Loop completed normally")
