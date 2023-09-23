"""
Program:
Author:Artem F.
Date: 11/6/2022
Filename: students.py
Purpose: practice with reading file and incert the information into it
"""
import os


class file_io:
    def __init__(selfself) -> None:
        pass
def write_students(students_file):
    outfile = open(students_file, 'w')
    # outfile = open(r'C:\Users\User\PycharmProjects\students_absolute.txt', 'a')
    outfile.write('John Smith\n')
    outfile.write('John Doe\n')
    outfile.write('John Rolfe\n')
    outfile.close()


def append_students(students_file):
    outfile = open(students_file, 'a')
    # outfile = open(r'C:\Users\User\PycharmProjects\students_absolute.txt', 'a')
    outfile.write('Wendy Smith\n')
    outfile.write('Wendy Doe\n')
    outfile.write('Wendy Rolfe\n')
    outfile.close()


def read_students(students_file):
    infile = open(students_file, 'r')
    file_contents = infile.read()
    infile.close()
    print(file_contents)

def read_eof(students_file):
    infline = open(students_file, 'r')
    line = infline.readline()
    while line != '':
        print(line)
        line = infline.readline()
    infline.close()

def read_file(students_file):
    with open(students_file, 'r') as infline:
        for line in infline:
            print(line)


def main():
    file_path = os.path.dirname(__file__)
    os.chdir(file_path)

    txt_file = r"..\PROG_in_class\students_file.txt"
    file = os.path.abspath(txt_file)
    if os.path.exists(file):
        append_students(file)
        read_students(file)
    else:
        write_students(file)


main()