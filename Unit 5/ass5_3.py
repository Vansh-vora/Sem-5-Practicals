import tkinter as tk

def show_selection():
    selected_items=[]
    if var1.get():
        selected_items.append("Banana")
    if var2.get():
        selected_items.append("Apple")
    if var3.get():
        selected_items.append("Mango")
    
    if selected_items:
        label_result.config(text="You selected:" + ", ".join(selected_items))
    else:
        label_result.config(text="You selected: None")

root =tk.Tk()
root.title("Q3")
root.geometry("400x300")


heading=tk.Label(root, text="Choose your favorite food:", font=("Arial", 12), pady=10,bg="lightgreen",fg="black")

heading.pack(pady=10)

var1=tk.BooleanVar()
var2=tk.BooleanVar()
var3=tk.BooleanVar()


cb1=tk.Checkbutton(root, text="Banana", variable=var1, command=show_selection,bg="lightyellow")
cb2=tk.Checkbutton(root, text="Apple", variable=var2, command=show_selection,bg="lightpink")
cb3=tk.Checkbutton(root, text="Mango", variable=var3, command=show_selection,bg="lightcyan")

cb1.pack(anchor="w",pady=5)
cb2.pack(anchor="w",pady=5)
cb3.pack(anchor="w",pady=5) 

label_result=tk.Label(root, text="You selected: None")
label_result.pack(pady=20)  

root.mainloop()