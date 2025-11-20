#Build a student record system using a dictionary. Include add, update,
# delete, and sort by marks using `lambda`

students={}

while True:
  print("1.Add Student\n2.Update Student\n3.Delete Student\n4.Display Students sorted by Marks\n5.Exit")
  ch=int(input("Enter your choice:"))

  if ch==1:
    name=input("Enter student name:")
    marks=int(input("Enter student marks:"))
    students[name]=marks
    print("Student added.")
  elif ch==2:
    name=input("Enter student name to update:")
    if name in students:
      marks=int(input("Enter new marks:"))
      students[name]=marks
      print("Student record updated.")
    else:
      print("Student not found.")
  elif ch==3:
    name=input("Enter student name to delete:")
    if name in students:
      del students[name]
      print("Student record deleted.")
    else:
      print("Student not found.")
  elif ch==4:
    sorted_students=sorted(students.items(), key=lambda x: x[1],reverse=True)
    print("Students sorted by marks:")
    for student in sorted_students:
      print("Name:", student[0], "Marks:", student[1])
  elif ch==5:
    print("Exiting...")
    break
  else:
    print("Invalid choice. Please try again.")