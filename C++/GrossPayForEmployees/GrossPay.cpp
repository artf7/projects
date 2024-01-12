#include <iostream>
#include <fstream>

using namespace std;

void showInstructions() {
    cout << "Instructions:\n1) Enter the ID of an employee (press enter)\n"
         << "2) After it, enter the worked hours (press enter)\n"
         << "3) Enter the skill level (J for Junior, I for Intermediate, S for Senior) (press enter)\n"
         << "4) Enter the surname of an employee (press enter)\n"
         << "After completing all steps, the program will ask if you want to continue or stop entering data (use 'y' or 'n' for decision making) (press enter)" << endl;
}

string setId() {
    cout << "Enter ID of an employee: ";
    string employeeId;
    cin >> employeeId;
    return employeeId;
}

string setName() {
    cout << "Enter the name of the employee: ";
    string employeeName;
    cin >> employeeName;
    return employeeName;
}

string setSurname() {
    cout << "Enter the surname of the employee: ";
    string employeeSurname;
    cin >> employeeSurname;
    return employeeSurname;
}

float setHrsWorked() {
    cout << "Enter the number of worked hours: ";
    float hrsWorked;
    cin >> hrsWorked;
    return hrsWorked;
}

char setSkillLevel() {
    char skillLevel;
    cout << "Enter the skill level (J for Junior, I for Intermediate, S for Senior): ";
    cin >> skillLevel;
    return skillLevel;
}

float calculateGrossPay(float hrsWorked, char skillLevel) {
    float grossPay = 0.0F;
    float payRate = 0.0F;

    switch (skillLevel) {
        case 'J':
        case 'j':
            payRate = 25.0F;
            break;
        case 'I':
        case 'i':
            payRate = 45.0F;
            break;
        case 'S':
        case 's':
            payRate = 65.0F;
            break;
        default:
            cout << "Invalid skill level. Assuming Junior." << endl;
            payRate = 25.0F;
            break;
    }

    if (hrsWorked > 40) {
        float overtime = (hrsWorked - 40) * (payRate * 1.5);
        grossPay = (payRate * 40) + overtime;
    } else if (hrsWorked <= 40) {
        grossPay = hrsWorked * payRate;
    }

    return grossPay;
}

float calculateTax(float grossPay) {
    if (grossPay <= 0) {
        return 0.0F;
    } else if (grossPay <= 800) {
        return grossPay * 0.2;
    } else if (grossPay <= 1500) {
        return grossPay * 0.25;
    } else {
        return grossPay * 0.3;
    }
}

float calculateNetPay(float grossPay, float tax) {
    return grossPay - tax;
}

//compiles employee info in good format for further adding it to the overall info
//calculating grossPay.
string formatEmployeeInfo(string employeeId, string employeeName, string employeeSurname, float hrsWorked, char skillLevel) {
    float grossPay = calculateGrossPay(hrsWorked, skillLevel);
    float tax = calculateTax(grossPay);
    float netPay = calculateNetPay(grossPay, tax);

    return "Employee ID: " + employeeId + "\n" +
           "Name: " + employeeName + " " + employeeSurname + "\n" +
           "Worked " + to_string(hrsWorked) + " hrs at a rate of $" + to_string(calculateGrossPay(hrsWorked, skillLevel) / hrsWorked) +
           " per hour.\nGross pay is $" + to_string(grossPay) +
           "\nTax withheld is $" + to_string(tax) +
           "\nNet pay is $" + to_string(netPay) + "\n\n";
}

//opens/creates a file and adding information in it
//getting file name and information that should be added to a file
void fileInput(string fileName, string information) {
    ofstream employeeInfoFile(fileName, ios::app);
    if (employeeInfoFile.is_open()) {
        employeeInfoFile << information << endl;
        cout << "Info added\n";
        employeeInfoFile.close();
    } else {
        cout << "Unable to open the file";
    }
}

//gettin file name and output all information from the file
void fileOutput(string fileName) {
    string line;
    ifstream file(fileName);
    if (file.is_open()) {
        while (getline(file, line)) {
            cout << line << '\n';
        }
        file.close();
    } else {
        cout << "Unable to open file";
    }
}


//contains information about employee
struct employer{
    string emplyoeeId;
    string employeeName;
    string employeeSurname;
    string employeeInfo;
};

// program for gross pay calculation
int main() {
    //creatign instance of employee struct
    employer emp;
    
    float hrsWorked;
    string employeeName;
    string employeeSurname;
    string employeeId;
    string employeeInfo;
    char decision;
    bool loopVar = true;

    showInstructions();
    while (loopVar) {
        employeeId = setId();
        employeeName = setName();
        employeeSurname = setSurname();
        hrsWorked = setHrsWorked();
        
        
        
        // Jj for junior, Ii for intermediate, Ss for senior
        char skillLevel = setSkillLevel();
        
        if (hrsWorked < 0) {
            cout << "Work hours cannot be negative";
            break;
        }
        
        cout << formatEmployeeInfo(employeeId, employeeName, employeeSurname, hrsWorked, skillLevel);
        employeeInfo += formatEmployeeInfo(employeeId, employeeName, employeeSurname, hrsWorked, skillLevel);
        
        cout << "Do you want to continue (y/n): ";
        while (true) {
            cin >> decision;
            if (decision == 'y') {
                break;
            } else if (decision == 'n') {
                loopVar = false;
                break;
            } else {
                cout << "You should enter only 'y' or 'n', for yes and no respectively";
            }
        }
        
        //add user input to the structure
        emp.emplyoeeId = employeeId;
        emp.employeeName = employeeName;
        emp.employeeSurname = employeeSurname;
        emp.employeeInfo = employeeInfo;
        
    }

    fileInput("weeklyPayroll.txt", employeeInfo);
    fileOutput("weeklyPayroll.txt");

    return 0;
}
