#include <stdio.h>
#include <stdlib.h>


void printNumArray(int nymArray[]);

int main()
{
    unsigned int arrNums[] = {1,2,3};
    unsigned int arrNums2[3] = {1,2,3};

    char arrChar[3] = {'a','B','c'};
    int i;
    int arrNums3[3];

    for(i=0;i<3;i++){
        arrNums3[i] = i + 1;
    }
    printNumArray(arrNums);
    printNumArray(arrNums2);
    printNumArray(arrNums3);
return 0;
}

void printNumArray(int numArray[]){
    int i;
    printf("Content of array %p:\n", numArray);
    for (i=0;i <3; i++){
        printf("Value of array[%d] = %d\n", i, numArray[i]);
        printf("Value of array[%d] = %d\n", i, numArray[i]);
    }
    printf("\n");
}
