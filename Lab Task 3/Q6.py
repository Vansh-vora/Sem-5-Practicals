#Write a function to calculate simple interest where the rate of interest has a default value of
#5%.
def simple_interest(p,t,r=5):
  return(p*t*r)/100

print(simple_interest(4,5))

