
"""
Program: GuessingGame(complete)
Author: Artem Fedorov
Date: Nov. ..., 2022
Filename: ICA03_04_GuessingGame.py
Purpose: Write guessing game with while loops and if-else statements
"""
import random


guessed = False
is_Playing = True

while is_Playing:

    print("Try to guess number(from 1 to 100)")
    rand_num = random.randint(1, 100)

    while guessed == False:
        print(rand_num)
        user_num = int(input("Guess: "))
        if user_num == rand_num:
            print("You guessed it!")
            break
        else:
            if user_num < rand_num:
                print("!Your number is lower!")
            else: 
                print("Your num is higher!")
            
        print("***Try one more time***")

    check = input("Do you want to continue (Y/N): ").lower()

    if check == "y":
        is_Playing = True
        guessed = False
        print("You decided to continue the game")
    else:
        is_Playing = False
        print("Goodbye")
