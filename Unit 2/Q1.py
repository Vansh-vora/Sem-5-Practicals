#Write a Python program to input a list of student marks, find average, and
# print 'Pass with Distinction' if average ≥ 85, 'Pass' if ≥ 50, else 'Fail'. Also,
# count how many subjects are failed (<35).

students=[]
for i in range(5):
  mark=int(input("Enter the markk in subject {}:".format(i+1)))
  students.append(mark)

  avg=sum(students)/len(students)
  fail_count=0

  for mark in students:
    if mark<35:
      fail_count+=1
    if avg>=85:
      result='Pass with Distinction'
    elif avg>=50:
      result='Pass'
    else:
      result='Fail'

  
print("Average marks: {:.2f}".format(avg))
print("Result: {}".format(result))
print("Number of subjects failed: {}".format(fail_count))
