"""
Assignment 2
Sample 5

Input a decimal number, and print it's hex and binary values

Author: Artem Fedorov
Date: 11/11/2022
File task5.py
"""

user_num = int(input("Enter a number: "))

print(f"Bin: {bin(user_num)[2:]}")
print(f"Hex: {hex(user_num)[2:]}")