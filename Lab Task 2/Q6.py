#Take 10 numbers from the user. Use `continue` to skip numbers divisible
# by both 3 and 5. Use `break` if number is negative. If loop completes, us
# `else` to print “Input complete”

for i in range(10):
  n=int(input("Enter number {}:".format(i+1)))
  if n<0:
    print("Negative number entered.")
    break
  if n%3==0 and n%5==0:
    continue
  else:
    print("You entered:", n)
else:
  print("Input complete")
