#include <stdio.h>
#include <stdlib.h>




int sum(int a[], int n){
    int i, s = 0;
    for (i=0; i < n, ++i){
        s += a[i];
    }
    return s;
}


int main()
{
    printf("Hello world!\n");
    return 0;
}
