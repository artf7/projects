"""
Assignment 3
Problem: 2.1
Author: Artem Fedorov
Date: 11/24/2022
File: modular_grading_average.py
"""

#instructions to input 
def displayInstructions():
    print("Enter your grades below, it should be from 0 to 100, while you will enter the grades for separating them.")

#getting grades (0-100) and put it in list
def getGrades():
    #creating global variable grade that will contains all grades in list 
    global grades
    grades = []
    #checking is inputed number of grades is number indeed otherwise show error message 
    try:
        number_of_grades = int(input(f"How much grades will you use: ")) 
    except:
        raise TypeError("Enter only numbers and don't insert empty string")   
    for x in range(1,number_of_grades+1):
        #checking is inputed number is number indeed overwise show error message
        try:
            grade = int(input(f'{x} grade: '))
        except:
            raise TypeError("Enter ony numbers or don't insert empty string")
        #checking is number in range from 0 to 100 included. 
        if grade > 100 or grade < 0:
            raise TypeError("You allow to input only numbers in range from 0 to 100") 
        grades.append(grade)
        
# I was using the table_of_grades.png for validatiob
def validateGrade():
    # create variable for containing validated grades
    global validated
    validated = []
    # the process of validation 
    for x in range(len(grades)):
        if grades[x] < 50:
            validated.append('F')
        elif 60 >grades[x] >= 50:
            validated.append('D')
        elif 70 > grades[x] >=60:
            validated.append('C')
        elif 80 > grades[x] >= 70:
            validated.append('B')
        elif 100 >= grades[x] >= 80:
            validated.append('A')

# displayng result of function validateGrade()
def displayResult():
    print('=========Score|Grade=======')
    for x in range(len(grades)):
        print(f'\t   {grades[x]} : {validated[x]}')
        
#calculating the average score and validate it (for instance 66.0 : C)
def calculateAvg():
    # creating variable that will content the validated version of grade(score)  
    avg_g_val = str()
    # creating the variable that in future will be represent avg value of all grades(scores)
    # but now it is sum of all scores
    avg_g = 0 
    for x in range(len(grades)):
        avg_g += grades[x]
    # now avg_g is average grade(score)
    avg_g = avg_g / len(grades)
    # validation of avg grade
    if grades[x] < 50:
        avg_g_val = 'F'
    elif 60 >grades[x] >= 50:
        avg_g_val = 'D'
    elif 70 > grades[x] >=60:
        vavg_g_val = 'C'
    elif 80 > grades[x] >= 70:
        avg_g_val = 'B'
    elif 100 >= grades[x] >= 80:
        avg_g_val = 'A'
    print("=============AVG===========")
    print('\t Score|Grade')
    #output the rounded avg score and validared avg score 
    print(f'\t {round(avg_g,1)} : {avg_g_val}')

    
# function that call all functions 
def main():
    displayInstructions()
    getGrades()
    validateGrade()
    print()
    displayResult()
    calculateAvg()
    
# call main() function that calls all fuctions 
main()
