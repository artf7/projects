"""
Program:
Author: Artem Fedorov
Date: 12/6/2022
Filename: Exceptions.py
Purpose: Learn to use exceptions
"""

def main():
    try:
        num1 = int(input('Enter a number'))
        num2 = int(input('Enter another number'))
        result = num1/ num2
        print(num1, 'divided by', num2, 'is', result)
    except ZeroDivisionError as err:
            print(err)
    except ValueError as err:
            print(err)
    except:
        print("Something happened?!")
    print("Kepp going?!")

def gross_pay():
    try:
        hours = int(input('How many hours did you work?'))
        pay_rate = float(input('Enter your hourly pay rate:'))
        gross_pay = hours * pay_rate
        print('Gross pay: $', format(gross_pay, ',.2f'), sep='')

    except ValueError:
        print('ERROR: Hours worked and hourly pay rate must')
        print('be valid integers.')

main()
