//
//  gradeProgram.cpp
//  Assignment_2
//
//  Created by Artem  on 2023-10-26.
//

#include <iostream>
using namespace std;
//grade program
int main() {
    int grade = 0;
    
    int overallGrade = 0;
    
    
    int numberOfPassed = 0;
    
    //contains number of students who got 100
    int numberOfMaxGrade = 0;
    
    //contains number of students who failed
    int numberOfFailed = 0;
    
    int averageGrade = 0;
    
    //loop control variable for main loop
    bool isRunning = true;
    
    bool isValidating;
    cout <<"Enter a grade with the range from 0 to 100 and if you want to stop execution of program and see the result enter '-1'"<<endl;
    //main loop
    while(isRunning)
    {
        //vaildate user input according to requerements
        isValidating = true;
        while (isValidating ){
            cout << "Enter a grade: ";
            cin >> grade;
            if(grade > 100 || (grade < 0 && grade != -1))
            {
                cout <<"You should enter numbers in range from 0 to 100 (exept the case when you enter -1 to stop the program)" << endl;
                continue;
            }
            else if (grade == -1){
                isValidating = false;
                isRunning = false;
                break;
            }
            else
            {
                overallGrade += grade;
                
                if (grade >= 60)
                {
                    numberOfPassed += 1;
                    if (grade == 100)
                    {
                        numberOfMaxGrade += 1;
                    }
                }
                else if(grade<60)
                {
                    numberOfFailed +=1;
                }
                
                
            }
            
        }
    }
        averageGrade = overallGrade /(numberOfPassed+numberOfFailed);
     
    cout << "\n\nAverage grade: "<<averageGrade<<"\n100's grades: "<<numberOfMaxGrade<<"\nfailings: "<<numberOfFailed << endl;
    return 0;
}

/*

**Input:**
- `grade`: An integer representing a student's grade (0 to 100).
- User input for grades is received in a loop.

**Process:**
1. Initialize variables:
   - `overallGrade`: To store the sum of all grades.
   - `numberOfPassed`: To count the number of students who passed (grade >= 60).
   - `numberOfMaxGrade`: To count the number of students who scored 100.
   - `numberOfFailed`: To count the number of students who failed (grade < 60).
   - `averageGrade`: To calculate the average grade.
   - `isRunning`: A boolean variable to control the main program loop.
   - `isValidating`: A boolean variable to control input validation loop.

2. Display a message to the user to enter grades (0 to 100), and -1 to stop the program.

3. Enter a loop (while `isRunning` is true):
   a. Enter a loop (while `isValidating` is true) to validate user input:
      - Prompt the user to enter a grade.
      - Check if the input is within the range (0 to 100) or is -1 to stop the program.
      - If the input is out of range, display an error message and continue.
      - If the input is -1, set `isValidating` to false and `isRunning` to false, then break out of the loop.
      - Otherwise, add the grade to `overallGrade`.
      - If the grade is greater than or equal to 60, increment `numberOfPassed`.
      - If the grade is 100, increment `numberOfMaxGrade`.
      - If the grade is less than 60, increment `numberOfFailed`.

4. Calculate the `averageGrade` by dividing `overallGrade` by the sum of `numberOfPassed` and `numberOfFailed`.

**Output:**
- Display the following information after the program execution:
  - "Average grade": The calculated average grade.
  - "100's grades": The count of students who scored 100.
  - "failings": The count of students who failed (grade < 60).

The program takes grades as input, processes them to calculate statistics, and outputs the average grade, the count of students who scored 100, and the count of students who failed.

*/
