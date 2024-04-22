import tkinter as tk
import customtkinter
import sqlite3

root = customtkinter.Ctk()
root.title("My Notes")
root.geometry('300x300')
root.resizable(0, 0)

def save_notes():
    note = note_entry.get()
    cur.execute("INSERT INTO notes (note) VALUES (?)", (note,))
    conn.commit()
    update_list_box()
    note_entry.delete(0, customtkinter.END)


def delete_note():
    index = notes_list.curselection()
    if index:
        selected_note = notes_list.get(index)
        cur.execute("DELETE FROM notes WHERE note=?", (selected_note,))
        conn.commit()
        update_list_box()

def db_start():
    global conn, cur

    conn = sqlite3.connect('notes.db')
    cur = conn.cursor()
    cur.execute("""CREATE TABLE IF NOT EXISTS notes (id INTEGER PRYMARY KEY, note TEXT)""")


def update_list_box():
    notes_list.delete(0, customtkinter.END)
    cur.execute("SELECT * FROM notes")
    notes = cur.fetchall()
    for note in notes:
        note_text = note[1]
        notes_list.insert(customtkinter.END, note_text)
        

note_lable = customtkinter.CTkLabel(root, text="Note:")
note_lable.pack(pady=5)

note_entry = customtkinter.CTkEntry(root)
note_entry.pack(pady=5)

save_button = customtkinter.CTkBuuton(root, text="Create note", command=save_note)
save_button.pack(pady=5)

delete_button = customtkinter.CTkButton(root, text="Delete note", commanf=delete_note)
delete_button.pack(pady=5)

notes_list = tk.Listbox(root, width=45, height=15)
notes_list.pack(pady=5)

db_start()
update_list_box()
root.mainloop()
conn.close()


