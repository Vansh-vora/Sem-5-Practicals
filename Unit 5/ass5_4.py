import tkinter as tk


root=tk.Tk()
root.title("Q4")
root.geometry("400x300")

age=tk.Label(root, text="Your Age:", font=("Arial", 12), pady=10)

age.pack(pady=10)
age_var=tk.StringVar()

def show_message():
  if age_var.get()=="less than 18":
    lb1_result.config(text="You are not eligible to vote", fg="red")
  elif age_var.get()=="more than 18":
    lb1_result.config(text="You are eligible to vote", fg="green")

rb1=tk.Radiobutton(root, text="less than 18", variable=age_var, value="less than 18", command=show_message)
rb2=tk.Radiobutton(root, text="more than 18", variable=age_var, value="more than 18", command=show_message)



lb1_result=tk.Label(root, text="", font=("Arial", 12), pady=10)
lb1_result.pack(pady=20)

rb1.pack(anchor="w",pady=5)
rb2.pack(anchor="w",pady=5)

root.mainloop()