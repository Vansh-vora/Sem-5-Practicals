#Write a function to calculate simple interest where the rate of interest has a default value of 
# 5%

def simple_interest(principal, time, rate=5):
  return(principal * time * rate)/100

principal =float(input("Enter principal amount:"))
time=float(input("Enter time in years:"))

print ("Simple Interest is:", simple_interest(principal,time))