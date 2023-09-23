"""
Program: Calculation of the path
Author: Artem Fedorov
Date: 10/25/2022
Filename: LakeTravel.py
Purpose: Calculate the path of traveler
"""


user = input("Name: ")

first_lake = int(input("Length of the 1st lake: "))

second_lake = int(input("Length of the 2nd lake: "))

third_lake = int(input("Length of the 3rd lake: "))

total_length = first_lake + second_lake + third_lake

print("{} will have {}km travel".format(user, total_length))