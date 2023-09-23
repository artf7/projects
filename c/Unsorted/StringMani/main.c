#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main()
{
    char strA[] = "Hello\n";
    char strB[] = "Artem\n";
    char strC[14];

    //strcpy(strC, strB);
    strcat(strA, strB);
    printf("%s", strA );
    return 0;
}
