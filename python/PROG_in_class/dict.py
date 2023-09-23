"""
Program: Working with Dictioonaries  
Author: Artem Fedorov
Date: 11/29/2022
File:  sets.py
Purpose: Practice using dicts
"""

a_set = {1,2,3,4,5} # use curly brackets but no colons (:)
print(type(a_set))
musical_instruments = {"wood winds": ["oboe","flute","Picasso"],
                       "brass"     : "trumpet",
                       "percussion": "timpani",
                       }


print(type(musical_instruments))
print(musical_instruments)
print(musical_instruments["wood winds"])

for key in musical_instruments.keys():

    print(f"Key: {key} \t\t\t Value: {str(musical_instruments[key])} ")
    
print(musical_instruments.keys())
print(list(musical_instruments))
print(len(musical_instruments))

print(musical_instruments.get("guitar","percussion"))
print(musical_instruments.items())

for item in musical_instruments.items():
    print(type(item))