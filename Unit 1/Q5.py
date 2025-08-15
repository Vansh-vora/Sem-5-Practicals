#Write a Python program which will have Main Menu for selecting Elective Subjects asfollows:
#Main Menu:
#1. Joomla
#2. Ruby onRails
#3. Drupal
#4. Android
#5. iOS
#Display proper message for every choice. Use elif to create a menu:

print("Main Menu:")
print("1.Joomla")
print("2.Ruby on Rails")
print("3.Drupal")
print("4.Android")
print("5.IOS")

choice= int(input("Enter your choice (1-5):"))

if choice == 1:
  print("You have selected Joomla.")
elif choice == 2:
  print("You have selected Ruby on Rails.")
elif choice == 3:
  print("You have selected Drupal.")
elif choice == 4:
  print("You have selected Android.")
elif choice == 5:
  print("You have selected IOS.")
else:
  print("Invalid choice. Please select a number between 1 and 5.")