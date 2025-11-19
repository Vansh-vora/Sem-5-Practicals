import tkinter as tk 
from tkinter import *

root=tk.Tk()
root.title("Entry")
root.geometry("500x500")

e=Entry(root,width=30)
e.pack()
t=Text(root,height=5,width=30)
t.pack()

root.mainloop()