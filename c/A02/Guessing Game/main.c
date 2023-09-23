#include <stdio.h>
#include <stdlib.h>

int main()
{
    int num1, guess, game_number;
    game_number = 1;
    char lcv;
    lcv = 'Y';
    printf("Welcome to the Guessing Game!\n");
    while (lcv == 'Y'){
        num1 = rand() % 100 + 1;
        printf("Guess the number: ");
        scanf("%d",&guess);
        while (guess != num1){
            if (guess > num1){
                printf("The number is too hight!\n");
            }else if (guess < num1){
                printf("The number is too low!\n");
            }
            printf("Try again: ");
            scanf("%d",&guess);
        }
        if (guess == num1){
            printf("Correct guess!\n");
            printf("Enter Y to continue or Q to quit: ");
            scanf(" %c", &lcv);
            lcv = toupper(lcv);
        }
        if (lcv == 'Y'){
            game_number++;
            printf("\nGame number: %d\n",game_number);
        }
        }
return 0;
}


