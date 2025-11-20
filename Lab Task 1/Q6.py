#Write a python program to perform following operations on string.
# • Reverse string and print it
# • count the occurance
# • Check whether the string endswith particular substring or not
# • find substring

s = input("Enter a String:")

#Reverse
print("Reversed String is:",s[::-1])

#count theoccurance
char = input("Enter a character to count its occurance:")
print("count=",  s.count(char))

#Endswith check
end = input("Enter substring to check ending:")
print("Ends with given substring?",s.endswith(end))

#find substring
sub = input("Enter substring to find:")
pos=s.find(sub)

if pos != -1:
  print("Substring found at index:",pos)
else:
  print("Substring not found")
