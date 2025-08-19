#6. Write a program that uses a lambda function and *args together to multiply all givennumbers by 2.

def multiply_by_two(*args):
  return list(map(lambda x: x * 2,args))

result=multiply_by_two(1,3,5,7,9)
print("Result:",result)