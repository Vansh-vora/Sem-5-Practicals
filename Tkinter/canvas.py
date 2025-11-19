from tkinter import *

root=Tk()
root.title("Canvas")
root.geometry("500x500")

c=Canvas(root,width=300,height=300)
c.pack()

c.create_rectangle(50,50,200,150,fill="lightblue")
c.create_oval(100,100,200,200,fill="red")

root.mainloop()