"""
Program: listSplitting
Author: Artem Fedorov
Date: 11/12/2022
Filename: listSplittingpy
"""

def shift(lst):
    temp = lst[0] #Save the first element in the list
    #shift element left
    for i in range(1, len(lst)):
        lst[i-1] = lst[i]
        # Move the first element to the end of the list
        lst[len(lst) - 1] = temp






items1 = "Fred, Wilna, Dino, Barney, Betty, BamBam".split(", ")
items2="11/14/2018".split("/")
print(items1)
print(items2)
print()

items =[]
print("Enter 5 numbers: ")
for index in range(5):
    items.append(eval(input()))

print(items)

s = input("Enter 5 numbers \
separated by spaces:")
numbers=s.split()
items3=[eval(x) for x in numbers]

items4= []
for x in numbers:
    items4.append(eval(x))
    
print(items3)
print(items4)

shift(items2)
print(items2)