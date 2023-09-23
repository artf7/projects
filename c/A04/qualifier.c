#include <stdio.h>
#include <stdlib.h>
char *qualifiers[]={"signed","unsigned","short","long"};

void qualifier_info(){
    printf("Qualifier Keywords\n");
    printf("\n");
    printf("%s[1]\n%s[2]\n%s[3]\n%s[4]\n\n",qualifiers[0], qualifiers[1],qualifiers[2],qualifiers[3]);
    printf("Enter the number of qualifier keyword which definition you want to know: ");
}

int defenition_qualifiers(int number_of_qualifier){
    switch(number_of_qualifier){
    case 1:
        printf("=================================================================================\n");
        printf("\n%s\n\n",qualifiers[0]);
        printf("Specifies a variable can hold positive and negative integer type of data\n\n");
        printf("=================================================================================\n");
        break;
    case 2:
        printf("=================================================================================\n");
        printf("\n%s\n\n",qualifiers[1]);
        printf("Specifies a variable can hold only the positive integer type of data\n\n");
        printf("=================================================================================\n");
        break;
    case 3:
        printf("=================================================================================\n");
        printf("\n%s\n\n",qualifiers[2]);
        printf("Specifies a variable can hold fairly small integer type of data\n\n");
        printf("=================================================================================\n");
        break;
    case 4:
        printf("=================================================================================\n");
        printf("\n%s\n\n",qualifiers[3]);
        printf("Specifies a variable can hold fairly large integer type of data\n\n");
        printf("=================================================================================\n");
        break;
    default:
        printf("=================================================================================\n");
        printf("\nYou need to enter the number of keyword\n\n");
        printf("=================================================================================\n");
        break;
    }

}
