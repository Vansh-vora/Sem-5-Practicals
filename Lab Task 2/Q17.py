#Accept a sentence and create a dictionary where each word is a key and
# value is its length. Print the word(s) with the maximum length.

s=input("Enter a sentence:").split()
d={w: len(w) for w in s}
mx=max(d.values())
longest_words=[w for w, length in d.items() if length==mx]
print("Word length dictionary:", d)
print("Word(s) with maximum length:", longest_words)
print("Maximum length:", mx)
