from tkinter import *
from tkinter import messagebox


root=Tk()
root.title("Form")

Label(root,text="Name").grid(row=0)
Label(root,text="Gender").grid(row=1)

e1=Entry(root)
e1.grid(row=0,column=1)

gender=IntVar()
Radiobutton(root,text="Male",value=1,variable=gender).grid(row=1,column=1)
Radiobutton(root,text="Female",value=2,variable=gender).grid(row=1,column=2)

def submit():
  messagebox.showinfo("Info","Form Submitted")

btn=Button(root,text="Submit",command=submit).grid(row=2,column=1)


root.mainloop()