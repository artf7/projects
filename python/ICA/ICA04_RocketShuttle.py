"""
Program: RocketSuttle
Author: Artem Fedorov
Date: Nov...., 2022
Filename: ICA04_RocketShuttle.py
Purpose: Practice with while loops and .sleep func.
"""
import time

print("Space Shuttle Count Down! ")

num  = 10

while num > 0:
    print(num)
    num -= 1
    time.sleep(0.5)

print("BLAST OFF!")
