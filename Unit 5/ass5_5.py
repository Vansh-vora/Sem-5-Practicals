import tkinter as tk

root=tk.Tk()
root.title("Q5")
root.geometry("400x300")

select=tk.Label(root,text="Pls Select...", font=("Arial", 12), pady=10)

select_var=tk.StringVar()

def show_selected():
  selected_value=select_var.get()
  lb1_result.config(text=f"You selected:" + select_var.get())

select.pack(pady=10)

rb1=tk.Radiobutton(root, text="Male", value="Male", bg="lightblue", fg="black")
rb2=tk.Radiobutton(root, text="Female", value="Female", bg="lightpink", fg="black")

lb1_result=tk.Label(root, text="", font=("Arial", 12), pady=10)
lb1_result.pack(pady=20)

rb1.pack(anchor="w",pady=5)
rb2.pack(anchor="w",pady=5) 

btn=tk.Button(root, text="Quit", bg="red", fg="black", command=root.destroy)
btn.pack(pady=20)
tk.Button(root, text="Show", command=show_selected, bg="lightblue").pack(pady=10)


btn.config(command=root.destroy)
root.mainloop()
