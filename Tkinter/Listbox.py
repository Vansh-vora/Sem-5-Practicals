from tkinter import *

root=Tk()
root.title("Listbox")
root.geometry("500x500")

lb=Listbox(root)
lb.insert(1,"Python")
lb.insert(2,"PHP")
lb.insert(3,"Java")
lb.insert(4,"C++")

lb.pack()

root.mainloop()