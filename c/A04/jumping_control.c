#include <stdio.h>
#include <stdlib.h>

// in other files I have used the array that points to string, but here because of crashes of the program thats why i decided to use different way.
char jumping_control1[] = {"Break"};
char jumping_control2[] = {"continue"};
char jumping_control3[] = {"Goto"};

void jumping_control_info(){
    printf("Jumping Control Keywords\n");
    printf("\n");
    printf("%s[1]\n%s[2]\n%s[3]\n",jumping_control1,jumping_control2,jumping_control3);
    printf("Enter the number of Jumping Control keyword which definition you want to know: ");
}

int defenition_jumping_control(int number_of_jump_control){;

    switch(number_of_jump_control){
    case 1:
        printf("=================================================================================\n");
        printf("\n%s\n\n",jumping_control1);
        printf("Used to force immediate termination of a loop, ");
        printf("bypassing the conditional expression and any remaining code in the body of the loop\n\n");
        printf("=================================================================================\n");;
        break;
    case 2:
        printf("=================================================================================\n");
        printf("\n%s\n\n",jumping_control2);
        printf("Used to take the control to the beginning of the loop bypassing the \nstatements inside the loop\n\n");
        printf("=================================================================================\n");
        break;
    case 3:
        printf("=================================================================================\n");
        printf("\%s\n\n",jumping_control3);
        printf("Used to take the control to required place in the program\n\n");
        printf("=================================================================================\n");
        break;
    default:
        printf("=================================================================================\n");
        printf("\nYou need to enter the number of keyword\n\n");
        printf("=================================================================================\n");
        break;
    }

}
