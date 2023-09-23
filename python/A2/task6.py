"""
Assignment 2
Sample 5

The user enters a hex color code (#ffffff), 
and you separate and print the red, green, and blue components 
in hex and decimal

Author: Artem Fedorov
Date: 11/11/2022
File task5.py
"""

hex_numbers = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F']

user_hex_color = input("Enter hex code of color: ")
list_verion_of_uhc = list(user_hex_color.upper())


#checking the elements (2)is it really hex number and (1)amount of numbers
for x in list_verion_of_uhc:
    # checking the length
    if len(user_hex_color) == 6:
        # check if the numbers are really hexadecimal 
        if x in hex_numbers:
            continue
        else:
            print('1. Error, your color is wrong (check letters which you used)')
            exit()
    else: 
        print('2. Error, your color is wrong (check quantity of numbers )')
        exit()
    
print('#'+str(user_hex_color))
    

red = list_verion_of_uhc[0]+ list_verion_of_uhc[1]
green = list_verion_of_uhc[2]+list_verion_of_uhc[3]
blue = list_verion_of_uhc[4]+list_verion_of_uhc[5]
print('16 base colors (hex)')
print("RED:......",red)
print("GREEN:....",green)
print("BLUE:.....",blue)
print()
print('10 base colors (decimal)')
# converting from hex to decimal 
red = int(red, base=16)
green = int(green, base=16)
blue = int(blue, base=16)
print("RED:......",red)
print("GREEN:....",green)
print("BLUE:.....",blue)