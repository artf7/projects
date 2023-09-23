#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
#include "data_type.c"
#include "qualifier.c"
#include "loop_control_structure.c"
#include "jumping_control.c"


char *options[] = {"Data type and keywords","Qualifier Keywords","Loop control Structure Keywords","Jumping Control Keywords"};

int menu(){
    bool is_input;
    bool in_case;
    is_input = true;
    int to_menu;
    int option,option_in_case;
    while (is_input = true){ 
        printf("Main menu\n\n");
        printf("Data type and keywords[1]\nQualifier Keywords[2]\nLoop control Structure Keywords[3]\nJumping Control Keywords[4]\nExit[5]\n\n");
        printf("Choose the category of keywords or exit the program: ");
        scanf("%d", &option);
        option_in_case = option;
        switch (option)
        {
        case 1:
            in_case = true;
            while (in_case)
            {
                data_type_info();
                scanf("%d",&option_in_case);
                defenition_of_data_types(option_in_case);
                printf("Do you want to continue with current keywords group or exit to main menu?\n1-continue \n2-go back to main menu\nEnter: ");
                scanf("%d", &to_menu);
                printf("\n\n");
                if (to_menu == 2){
                    in_case = false;
                    system("cls");
                    
                }
        }
        break;
        case 2:
        in_case = true;
            while (in_case)
            {
                qualifier_info();
                scanf("%d",&option_in_case);
                defenition_qualifiers(option_in_case);
                printf("Do you want to continue with current keywords group or exit to main menu?\n1-continue \n2-go back to main menu\nEnter: ");
                scanf("%d", &to_menu);
                printf("\n\n");
                if (to_menu == 2){
                    in_case = false;
                    system("cls");
                }
            }
        break;
        case 3:
        in_case = true;
        while (in_case)
            {
                loop_control_structure_info();
                scanf("%d",&option_in_case);
                defenition_loop_control_structure(option_in_case);
                printf("Do you want to continue with current keywords group or exit to main menu?\n1-continue \n2-go back to main menu\nEnter: ");
                scanf("%d", &to_menu);
                printf("\n\n");
                if (to_menu == 2){
                    in_case = false;
                    system("cls");
                }
            }
            break;
        case 4:
        in_case = true;
        while (in_case)
            {
                jumping_control_info();
                scanf("%d",&option_in_case);
                defenition_jumping_control(option_in_case);
                printf("Do you want to continue with current keywords group or exit to main menu?\n1-continue \n2-go back to main menu\nEnter: ");
                scanf("%d", &to_menu);
                printf("\n\n");
                if (to_menu == 2){
                    in_case = false;
                    system("cls");
                    }
        }
            break;
        case 5:
            exit(0);
        default:
            printf("Enter the proper number\n\n");
            break;
        }
    }

}