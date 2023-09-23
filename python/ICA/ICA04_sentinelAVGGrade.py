"""
Program: Average Grade with Sentinel
Author: Artem Fedorov
Date: Nov. 7, 2022
Filename: ICA04_sentinelAVGGrade.py
Purpose: Calculate the average grade
"""


grades = 0
gr_list = []

print("Enter grades: ")

while grades != -1:
    grades = int(input(""))
    if 100 >= grades > -1:
        gr_list.append(grades)
        continue
    if grades > 100:
        print("enter numbers < 100 or = 100")
        pass
    print(gr_list)

print("avg")

summ = 0

for x in gr_list: summ += x

print(round(summ / len(gr_list), 2))
