#Create a nested dictionary that stores student names as keys, and their
# subjects and marks as sub-dictionaries. Add, update and delete subjects or marks

students={"Alice":{"Math":85, "Science":90}, "Bob":{"Math":78, "English":88}}


students["Charlie"]={"Math":92, "Science":87}
print("After adding Charlie:", students)
students["Alice"]["English"]=95
print("After updating Alice's marks:", students)
del students["Bob"]["Math"]
print("After deleting Bob's Math marks:", students)
print("Final student records:", students)
