import tkinter as tk

root=tk.Tk()
root.title("Creating Label")
root.geometry("300x300")
label=tk.Label(root,text="Hello World",font=("Arial",16))
label.pack()

root.mainloop()