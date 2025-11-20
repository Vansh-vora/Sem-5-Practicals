#.Write a function using **varargs to print employee details like name, department, and
#salary.
def emp(**data):
  for k,v in data.items():
    print(k,":",v)

emp(name="John",department="sds",salary=23000)