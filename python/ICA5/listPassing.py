"""

Program: Working with list 
Author: Artem Fedorov
Date: 11/21/2022
File:  listPassing.py


"""

def add(x, list=[]):
    if x not in list:
        list.append(x)
    return list

def main():
    list1 = add(1)
    print(list1)
    list2 = add(2)
    print(list2)
    list3 = add(3,[5,6,7,8])
    print(list3)
    list4 = add(4)
    print(list4)
main()