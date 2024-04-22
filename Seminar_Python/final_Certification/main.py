import tkinter as tk
import customtkinter
import sqlite3

root = customtkinter.Ctk()
root.title("My Notes")
root.geometry('300x300')
root.resizable(0, 0)

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

root.mainloop()


