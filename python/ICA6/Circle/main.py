"""
Author: Artem Fedorov
Date: 12/1/2022
Filename: main.py
Purpose: Practice using Circle classs in another file
"""

from Circle import Circle


def main():
    # Create a circle with radius 1
    c1 = Circle()
    s = "hello"
    print("The area of the circle of radius", c1.getRadius(), "is",c1.getArea())
    # Create a circle with a radius 3
    c2 = Circle(2)
    print("The area of the circle of radius", c2.getRadius(), "is", c2.getArea())
    # Create a circle with a rasius 3
    c3 = Circle(3)
    print("The area of the circle of radius", c3.getRadius(), "is", c3.getArea())

main()