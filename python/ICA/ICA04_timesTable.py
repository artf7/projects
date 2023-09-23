"""
Program: Times table using nested for loop
Author: Artem Fedorov
Date: Nov. 8, 2022
Filename: timesTable.py
Purpose: Practice with nested for loops
"""

for i in range(1,4):
    for j in range(1,4):
        print(f'{i} * {j} = {i*j},', end='\t\t')
print()
