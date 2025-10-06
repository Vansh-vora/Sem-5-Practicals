# Create a Python program which have following widgets:
# • Button
# • MessageBox
# • When user clicks on Button, MessageBox is display with some message

import tkinter as tk
from tkinter import messagebox

def show_message():
    messagebox.showinfo("Message","Button Clicked!")

root =tk.Tk()
root.title("Button and MessageBox Example")
root.geometry("300x200")


btn= tk.Button(root, text="Click Me",bg="lightblue", command=show_message)
btn.pack(pady=60)


root.mainloop()