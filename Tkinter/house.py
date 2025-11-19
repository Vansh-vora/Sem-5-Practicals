from tkinter import *

root=Tk()
root.title("House")

canvas=Canvas(root,width=600,height=600,bg="skyblue")
canvas.pack()

canvas.create_rectangle(0,500,600,600,fill="green")

canvas.create_rectangle(200,250,500,500,fill="lightyellow",outline="black")#l,up,r,down

canvas.create_polygon(200,250,350,100,500,250,fill="brown",outline="black")

canvas.create_rectangle(230,350,325,500,fill="darkred")

canvas.create_arc(100,50,160,130,start=0,extent=90,style=ARC,width=3)
canvas.create_arc(140,70,200,130,start=90,extent=90,style=ARC,width=3)
root.mainloop()
