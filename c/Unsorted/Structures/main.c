#include <stdio.h>
#include <stdlib.h>
#include <string.h>
struct player
{
    char name[50];
    char initials[4];
    char token;
    int wins;
    int losses;
    int ties;
};

void stripper(char str[], char token){

    int i = 0;
    while (str[i] != '\0'){
        if (str[i] == '\n'){
            str[i] = '\0';
        }
        i++;
    }
    //return str;
}
/*
void stripPointer(char *str){
    int i = 0;
    while (str[i] != '\0'){
        if (str[i] == '\n'){
            str[i] = '\0';
        }
        i++;
    }
    str[2] = 'y';
    printf("This is my string: %s [at %p]\n",str,str);
}*/
void printPlayer(struct player p){
    system("cls");
    printf("### Player Statistics for %s  (%s) ###", p.name, p.initials);
    printf("\nWins: %d\nTies: %d\nLosses: %d\n", p.wins, p.ties, p.losses );
}

int main()
{
    struct player player1;
    struct player player2;

    printf("Player 1, enter your name: ");
    fgets(player1.name, 50, stdin);

    printf("Player 1, enter your initials: ");
    fgets(player1.initials, 50, stdin);

    player1.token = 'x';
    player1.wins = 0;
    player1.losses = 0;
    player1.ties = 0;

    printPlayer(player1);
    return 0;
}
