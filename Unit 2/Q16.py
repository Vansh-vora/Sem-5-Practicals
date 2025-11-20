#Create a dictionary of student names and a list of their marks in 3 subjects.
#Calculate and store the average for each student. Display the dictionary
#with names and averages

students = {
    "A": [80,90,85],
    "B": [70,60,65],
    "C": [95,80,75]
}

avg = {name: sum(m)/3 for name,m in students.items()}
print(avg)
