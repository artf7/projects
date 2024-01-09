//
//  mailOrderSystem.cpp
//  Assignment_2
//
//  Created by Artem  on 2023-10-23.
//

#include <iostream>
using namespace std;

// cretes pattern programm
int main() {
    //loop control variable for entering product number
    bool isEnteringProductNumber;
    //loop control variable for the main loop
    bool isEntering = true;
    //loop control variable for main menu
    bool isChoosing;
    
    //represent the day of the last week
    int dayNumber = 1;
    
    //contain user input in main menu
    int menu = 0;
    int productNumber = 0;
    int productQuantity = 0;
    float productPrice = 0.0F;
    
    
    //overall price for all products
    float overallPrice = 0;
    
    
    //main loop
    while(isEntering)
    {
        //based on day number output the week day
        switch (dayNumber) {
            case 1:
                cout << "\n\nSunday\n"<<endl;
                break;
            case 2:
                cout << "\n\nMonday\n"<<endl;
                break;
            case 3:
                cout << "\n\nTuesday\n"<<endl;
                break;
            case 4:
                cout << "\n\nWednesday\n"<<endl;
                break;
            case 5:
                cout << "\n\nThursday\n"<<endl;
                break;
            case 6:
                cout << "\n\nFriday\n"<<endl;
                break;
            case 7:
                cout << "\n\nSaturday\n"<<endl;
                break;
                
            default:
                break;
        }
        
        isEnteringProductNumber = true;
        while(isEnteringProductNumber){
            cout << "Enter the product number: ";
            cin >> productNumber;
            switch (productNumber) {
                case 1:
                    productPrice = 2.92F;
                    isEnteringProductNumber = false;
                    break;
                case 2:
                    productPrice = 4.50F;
                    isEnteringProductNumber = false;
                    break;
                case 3:
                    productPrice = 9.98F;
                    isEnteringProductNumber = false;
                    break;
                case 4:
                    productPrice = 4.49F;
                    isEnteringProductNumber = false;
                    break;
                case 5:
                    productPrice = 6.87F;
                    isEnteringProductNumber = false;
                    break;
                case 6:
                    productPrice = 3.81F;
                    isEnteringProductNumber = false;
                    break;
                case 7:
                    productPrice = 7.75F;
                    isEnteringProductNumber = false;
                    break;
                case 8:
                    productPrice = 5.99F;
                    isEnteringProductNumber = false;
                    break;
                default:
                    cout << "You've entered wrong product number.\nYou should enter number from (1 to 8)"<<endl;
                    break;
            }
            
        }
        
        
        cout << "Enter the product quantity: ";
        cin >> productQuantity;
        
        overallPrice += productPrice * productQuantity;
        
        cout <<endl;
        
        
        isChoosing = true;
        
        while (isChoosing) {
            //checks if is day is last in the week
            if (dayNumber != 7){
                
                cout << "1)Add more products ordered in the same day\n2)Next day\n3)Stop program\nInput choice: ";
                cin >> menu;
                
                if (menu == 1)
                {
                    break;
                }
                else if (menu == 2){
                    dayNumber += 1;
                    break;
                }
                else if (menu == 3)
                {
                    isEntering = false;
                    break;
                }
                else{
                    cout << "You should enter numbers from (1 to 3)"<<endl;
                }
                
            }
            else
            {
                cout << "1)Add more products ordered in the same day\n2)Stop program\nInput choice: ";
                cin >> menu;
                if (menu == 1)
                {
                    break;
                }
                else if(menu == 2)
                {
                    isEntering = false;
                    break;
                }
                else{
                    cout << "You should enter numbers from (1 to 2)"<<endl;
                }
            }
            
        }
        
        cout <<endl;
        
    }
    
    
    
    cout << overallPrice <<"$ : total retail value of sold products for the week" << endl;
    
    
    return 0;
}/*

 
  **Input:**
  1. `productNumber`: The user enters the product number (an integer from 1 to 8).
  2. `productQuantity`: The user enters the quantity of the selected product (an integer).
  3. `menu`: The user selects an option from the main menu (an integer from 1 to 3).
     - Option 1: Add more value for the current day.
     - Option 2: Move to the next day.
     - Option 3: Stop the program.
  4. `dayNumber`: The day of the week, based on the loop iteration.

  **Process:**
  1. The program initializes variables, including `isEnteringProductNumber`, `isEntering`, `isChoosing`, `dayNumber`, `menu`, `productNumber`, `productQuantity`, `productPrice`, and `overallPrice`.
  2. The program uses a `while` loop to repeat the process for each day of the week.
     - It prints the name of the day based on `dayNumber`.
     - It prompts the user to enter a `productNumber` (1 to 8) and assigns a price based on the selected product.
     - The program prompts the user to enter the `productQuantity`, calculates the product's total price, and adds it to the `overallPrice`.
     - It enters another loop for the main menu where the user can choose options.
     - If it's not the last day of the week, the user can choose to add more value for the day, move to the next day, or stop the program.
     - If it's the last day of the week, the user can choose to add more value for the day or stop the program.
     - The loops continue until the user chooses to stop.

  **Output:**
  1. `overallPrice`: The total retail value of sold products for the week is displayed after the program finishes running.


*/
