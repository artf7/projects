"""
Program:
Author: Artem Fedorov
Date: Nov. 8, 2022
Filename: numSq.py
Purpose: Practice with for loop
"""

norm_list = []

for x in range(1,10+1):
    norm_list.append(x)

sq_list = []
for x in norm_list:
    sq_list.append(x**2)

print("Number\tSquare")
print("_______________")

for x in range(len(norm_list)):
    print(norm_list[x],"\t\t",sq_list[x])

"""
____________________________
            OR
----------------------------    
for number in range(1,11):
    square = number**2
    print(number,'\t\t', square)
"""
