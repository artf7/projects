"""
Program: LargerNumber
Author: Artem Fedorov
Date: Nov. 1, 2022
Filename: ICA03_LargerNumber.py
Purpose: Practice with if else statements..
"""

num1 = int(input("Enter 1st number: "))
num2 = int(input("Enter 2nd number: "))

if num1 > num2:
    print(f'The fist num ({num1}) the biggest number')
    print(f'The second num ({num2}) the smallest number')
else:
    print(f'The second num ({num2}) the biggest number')
    print(f'The fist num ({num1}) the smallest number')