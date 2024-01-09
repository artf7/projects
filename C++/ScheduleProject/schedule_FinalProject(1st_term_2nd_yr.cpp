// Program: Task Scheduler
// Authors: Artem Fedorov, Cale Stevens, John Windor, and Ryan Revels-Scholte
// Creation Date: 2023-12-06
// Last Modified: 2023-12-07
// Description: Task Scheduler inputs tasks and outputs the optimal order to complete them in

#include <iostream>
#include <map>
#include <vector>
#include <algorithm>
#include <fstream>
#include <sstream>

struct Task {
    std::string name;
    std::string date;
    int priority;
};

// Input an existing schedule from a file
// Author: Ryan Revels-Scholte
void inputFromFile(std::map<int, Task> &taskList) {
    std::cout << "Please enter the schedule filename: ";
    std::string filename;
    std::cin >> filename;

    std::ifstream file(filename);
    std::string line;

    while (std::getline(file, line)) {
        std::istringstream iss(line);
        std::string token;

        // Why is there a pointer? Because the assignment told us we have to have one.
        Task task;
        Task *taskPtr = &task;
        int attributeCount = 0;
        int index;

        while (std::getline(iss, token, '\t')) {
            switch (attributeCount) {
                case 0:
                    index = std::stoi(token);
                    break;
                case 1:
                    (*taskPtr).name = token;
                    break;
                case 2:
                    (*taskPtr).date = token;
                    break;
                case 3:
                    (*taskPtr).priority = std::stoi(token);
                    break;
                default:
                    break;
            }
            attributeCount++;
        }

        taskList[index] = task;
    }
}

// Display a task
// Author: John Winsor
// void displayTask(const Task task) {
//     std::cout << "Name: " << task.name << "\n"
//               << "Due date: " << task.date << "\n"
//               << "Priority: " << task.priority << "\n";
// }

// Add a task to the vector of tasks
// Author: John Winsor
void addEntry(std::map<int, Task> &tasks) {
    std::string taskName;    // Task name
    std::string taskDueDate; // Task due date
    int taskPriority;        // Task priority

    std::cout << "Enter task name: ";
    std::getline(std::cin, taskName); // Get the task name

    std::cout << "Enter due date (YYYY-MM-DD): ";
    std::getline(std::cin, taskDueDate); // Get the task due date

    std::cout << "Enter priority (1-3): ";
    std::cin >> taskPriority; // Get the task priority
    std::cin.ignore();        // Ignore the newline character

    tasks[tasks.size() + 1] = Task { taskName, taskDueDate, taskPriority }; // Return the task
}

// Remove a task from the vector of tasks
// Author: John Winsor
void removeEntry(std::map<int, Task> &tasks) {
    std::string strTaskID; // Task ID
    int taskID;

    for (const auto pair : tasks)
        std::cout << "ID: " << pair.first << ", Title: " << pair.second.name <<", Date: " <<pair.second.date <<", Priority: " << pair.second.priority  << std::endl;

    std::cout << "Enter ID of task to remove: ";
    std::cin >> strTaskID;
    try {
        taskID = std::stoi(strTaskID);
    } catch(std::invalid_argument) {
        std::cout << "ERROR: That was not a valid argument. " << std::endl;
    }


    // Delete the entry
    tasks.erase(tasks.find(taskID));
}

// Uses for std::sort function to sort values by date
// Author: Artem Fedorov
bool compareByDate(const Task task1, const Task task2) {
    // Convert date value from string to int and compare. It's not 100% accurate when compared to a callendar (because different months have different lengths),
    // but it doesn't matter when it's only compared to itself.
    int date1 = std::stoi(task1.date.substr(0, 4)) * 365 + std::stoi(task1.date.substr(5, 7)) * 30 + std::stoi(task1.date.substr(8, 10));
    int date2 = std::stoi(task2.date.substr(0, 4)) * 365 + std::stoi(task2.date.substr(5, 7)) * 30 + std::stoi(task2.date.substr(8, 10));

    if(date1 < date2)
        return true;

    return false;
}

// Sorts the Tasks from the unsortedList into mainList by order of date
// Author: Artem Fedorov
void sortList(std::map<int, Task> &unsortedList, std::map<int, Task> &mainList) {
    // Convert unsortedList to vector
    std::vector<Task> taskVector;
    for (const auto pair : unsortedList) {
        taskVector.push_back(pair.second);
    }

    // Compare and sort by date
    std::sort(taskVector.begin(), taskVector.end(), compareByDate);

    // Add sorted tasks to mainList map
    int index = 1 + mainList.size();
    for (const auto task : taskVector) {
        mainList[index++] = task;
    }
}

// Outputs the schedule to a file
// Author: Cale Stevens
int outputSchedule(std::map<int, Task> &mainList) {
    std::map<int, Task> maps[3];

    // Separate the tasks into three maps by priority
    std::map<int, Task>::iterator it = mainList.begin();
    while(it != mainList.end()) {
        maps[it->second.priority - 1][it->first] = it->second;
        mainList.erase(it++);
    }

    // Sort the priority maps and add the tasks back to the main list
    for(int i = 2; i >= 0; i--)
        sortList(maps[i], mainList);

    std::ofstream file("output.txt");

    if(file.fail()) {
        std::cout << "ERROR: Could not access output.txt" << std::endl;
        return 1;
    }

    // Output the tasks into the file
    for(const auto pair : mainList) {
        file << pair.first << '\t' << pair.second.name + '\t' + pair.second.date + '\t' + std::to_string(pair.second.priority) + '\n';
    }

    file.close();

    std::cout << "Outputted schedule: " << std::endl;
    for (const auto pair : mainList) {
        std::cout << "ID: " << pair.first << ", Title: " << pair.second.name <<", Date: " <<pair.second.date <<", Priority: " <<pair.second.priority  << std::endl;
    }

    return 0;
}

int main() {
    std::map<int, Task> mainList;

    // For debugging
    // Task task1 = { "Quiz", "2023-12-03", 3 };
    // Task task2 = { "Midterm", "2023-12-12", 3 };
    // Task task3 = { "Assignment", "2024-12-05", 2 };
    //
    // mainList[1] = task3;
    // mainList[2] = task1;
    // mainList[3] = task2;

    std::cout << "Welcome to Task Scheduler by Artem Fedorov, Cale Stevens, John Windor, and Ryan Revels-Scholte." << std::endl;
    std::cout << "This program inputs all of the tasks you have to do and outputs an optimal order to complete them." << std::endl;
    std::cout << std::endl;

    std::cout << "Would you like to input an existing schedule from a file? (y/n): ";
    std::string input;
    std::cin >> input;

    if(input.at(0) == 'y')
        inputFromFile(mainList);
    else if(input.at(0) != 'n')
        std::cout << "ERROR: That wasn't a valid option. Using defualt (n)" << std::endl;

    // Add white space
    std::cout << "\n\n";

    while(true) {
        // For debugging
        for (const auto pair : mainList)
            std::cout << "ID: " << pair.first << ", Title: " << pair.second.name << ", Date: " << pair.second.date << ", Priority: " << pair.second.priority << std::endl;

        std::cout << "Please choose an option: " << std::endl;
        std::cout << "1. Add a task" << std::endl;
        std::cout << "2. Remove a task" << std::endl;
        std::cout << "3. Output task list" << std::endl;
        std::cout << "4. Exit the program" << std::endl;
        std::cout << "> ";

        std::string choice;
        std::cin >> choice;
        std::cin.ignore();

        switch(choice.at(0)) {
            case '1':
                addEntry(mainList);
                break;
            case '2':
                removeEntry(mainList);
                break;
            case '3':
                if(outputSchedule(mainList) == 1)
                    std::cout << "An error occured while saving to file. File remains unsaved. " << std::endl;
                break;
            case '4':
                exit(0);
            default:
                std::cout << "ERROR: That was not a valid input" << std::endl;
                continue;
        }

        // Add white space
        std::cout << "\n\n";
    }

    return 0;
}
