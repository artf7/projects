"""
Assignment 3
Problem: 1.2
Author: Artem Fedorov
Date: 11/24/2022
File: star_pattern.py
"""
is_typing = True


while is_typing:

    check = True
    
    while check:
        try:
            n = int(input("Enter number of lines: "))
        except:
            raise TypeError("Only integrs are alloweds")
        if n > 0 and n <= 10:
            check = False 
        else: 
            print("Enter number below or equal 10")

    print()
    # square pattern
    for x in range(1, n+1):
        print('* '* n)
        
    print()
    # pyramid pattern
    for x in range(1,n+1):
        print('*'* x )
    
    q_or_s = input("Do you want to continue(y/n): ")
    
    if q_or_s == 'y':
       is_typing = True
    else:
        is_typing = False