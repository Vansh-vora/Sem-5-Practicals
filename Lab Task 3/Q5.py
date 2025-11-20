#Write a function that takes a string as input and returns the number of vowels in it.
def count_vowels(n):
  vowels="aeiouAEIOU"
  return sum(1 for char in n if char in vowels)

print(count_vowels("Hello World"))