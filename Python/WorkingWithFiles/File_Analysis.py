"""
Assignment 4
Problem: 1
Author: Artem Fedorov
Date: 12/7/2022
File: File_Analysis.py
"""

def main():
    #display unique words in both of files
    def display_unique():
        #creating 2 global variables for using it in 
        global f1_lst 
        global f2_lst 
        #opening 2 files 
        with open('file1.txt', 'r') as f1_lst:
            f1_lst = f1_lst.read().split(' ')
        with open('file2.txt', 'r') as f2_lst:
            f2_lst = f2_lst.read().split(' ')
        #creating 2 global variables for unique words 
        global f1_unique
        global f2_unique
        #removing space in list
        f1_lst.remove('')
        f2_lst.remove('')
        #creating sets for f1_lst and f2_lst, to create in future list with unique elements
        f1_unique = set(f1_lst)
        f2_unique = set(f2_lst)
        f1_lst = list(f1_unique)
        f2_lst = list(f2_unique)
        print('Unique words in 1st file')
        #printing the list of unique element for first file
        for x in range(len(f1_lst)):
            print(f1_lst[x], end=' ')
        print('\n')
        print('Unique words in 2nd file')
        #printing the list of unique element for secon file 
        for x in range(len(f2_lst)):
            print(f2_lst[x], end=' ')
        print('\n')
    #displays the words wich appears in both files 
    def words_in_all_files():
        comp_list = list(f1_unique & f2_unique)
        print("Words that appeaer in both of the files")
        #printing the words that appera in both files
        for x in range(len(comp_list)):
            print(comp_list[x])
        print()
    #displays the words that appear only in first file
    def only_in_first():
        only_1st = []
        for x in range(len(f1_lst)):
            #comparing, wich word only in f1_lst
            if f1_lst[x] not in f2_lst:
                only_1st.append(f1_lst[x])
        print('Words that appear only in 1st file')
        #printing words that exsit only in first file 
        for x in range(len(only_1st)):
            print(only_1st[x], end=" ")
        print('\n')
    #displays the words that appear only in second file
    def only_in_second():
        only_2nd = []
        for x in range(len(f2_lst)):
             #comparing, wich word only in f2_lst
            if f2_lst[x] not in f1_lst:
                only_2nd.append(f2_lst[x])
        print("Words that appear only in 2nd file")
        #printing words that exsit only in second file 
        for x in range(len(only_2nd)):
            print(only_2nd[x], end=" ")

    def result():
        display_unique()
        words_in_all_files()
        only_in_first()
        only_in_second()
    result()
main()