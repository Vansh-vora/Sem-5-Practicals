#Implement an e-commerce hierarchy: User → Customer →
# PremiumCustomer. Add discounts and loyalty points calculations at each
# level.

class User:
  def __init__(self, username, email):
    self.username = username
    self.email = email

  def get_username(self):
    return self.username
  def get_email(self):
    return self.email
  
  def display_info(self):
    print(f"Username: {self.username}, Email: {self.email}")

  def calculate_discount(self, amount):
    return amount
  
  def calculate_loyalty_points(self, amount):
    return amount //100
  
class Customer(User):
  def __init__(self, username, email):
    super().__init__(username, email)

  def calculate_discount(self, amount):
    discount = amount * 0.05
    return amount - discount
  
  def calculate_loyalty_points(self, amount):
    return (amount // 100) *2 
  
class PremiumCustomer(Customer):
  def __init__(self, username, email):
    super().__init__(username, email)

  def calculate_discount(self, amount):
    discount = amount * 0.10
    return amount - discount
  
  def calculate_loyalty_points(self, amount):
    return (amount // 100) * 3
  
def main():
  print("====== E-commerce System ======")

  username= input("Enter username: ")
  email= input("Enter email: ")
  print("=====Select User Type:======")
  print("1. Regular User")
  print("2. Customer")
  print("3. Premium Customer")
  user_type=input("Enter choice (1/2/3): ")

  if user_type=="1":
    user= User(username, email)
    user_type_name="Regular User"
  elif user_type=="2":
    user= Customer(username, email)
    user_type_name="Customer"
  elif user_type=="3":
    user= PremiumCustomer(username, email)
    user_type_name="Premium Customer"
  else:
    print("Invalid choice!")
    return 
  
  print("\n User Info:")
  print(f"User Type: {user_type_name}")
  amount= float(input("Enter purchase amount: ₹"))

  final_amount= user.calculate_discount(amount)
  loyalty_points= user.calculate_loyalty_points(amount)

  print("=====Billing Details:=====")
  print(user.get_username())
  print(user.get_email())
  print(f"Original Amount: ₹{amount:.2f}")
  print(f"Final Amount after discount: ₹{final_amount:.2f}")
  print(f"Loyalty Points Earned: {loyalty_points}") 

if __name__ == "__main__":
  main()