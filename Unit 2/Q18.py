#Write a program to input a tuple of strings and find how many strings
#contain only vowels.

t = tuple(input().split())
count = sum(1 for s in t if all(ch in "aeiouAEIOU" for ch in s))

print("Only vowel strings:", count)
