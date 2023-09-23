"""
Assignment 5
Author: Artem Fedorov
Date: 12/9/2022
File: dbPython.py


"""

import sqlite3 as PROGdemo
#connection to database to further work with it
conn = PROGdemo.connect("persons.sqlite")
def main():

    #creating functuion that output all values from database
    def all():
        with conn:
            data = conn.execute('Select * from person')
            for rec in data:
                print(rec)
                
    #creating function that output row that related with specific last name 
    def last():
        # user input, where user should input a last name
        user_input = input("Enter last name: ")
        with conn:
            data = conn.execute(f'Select * from person where LastName = "{user_input}"')#query that specified the row that should be outputted
            for rec in data:
               print(rec)
                
    #creating function that addinng new row into a tababese 
    def add():
        #checing did user use numbers while imputing ID  
        try: 
            user_id = int(input("Enter person's ID: "))
        except ValueError:
            raise("Use only numbers")
        first_name = input("Enter first name: ")
        middle_name = input("Enter middle name: ")
        last_name = input("Enter last name:")
        date_of_birth = input("Enter date of birth: ")
        username = input("Enter username: ")
        email = input("Enter email : ")
        password = input("Enter password : ")
        #checing did user use numbers while imputing Address_ID 
        try:
            address_id = input("Enter address id: ")
        except ValueError:
            raise("Use only numbers")
        with conn:
            #checking if middle name is emplty and put Null value if it is
            if middle_name == '' or middle_name == ' ':
                data = conn.execute(f"INSERT INTO person(ID, FirstName,MiddleName, LastName, DateOfBirth, Username, Email, Password,AddressID) VALUES({user_id},'{first_name}',Null,'{last_name}','{date_of_birth}','{username}','{email}','{password}','{address_id}')")
            else:
                data = conn.execute(f"INSERT INTO person(ID, FirstName,MiddleName, LastName, DateOfBirth, Username, Email, Password,AddressID) VALUES({user_id},'{first_name}','{middle_name}','{last_name}','{date_of_birth}','{username}','{email}','{password}','{address_id}')")
            for rec in data:
                print(rec)
                
     #printing instructions for user input
    print("Enter: \n1 if you want to see all information in database\n2 if you want to see row to related to specific last name\n3 if you want to add new row.")
    is_uin = True
    #cheking is user input correct
    while is_uin:
        #checing did user use numbers  
        try: 
            ui = int(input('> '))
        except ValueError:
            raise("Use only numbers")
        # checking did user number in range from 1 to 3, overwise it prints how input should looks like
        if ui == 1:
            all()
            is_uin = False
        elif ui == 2: 
            last()
            is_uin = False
        elif ui == 3:
            add()
            is_uin = False
        else: 
            print("Use only numbers from 1 to 3")
            pass
        
main()