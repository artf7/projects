#include <stdio.h>
#include <stdlib.h>

char *loop_control_structure[]={"For","While","Do"};
void loop_control_structure_info(){
    printf("Loop Control Structure Keywords\n");
    printf("\n");
    printf("%s[1]\n%s[2]\n%s[3]\n\n",loop_control_structure[0], loop_control_structure[1],loop_control_structure[2]);
    printf("Enter the number of control loop structure keyword which definition you want to know: ");
}

int defenition_loop_control_structure(int number_of_loop_control_structure){
    switch(number_of_loop_control_structure){
    case 1:
        printf("=================================================================================\n");
        printf("\n%s\n\n",loop_control_structure[0]);
        printf("Loop is used when the number of passes is known in advance\n\n");
        printf("=================================================================================\n");
        break;
    case 2:
        printf("=================================================================================\n");
        printf("\n%s\n\n",loop_control_structure[1]);
        printf("Loop is used when the number of passes is not known in advance\n\n");
        printf("=================================================================================\n");
        break;
    case 3:
        printf("=================================================================================\n");
        printf("\n%s\n\n",loop_control_structure[2]);
        printf("Loop is used to handle menu-driven programs\n\n");
        printf("=================================================================================\n");
        break;
    default:
        printf("=================================================================================\n");
        printf("\nYou need to enter the number of keyword\n\n");
        printf("=================================================================================\n");
        break;
    }

}
