"""
Assignment 3
Problem: 1.1
Author: Artem Fedorov
Date: 11/24/2022
File: pennies_for_pay.py
"""


try:
    n = int(input("Enter the numbers of day: "))
except:
    raise TypeError("Only integrs are alloweds")
      


payment = 1
total_pay = 0 

for x in range(1,n + 1): 
    print(f'payment for {x} day is ${payment/100}')
    total_pay += payment/100  
    payment *= 2 

print('Total payment:','$',total_pay)