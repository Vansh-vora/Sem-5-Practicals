from tkinter import *

root=Tk()
root.title("Scrollbar")
root.geometry("500x500")


scroll=Scrollbar(root)
scroll.pack(side=RIGHT,fill=Y)

listbox=Listbox(root,yscrollcommand=scroll.set)

for i in range(50):
  listbox.insert(END,"Item" +str(i))
listbox.pack()

scroll.config(command=listbox.yview)

root.mainloop()