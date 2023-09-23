"""
Program: Working with tuples 
Author: Artem Fedorov
Date: 11/29/2022
File:  sets.py
Purpose: Practice using tuples
"""
import sys
my_list = ["apple","banana","cherry"]
my_tulple = ("apple","banana","cherry")
my_tulple2 = ("apple","banana","cherry",my_list)

print(type(my_list))
print(type(my_tulple))

print(type(my_list[0]))

print(my_list[0] == my_tulple[0])
print(my_tulple)
print()

print(my_tulple)
my_list[0] = "grape"
print(my_list)

# my_tuple[0] ="grape" #can't to do this for a tuple 

print(my_tulple)
print(my_tulple.index("cherry"))

print(sys.getsizeof(my_list))
print(sys.getsizeof(my_tulple))
print(my_tulple2[3][0])

my_tulple2[3][0] = "list grape"
print(my_tulple2[3][0])
print(my_tulple2)
