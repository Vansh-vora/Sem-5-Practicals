from tkinter import *

root=Tk()
root.title("CheckButton")
root.geometry("500x500")

var1=IntVar()
c1=Checkbutton(root,text="Python",variable=var1)
c1.pack()

root.mainloop()