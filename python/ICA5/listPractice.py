"""
Program: Working with lists 
Author: Artem Fedorov
Date: 11/22/2022
File: listPractice.py
"""


import random

myList = [30, 1, 2, 1, 0]

myList.append(40)
print(myList)

myList.insert(1, 43)
print(myList)

myList.extend([1, 43])
print(myList)

print(myList[2])

print(myList.index(2))

print(myList.count(43))

print(len(myList))

print(max(myList))

print(min(myList))

print(sum(myList))

myList.remove(1)
print(myList)

myList.pop(1)
print(myList)

myList.pop()
print(myList)

myList.sort()
print(myList)

myList.reverse()
print(myList)

random.shuffle(myList)

# store value of mylist in new variable (myList2)

myList2 = myList
print(id(myList))# IDs are the same
print(id(myList2))# IDs are the same

#copy values from myList to myList3
myList3 = [x for x in myList]# or by doing myList3 = [] + myList
print(id(myList3))# ID is different from myList and myList2
#myList2 = [] + myList
