"""
Program: 
Author: Artem Fedorov
Date: Dec.6, 2022
Filename: query_sqlite.py
Purpose: Read from sqlite
"""

import sqlite3 as PROGdemo

con  = PROGdemo.connect('persons.sqlite')

with con:
    data = con.execute('SELECT * from person;')
    for rec in data:
        print(rec)