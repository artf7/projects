"""
Assignment 4
Problem: 2
Author: Artem Fedorov
Date: 12/8/2022
File: File_Analysis.py
"""
def main():
    #creating dictionary
    word_freq  = {}
    #open files 
    with open('file1.txt', 'r') as file:
        file = file.read().split(' ')
    #removing space  in list
    file.remove('')
    #counting words and add number as a value to each keys in dict 
    for x in range(len(file)):
        word_freq[file[x]] = file.count(file[x])
    #unpacking the dictionary
    for k,v in word_freq.items():
        print(f"{k} is apperars {v}")
main()