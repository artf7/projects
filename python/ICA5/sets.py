"""
Program: Working with sets 
Author: Artem Fedorov
Date: 11/28/2022
File:  sets.py
"""

#sets union mentod 
# initialize A and B

A = {1,2,3,4,5}
B = {4,5,6,7,8}

#use | operator 

print(A|B)

A.union(B)
print(A.union(B))

lst_A = list(A)
lst_B = list(B)
lst_B.extend(lst_A)

print("List", lst_A)
print("List", lst_B)

str_H = "Helllo World"
set_H = set(str_H)
print(set_H)

A = {1,2,3,4,5}
B = {4,5,6,7,8}
print(A&B)

print(A.intersection(B))

# creates Sets
baseball = set(['Jodi','Carmen','Aida','Alicia'])
basketball = set(['Eva','Carmen','Alicia','Sarah'])
print('The following students plays both baseball and basketball:')
for name in baseball.intersection(basketball):
    print(name)
# Demonstrate union
print('The following students play either baseball or basketball')
for name in baseball.union(basketball):
    print(name)
print('|baseball U basketball|:', len(baseball.union(basketball)))

# Dmonstarte difference of basketball and baseball
print('The dfollowing students plays basketball, but not baseball:')
for name in basketball.difference(baseball):
    print(name)

# Demonstrate symmetric difference
print(' The following students play one sport, but not both:')
for name in baseball.symmetric_difference(basketball):
    print(name)

# Demonstrate intersection
print('The folloeing students play both baseball and basketball:')
for name in baseball.union(basketball):
    print(name)
print('|bseball U basketball|:', )