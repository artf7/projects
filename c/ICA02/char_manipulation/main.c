#include <stdio.h>
#include <stdlib.h>

int main()
{
    char c;
//  char u;
    char l;

    do
    {
        c = getchar();
/*
        if(isalpha(c))
        {

            ****************************
            printf("It is a letter:\n");
            l = tolower(c);
            putchar(l);
            putchar('\n');
            u = toupper(c);
            putchar(u);
            putchar('\n');
            printf("ASCII: %3.3d\n\n",c);
            *****************************
            printf("It is letter:\n%c\n%c\n",toupper(c),tolower(c));
            printf("ASCII: %3.3d\n\n",c);
        }
        else if (isdigit(c))
        {
            printf("It is a digit:\n");
            putchar(c);
            putchar('\n');
            printf("ASCII: %3.3d\n\n",c);
        } else if (!ispunct(toupper(c)) && !isdigit(c){
            printf("It is a special char or punctuation sign: '%c'\n", c);
            printf("ASCII: %3.3d\n\n", c);
        }

*/
switch (isalpha(toupper(c)))
{


    case 1:
        printf("It is letter:\n%c\n%c\n",toupper(c),tolower(c));
        printf("ASCII(for upper case): %3.3d\n",toupper(c));
        printf("ASCII(for lower case): %3.3d\n\n",tolower(c));
        break;
    case 0:
        switch(isdigit(c))
        {
        case 1:
            printf("It is a digit:\n");
            putchar(c);
            putchar('\n');
            printf("ASCII: %3.3d\n\n",c);
            break;
        case 0:
            switch (!isalpha(toupper(c)) && !isdigit(c))
            {
            case 1:
                printf("It is a special char or punctuation sign:  %c \n", c);
                printf("ASCII: %3.3d\n\n", c);
            break;
}
        break;
}
}
break;
} while ( c != '\n');

    return (0);
}


