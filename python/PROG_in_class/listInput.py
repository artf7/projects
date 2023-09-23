

s = input("Enter 5 numbers separated by spaces: ")

numbers = s.split()

items = [eval(x) for x in numbers]

items2 = []
for x in numbers:
    items2.append(x)
print(items)
print(items2)