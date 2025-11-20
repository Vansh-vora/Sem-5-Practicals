#Write a Python program to accept marks for 5 subjects, calculate average,\
# and assign grade (A/B/C/D/Fail). If any subject has marks <35, display
# “Fail due to subject back”.

marks=[]

for i in range(5):
  m=int(input("Enter marks for subject {}:".format(i+1)))
  marks.append(m)

if any(m<35 for m in marks):
  print("Fail due to subject back")
else:
  avg=sum(marks)/5
  print("Average marks:",avg)

  if avg>=85:
    grade='A'
  elif avg>=70:
    grade='B'
  elif avg>=50:
    grade='C'
  elif avg>=35:
    grade='D'
  else:
    grade='Fail'
  print("Grade:",grade)
        