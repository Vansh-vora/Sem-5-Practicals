#Write a function using *varargs to calculate the average of any number of numeric
#arguments.
def avg(*nums):
  return sum(nums)/len(nums)

print(avg(10,20,30,40))