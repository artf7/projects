#include <stdio.h>
#include <stdlib.h>
#include <windows.h>
/*
Program: Rocket Shuttle
Author: Artem F.
Date: 01/13/2023
Filename: RocketShuttle.c
Purpose: Count down and blast off!
*/
int main()
{
    rocket_shuttle();
    return 0;
}


int rocket_shuttle(){
    puts("Space shuttle count down");

    int num = 10;
    while (num > 0){
        printf("%d\n",num);
        num --;
        Sleep(1000);
    }
    puts("Blast off!");
return (0);
}
