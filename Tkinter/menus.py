from tkinter import *

root=Tk()

menubar=Menu(root)
root.config(menu=menubar)

filemenu=Menu(menubar,tearoff=0)
menubar.add_cascade(label="File",menu=filemenu)
menubar.add_cascade(label="vdf",menu=filemenu)

filemenu.add_command(label="New")
filemenu.add_command(label="Open")
filemenu.add_separator()
filemenu.add_command(label="Exit",command=root.quit)

root.mainloop()