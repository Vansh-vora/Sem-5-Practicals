from tkinter import *

root=Tk()
choice=IntVar()

r1=Radiobutton(root,text="Male",variable=choice,value=1)
r2=Radiobutton(root,text="Female",variable=choice,value=2)

r1.pack()
r2.pack()

root.mainloop()