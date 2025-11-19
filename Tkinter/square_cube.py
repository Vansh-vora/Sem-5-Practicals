from tkinter import *
from tkinter import messagebox

root=Tk()
root.title("Square and Cube calculator")
root.geometry("1000x1000")

Label(root,text="Enter Number").pack(pady=5)

num_entry=Entry(root)
num_entry.pack(pady=5)

def find_Square():
  try:
    n=float(num_entry.get())
    sq=n*n
    messagebox.showinfo("Result",f"square={sq}")
  except:
    messagebox.showerror("Error","Please enter a valid number")

def find_Cube():
  try:
    n=float(num_entry.get())
    cu=n**3
    messagebox.showinfo("Result",f"Cube={cu}")
  except:
    messagebox.showerror("Error","Please enter a valid number")

Button(root,text="Find Square",width=15,command=find_Square).pack(pady=5)
Button(root,text="Find Cube",width=15,command=find_Cube).pack(pady=5)

root.mainloop()