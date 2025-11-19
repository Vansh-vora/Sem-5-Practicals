from tkinter import *

root=Tk()
def on_click(event):
  print("Mouse clicked at:",event.x,event.y)

root.bind("<Button-1>",on_click)

root.mainloop()