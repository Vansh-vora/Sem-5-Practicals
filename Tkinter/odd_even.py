from tkinter import *
from tkinter import messagebox

root=Tk()
root.title("Odd Even Checker")
root.geometry("500x500")

Label(root,text="Enter a number").pack(pady=5)

num_entry=Entry(root)
num_entry.pack(pady=5)

def check_number():
  try:
    n=float(num_entry.get())

    if n%2==0:
      messagebox.showinfo("Result",f"{n} is even")
    else:
      messagebox.showinfo("Result",f"{n} is Odd")
  except:
    messagebox.showerror("Error","enter proper number")

Button(root,text="ODD and Even Checker",command=check_number).pack(pady=5)

root.mainloop()