#include <stdio.h>
#include <stdlib.h>

int main()
{
    int r = -1;
    int cnt = 0;
        time_t currentTime;
        srand(time(&currentTime));
    while (r != 22){
        r = rand() % 100 + 1;
        printf("%d\n",r);
        cnt ++;
    }
    printf("Finally 22: %d", cnt);
}
