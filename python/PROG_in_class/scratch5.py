from random import randint 


def selectionSort(lst):
    for i in range(len(lst) - 1):
        #find the minimum in the lst[i : len(lst)]
        currentMin, currentMinIndex = lst[i], i
        
        for j in range(i + 1, len(lst)):
            if currentMin > lst[j]:
                currentMin, currentMinIndex = lst[j], j
                
        # Swap Ist[i] with lst[currentMinIndex] if necessary
        
        if currentMinIndex != i:
            lst[currentMinIndex], lst[i] = lst[i], currentMin 


lst_to_sort = []
for k in range(10):
    lst_to_sort.append(randint(1,32))
print("list before sorting: ", lst_to_sort)
selectionSort(lst_to_sort)
print("list after soartung: ", lst_to_sort)
