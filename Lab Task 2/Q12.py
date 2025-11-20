#Accept a string and create a dictionary where each key is a character and
# value is its frequency. Ignore spaces and make it case-insensitive.

s=input("Enter a string:").replace(" ","").lower()
d={}

for ch in s:
  d[ch]=d.get(ch,0)+1

print("Character frequency dictionary:", d)