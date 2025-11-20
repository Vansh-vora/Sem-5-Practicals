#Create a dictionary with employee names and salaries. Increase salary by
# 10% if it's <50,000. Remove employees whose updated salary exceeds
# 1,00,000.

employees ={"Amit":45000, "Sonal":52000, "Ravi":60000,"Priya":48000, "Vikram":99000}

for k in list(employees.keys()):
  employees[k]*=1.10
  if employees[k]>100000:
    del employees[k]

print(employees)