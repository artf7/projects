"""
Program: Circle class
Author: Artem Fedorov
Date: 12/1/2022
Filename: Circle.py
"""

import math

class Circle:
    # cionstruct a circle object
    def __init__(self,radius=1) -> None:
        self.__radius = radius

    def getArea(self) -> float:
        return self.__radius * self.__radius * math.pi

    def getPerimeter(self):
        return 2 * self.__radius * math.pi

    def setRadius(self, radius):
        self.__radius = radius

    def getRadius(self):
        return self.__radius