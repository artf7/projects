"""
Program: Coin class
Author: Artem Fedorov
Date: 12/1/2022
Filename: Coin.py
Purpose: To flip coins
"""

import random

class Coin:
    def __init__(self):
        self.__sideup = 'Heads'

    def toss(self):
        if random.randint(0,1)==0:
            self.__sideup = 'Heads'
        else:
            self.__sideup = 'Tails'

    def get_sideup(self):
        return self.__sideup
