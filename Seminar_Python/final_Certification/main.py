import tkinter as tk
from tkinter import ttk
from tkinter import messagebox
import sqlite3

connection = sqlite3.connect('note.db')
cur = connection.cursor()

cur.execute("""
            CREATE TABLE IF NOT EXISTS transactions (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT,
            amount REAL,
            comment TEXT
                )
""")

connection.commit()