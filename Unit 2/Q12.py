#Input a paragraph and count the number of words, vowels, and consonants.
#Store word frequencies in a dictionary.

import string

para = input("Enter paragraph: ").lower()

words = para.split()
vowels = sum(1 for ch in para if ch in "aeiou")
consonants = sum(1 for ch in para if ch.isalpha() and ch not in "aeiou")

freq = {}
for w in words:
    freq[w] = freq.get(w, 0) + 1

print("Words:", len(words))
print("Vowels:", vowels)
print("Consonants:", consonants)
print("Frequency:", freq)
