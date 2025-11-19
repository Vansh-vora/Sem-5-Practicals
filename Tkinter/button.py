import tkinter as tk

root=tk.Tk()
root.title("Button")
root.geometry("300x300")

def clicked():
  print("Button clicked")

btn=tk.Button(root,text="Clickme",command=clicked)
btn.pack()

root.mainloop()