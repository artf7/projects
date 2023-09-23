"""
Program: ... 
Author: Artem Fedorov
Date: 11/28/2022
File:  searchFunctions.py
"""
def linear_search(lst, key):
    for i in range(len(lst)):
        if key == lst[i]:
            return i 
    return -1

def binary_search(lst, key): 
    low = 0 
    high = len(lst) - 1 
    while high >= low: 
        mid = (low + high) // 2
        if key == lst[mid]:
            return mid
        elif key < lst[mid]:
            high = mid -1 
        else:
            low = mid + 1 
    return -1  


nums = [10,2,4,6,2,76243,6,3,2]
nums.sort()
print(nums)
print(linear_search(nums,6))
print(binary_search(nums,6))

letters = list("Hello World")
letters.sort()
print(letters)

print(binary_search("Hello World", "o"))
print(linear_search("Hello World", "o"))
print("Hello World".index("o"))