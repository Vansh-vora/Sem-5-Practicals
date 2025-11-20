#Write a program to manage a contact book using dictionary. Allow user to
#add, update, delete, and search contacts using menu-driven approach.

contacts = {}

while True:
    print("\n1.Add 2.Update 3.Delete 4.Search 5.Exit")
    ch = int(input("Enter choice: "))

    if ch == 1:
        name = input("Name: ")
        num = input("Number: ")
        contacts[name] = num

    elif ch == 2:
        name = input("Enter name: ")
        if name in contacts:
            contacts[name] = input("New number: ")

    elif ch == 3:
        name = input("Enter name: ")
        contacts.pop(name, None)

    elif ch == 4:
        name = input("Enter name: ")
        print(contacts.get(name, "Not found"))

    else:
        break
