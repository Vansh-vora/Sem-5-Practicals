from tkinter import *
from tkinter import messagebox

root=Tk()

def show_msg():
  messagebox.showinfo("Title","Hello from Vansh")

btn=Button(root,text="Show Message",command=show_msg)
btn.pack()

root.mainloop()