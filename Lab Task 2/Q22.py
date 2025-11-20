#Write a program that reads a list of words and returns a dictionary where
# keys are word lengths and values are lists of words of that length.

words=input().split()
d={}

for w in words:
  d.setdefault(len(w), []).append(w)

print("Dictionary of word lengths:", d)
