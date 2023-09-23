#include <stdio.h>
#include <stdlib.h>

int main()
{
    unsigned char ch;
    char trash[256];

    printf("\n\nThe ASCII values");

    for (ch=0; ch < 255; ch++){
        printf("\n%3.3d: %c", ch,ch);

        if ( ((ch%20) == 0) && (ch != 0) ){
            printf("\n Press <enter> to continue");
            gets(trash);
        }
    }
    printf("\n%3.3d: %c", ch, ch);
    return 0;
}
