#Write a login system using a dictionary. Allow up to 3 login attempts and
# show success or failure with proper message

users={"user1":"pass1", "user2":"pass2","user3":"pass3"}

for i in range(3):
  u=input("Username:")
  p=input("Password:")
  if u in users and users[u]==p:
    print("Login Successful")
    break
  
  else:
    print("Login Failed")
else:
  print("Maximum login attempts exceeded")