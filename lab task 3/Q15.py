# Write a function to accept a sentence and return a dictionary containing each word and its frequency.

def word_frequency(sentence):
  word=sentence.split()
  freq_dict ={}

  for word in word:
    word= word.lower()
    freq_dict[word]=freq_dict.get(word, 0)+1

  return freq_dict

sentence= input("Enter a sentence:")
result = word_frequency(sentence)
print("Word frequency in the sentence is:", result)