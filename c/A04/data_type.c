#include <stdio.h>
#include <stdlib.h>

char *data_types[]={"int","char","float","double"};

void data_type_info(){
    printf("Data type Keywords\n");
    printf("\n");
    printf("%s[1]\n%s[2]\n%s[3]\n%s[4]\n",data_types[0], data_types[1],data_types[2],data_types[3]);
    printf("Enter the number of data type keyword which definition you want to know: ");
}
int defenition_of_data_types(int number_of_data_type){
    switch(number_of_data_type){
    case 1:
        printf("=================================================================================\n");
        printf("\n%s\n\n",data_types[0]);
        printf("Specifies the integer type of value a variable will hold\n\n");
        printf("=================================================================================\n");
        break;
    case 2:
        printf("=================================================================================\n");
        printf("\n%s\n\n",data_types[1]);
        printf("Specifies the character type of value a variable will hold\n\n");
        printf("=================================================================================\n");
        break;
    case 3:
        printf("=================================================================================\n");
        printf("\n%s\n\n",data_types[2]);
        printf("Specifies the single-precision floating-point of value a variable will hold\n\n");
        printf("=================================================================================\n");
        break;
    case 4:
        printf("=================================================================================\n");
        printf("\n%s\n\n",data_types[3]);
        printf("Specifies the double-precision floating-point type of value a variable will\n\n");
        printf("=================================================================================\n");
        break;
    default:
        printf("=================================================================================\n");
        printf("\nYou need to enter the number of keyword\n\n");
        printf("=================================================================================\n");
        break;
    }

}
