from tkinter import *
from tkinter import messagebox


root=Tk()
root.title("Calculator")
root.geometry("1000x1000")

Label(root,text="Enter first number").pack(pady=5)
e1=Entry(root)
e1.pack(pady=5)

Label(root,text="Enter Second number").pack(pady=5)
e2=Entry(root)
e2.pack(pady=5)

def calculate(op):
  try:
    a=float(e1.get())
    b=float(e2.get())

    if op=="+":
      result=a+b
    elif op=="-":
      result=a-b
    elif op=="*":
      result=a*b
    elif op=="/":
      if b==0:
        messagebox.showerror("Error","Cannot divided by zero")
        return
      result=a/b
    messagebox.showinfo("Result",f"Answer:{result}")

  except:
    messagebox.showerror("Result","Enter valid number")

Button(root,text="Addition",width=15,command=lambda:calculate("+")).pack(pady=10)
Button(root,text="Subtraction",width=15,command=lambda:calculate("-")).pack(pady=10)
Button(root,text="Multiply",width=15,command=lambda:calculate("*")).pack(pady=10)
Button(root,text="Division",width=15,command=lambda:calculate("/")).pack(pady=10)

root.mainloop()
