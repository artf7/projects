#include <stdio.h>
#include <stdlib.h>
#define N 9
/*
- print scoreboard
- update scoreboard by inning
- reset scoreboard
- add totals
*/


void boxScore(int vTeam[], int hTeam[]);
void getScore(void);

int main()
{
    int visitorTeam[N] = {1,2,3,4,5,6,7,8,9};
    int homeTeam[N] = {0};

    boxScore(visitorTeam, homeTeam);
 }

void boxScore(int vTeam[], int hTeam[])
{

    int len;
    int i;
    printf("Play ball!\n");
    printf("+---------+---+---+---+---+---+---+---+---+---+\n");
    printf("| Innings | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |\n");
    printf("+=========+===+===+===+===+===+===+===+===+===+\n");
    printf("| Visitor | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |\n");
    printf("+---------+---+---+---+---+---+---+---+---+---+\n");
    printf("| Home    | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |\n");
    printf("+---------+---+---+---+---+---+---+---+---+---+\n");
    printf("\n");

    char vScores[] = "| Visitor | _ | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 |\n";
    //char hScore[] = {'a','b','c'};
    //printf(hScore);
    char visitor[] = "| Visitor |";
    for(i=0; i < N, i++){

    }


    len = strlen(vScores);
    printf("%d\n", len);
    for(int i = 0; i<N; i++){
        printf("%d - %d\n", vTeam[i], hTeam[i]);
        printf(vScores);


}
}
