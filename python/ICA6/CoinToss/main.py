"""
Program: Coin Toss
Author: Khushpreet Singh
Date: 12/1/2022
Filename: main.py
Purpose: Entry point to coin toss program
"""

from Coin import Coin

def main():
    my_coin = Coin()
    print('I am tossing the coin...')
    my_coin.toss()
    print('This side is up:', my_coin.get_sideup())

main()