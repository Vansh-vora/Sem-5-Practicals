#Write a Python program that accepts 5 strings and displays the longest and
#shortest strings

lst = [input() for _ in range(5)]
print("Longest:", max(lst, key=len))
print("Shortest:", min(lst, key=len))
