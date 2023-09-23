"""
Program: Working with list 
Author: Artem Fedorov
Date: 11/24/2022
File:  2d_list.py

"""
from random import randint

def create_matrix():
    global matrix 
    matrix = []
    numOfRows = eval(input("enter number of rows: "))
    numOfCols = eval(input("enter number of colums: "))

    for row in range(numOfRows):
        matrix.append([])
        for column in range(numOfCols):
            value = randint(1,999)
            matrix[row].append(value)
    return matrix


def print_matrix():
    for row in range(len(matrix)):
        for column in range(len(matrix[row])):
            print(matrix[row][column], end=" ")
        print()
    print()
    for row in matrix:
        for value in row:
            print(value, end=" ")
    print()


def main():
    mat = create_matrix()    
    print(mat)
    print_matrix()
    
main()
