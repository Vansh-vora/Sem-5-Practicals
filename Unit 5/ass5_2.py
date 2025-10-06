import tkinter as tk


def show_selection():
  selected_value = selected.get()
  label_result.config(text=f"You selected: {selected_value}")

#create main window
root = tk.Tk()
root.title("Radio Button Example")
root.geometry("300x200")


selected=tk.StringVar()

# Create radio buttons

heading=tk.Label(root, text="Select your favorite programming Language:", font=("Arial", 12), pady=10)
rb1=tk.Radiobutton(root, text="Python",variable=selected, value="Python",command=show_selection)
rb2=tk.Radiobutton(root, text="Java", variable=selected, value="Java",command=show_selection)
rb3=tk.Radiobutton(root, text="C++", variable=selected, value="C++",command=show_selection)

heading.pack(pady=10)
rb1.pack(anchor="w",pady=5)
rb2.pack(anchor="w",pady=5)
rb3.pack(anchor="w",pady=5)

label_result=tk.Label(root, text="You Selected:")
label_result.pack(pady=20)

root.mainloop()