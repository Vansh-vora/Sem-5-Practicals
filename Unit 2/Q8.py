#Create a set of vowels found in a user-given sentence. Then convert the set
#to a frozenset and try to remove an element (handle the exception).

s = input("Enter sentence: ").lower()
vowels = set([ch for ch in s if ch in 'aeiou'])

fz = frozenset(vowels)

try:
    fz.remove('a')
except Exception as e:
    print("Error:", e)

print("Vowels set:", vowels)
print("Frozen set:", fz)
