//
//  starPattern.cpp
//  Assignment_2
//
//  Created by Artem  on 2023-10-23.
//

#include <iostream>
using namespace std;

// cretes pattern programm
int main() {
    
    int userNumber = 0;
    //loop control variable for the loop validates range (by default it is true)
    bool isValid = true;

    //validation of number (if number more than 10 or less than 1 it ask user again to enter a number
    while (isValid == true)
    {
        cout << "Enter the number (1-10): ";
        cin >> userNumber;
        
        if (userNumber > 10 || userNumber < 1)
        {
            cout << "The number should be in the range from 1 to 10"<<endl;
        }
        else
        {
            isValid = false;
            break;
        }
    }
    
    
    cout << "Pattern A" << endl;
    //pattern A
    for(int i = 0; i < userNumber; i++){
        //outputs amount of asteriks based on i value
        for(int j = 0; j <= i; j++){
            cout << '*';
        }
        cout << endl;
    }
    cout << endl;
    
    cout << "Pattern B" <<endl;
    //patterb B
    //reversed version of pattern A
    for(int i = userNumber; i > 0; i--){
        //outputs amount of asteriks based on i value
        for(int j = 0; j < i; j++){
            cout << '*';
        }
        cout << endl;
    }
    cout << endl;
    
    
    //represents the same number as userNumber but uses for creating spaces in the loop c
    int numberOfSpaces = userNumber;
    
    cout << "Pattern C" <<endl;
    
    //pattern C
    for(int i = userNumber; i > 0; i--){
        //enters spaces (than less stars than more spaces)
        for(int k = 0; k < numberOfSpaces; k++){
            cout << " ";
        }
        //outputs amount of asteriks based on i value
        for(int j = 0; j < i; j++){
            cout << '*';
        }
        //value to change number of spaces
        numberOfSpaces += 1;
        cout << endl;
    }
    
    cout << endl;
    
    //declaration to userNumber multiplied by 2 to achieve right amount of spaces
    numberOfSpaces = userNumber * 2;
    
    cout << "Pattern D" <<endl;
    
    //pattern C
    for(int i = 0; i < userNumber; i++){
        //enters spaces (than less stars than less spaces)
        for(int k = numberOfSpaces; k > 0; k--){
            cout << " ";
        }
        //outputs amount of asteriks based on i value
        for(int j = 0; j <= i; j++){
            cout << '*';
        }
        //value to change number of spaces
        numberOfSpaces -= 1;
        cout << endl;
    }
    
    
    return 0;
}

/*
 
Input:

User is prompted to enter a number within the range of 1 to 10.
Process:

Validate the user input to ensure it's within the specified range.
If the input is not within the range, display an error message and ask the user to enter the number again.
Generate four patterns (A, B, C, D) based on the user's input.
Output:

Display "Pattern A" and print a pattern of asterisks ascending in length.
Display "Pattern B" and print a pattern of asterisks descending in length (reversed version of Pattern A).
Display "Pattern C" and print a pattern of asterisks with leading spaces that increase in each row.
Display "Pattern D" and print a pattern of asterisks with leading spaces that decrease in each row (reversed version of Pattern C).

 
 */
