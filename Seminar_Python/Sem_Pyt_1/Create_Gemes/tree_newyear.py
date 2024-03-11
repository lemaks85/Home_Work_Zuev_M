from tkinter import*
from random import randint, choice

def click(event):
    x = event.x
    y = event.y
    r1 = randint(5, 30)
    r2 = randint(5, 30) 
    colors = ['red', 'yellow', 'blue', 'purple', 'white', 'brown', 'orange', 'pink', 'black', 'gray']
    c.create_oval(x - r1, y - r1, x + r2, y + r2, fill=choice(colors))


def qwerty():
    #Ёлка
    c.create_rectangle(350, 500, 450, 570, outline='black', width='2', fill='brown')
    
    c.create_polygon(100, 500, 400, 250, 700, 500, outline='black', width='2', fill='green')
    c.create_polygon(200, 350, 400, 150, 600, 350, outline='black', width='2', fill='green')
    c.create_polygon(300, 200, 400, 50,  500, 200, outline='black', width='2', fill='green')
    
    #Звезда
    c.create_polygon(400, 5, 350, 110, 480, 50, 320, 50, 460, 110, outline='black', width='2', fill='yellow')
    
    #Снеговик
    c.create_oval(800, 500, 900, 600, fill='white')
    c.create_oval(810, 440, 890, 520, fill='white')
    c.create_oval(820, 390, 880, 450, fill='white')
    c.create_oval(825, 400, 845, 420, fill='black')
    c.create_oval(850, 400, 870, 420, fill='black')
    
def create_snow(t, n):
    for i in range(500):
        x = randint(1, cWidth)
        y = randint(-cHeight * n - 8, cHeight * (1 -n))
        w = randint(3, 8)
        c.create_oval(x, y, x + w, y + w, fill='white', tag=t)
        
        
def motion():
    global indicator_count  
    c.move('tagOne', 0, 1)
    c.move('tagTwo', 0, 1)
    c.move(indicator, 0, 1)
    if c.coords(indicator)[1] < cHeight + 1:
        root.after(20, motion)
    else:
        c.move(indicator, 0, -cHeight - 5)
        root.after(20, motion)
        if indicator_count == 0:
            c.delete('tagOne')
            create_snow('tagOne', 1)
            indicator_count = 1
        else:
            c.delete('tagTwo')
            create_snow('tagTwo', 1)
            indicator_count = 0
        
    
def main():
    global indicator, indicator_count
    qwerty()
    indicator = c.create_oval(23, -5, 28, 0, fill='white')
    indicator_count = 0
    create_snow('tagOne', 0)
    create_snow('tagtwo', 1)
    motion()
    

    

root = Tk()
root.title('Укрась елочку')
root.geometry('1280x720+300+300')
#root.resizable(0, 0)   
cHeight = 720
cWidth = 1280
c = Canvas(root, width=cWidth, height=cHeight, bg = '#002655')
c.pack()
c.create_oval(-100, 550, 1300, 820, fill='white')
main()
c.bind('<Button-1>', click)
root.mainloop()

