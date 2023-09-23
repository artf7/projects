"""
Program: RandomNumbers
Author: Artem Fedorov
Date: Nov. 1, 2022
Filename: ICA03_RandomNumbers.py
Purpose: Practice with random library 
"""

import random

#generator random numbers
num1 = random.randint(0,9)
num2 = random.randint(0,9)

#get user answer
answer = int(input("What is " + str(num1) + " + " + str(num2) + " ? \n" ))

#displat result
print(str(num1) + " + " + str(num2) + " = " + str(answer) + " is " + str(num1 + num2 == answer))
