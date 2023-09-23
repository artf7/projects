"""
Program: LetterGrade
Author: Artem Fedorov
Date: Nov. 3, 2022
Filename: ICA03_LetterGrade.py
Purpose: Practice with if else statements
"""

user_score = int(input("Enter your score: "))


if 90 <= user_score <= 100:
    print("Grade: A")
elif 80 <= user_score <= 89:
    print("Grade: B")
elif 70 <= user_score <= 79:
    print("Grade: C")
elif 60 <= user_score <= 69:
    print("Grade: D")
elif 0 <= user_score <= 59:
    print("Grade: F")