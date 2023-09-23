"""

Program: Working with list 
Author: Artem Fedorov
Date: 11/23/2022
File:  listFunctions.py


"""
list1 = [1,2,3]
list2 = [4,5,6,7,8,9,10,8]

list3 = list1 + list2

print(list2)
print(list3)

print(list3.pop(7))

if list1 <= list2:

    print("Equal!")

else:

    print("Not Equal")



rg = range(0,len(list3),2)

for i in rg:

    print(list3[i])