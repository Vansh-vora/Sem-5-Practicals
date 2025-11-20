#Write a function to accept a sentence and return a dictionary containing each word and
#its frequency
def word_frequency(sentence):
  words=sentence.split()
  freq={}
  for word in words:
    freq[word]=freq.get(word,0)+1
  return freq

print(word_frequency("This  is a test"))