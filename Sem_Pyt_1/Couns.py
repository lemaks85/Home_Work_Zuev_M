from tkinter import *
from tkinter import ttk

root = Tk()
root.title("Money and days")
root.geometry("400x300")


def vvod():
    # res = 0
    # couns = []
    # for i in (range(1, 10)): #int(input( 'Введите номер календарного дня: ')) + 1): # Колличество дней + 1
    #     couns.append(i)
    #     for i in couns:
    #         res += i
    #     return res
    
    print("!ok")
    
def change():
    lbl['test'] = Spinbox.get()
    print(lbl)

spin = ttk.Spinbox(root, from_=1, to=366, font = 60, command=change)
spin.pack(pady = 20)
print(spin)



btn = ttk.Button(root, text="Click!" ,command=vvod)
btn.pack()

lbl = ttk.Label(root, text= 'Hello', font=("Arial Bold", 16))
lbl.pack()










#print(f'Накопленная сумма {res} рублей, мои поздравления "Продолжай в том же духе') # Сумма
# w = Label(root, text = "work")#f'In  {couns[i - 1]} days, accumulated {res} money', font= 16)
# w.pack(pady = (130, 0) )


# messagebox.showinfo("Hello World", "This is a Hello World message!!!")
root.mainloop()




