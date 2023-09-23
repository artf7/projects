"""
Assignment 2
Sample 1

Input a number, and find all the numbers that divide 
evenly into that number, (i.e. without a remainder as 
for 10 there is 1,2,5,10)

Author: Artem Fedorov
Date: 11/08/2022
File task1.py
"""

user_num = int(input("Enter number: "))


if user_num == 0:
    print("all numbers or ∞")
else:
    for div_nums in range(1, user_num+1):

        if user_num % div_nums == 0:
            print(div_nums)
        

