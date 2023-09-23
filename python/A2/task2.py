"""
Assignment 2
Sample 2

Find and print the Fibonacci 
numbers from 0 to 100 (compute 
the Fibonacci numbers yourself) 

Author: Artem Fedorov
Date: 11/11/2022
File task2.py
"""
num1 = 0 
num2 = 1 
num3 = 0 

while num3 <= 100:
    print(num3)
    num3 = num1 + num2
    num2 = num1 
    num1 = num3 
    
     
