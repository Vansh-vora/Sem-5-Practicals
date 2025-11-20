#Create a program that checks whether a given list of brackets (like
# `'([{}])'`) is balanced using stack logic (using list as stack).

s=input("Enter brackets string:")
stack=[]
pairs={')':'(', '}':'{', ']':'['}

for ch in s:
  if ch in '({[':
    stack.append(ch)
  elif ch in ')}]':
    if not stack or stack[-1]!=pairs[ch]:
      print("Not balanced")
      break
    stack.pop()

else:
    print("Balanced" if not stack else"Not balanced")