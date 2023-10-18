import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {

        ArrayList<Customer> customers = new ArrayList<>();
        String cont = "y";

        System.out.println("Welcome to Biznas Company Sale Leads App");

        do {
            Scanner input = new Scanner(System.in);
            System.out.println("Enter customer first name: ");
            String fname = input.nextLine();
            System.out.println("Enter customer last name: ");
            String lname = input.nextLine();
            customers.add(new Customer(fname, lname));
            System.out.println("Add another user? ");
            cont = input.next();
        } while (cont.equals("y"));
        System.out.println(customers.size());

        // Test adding a new customer to arraylist
        for(Customer c: customers){
            c.printName();
        }

//        Person p1 = new Person("George", "Castanza");
//        p1.print();

//        Customer c1 = new Customer("Jerry","Seinfeld", 56);
//        c1.print();


        // Date of Birth for employee 1 "04/05/1993"
        String dob = "2004-05-03"; // day/month/year

        Employee emp1 = new Employee("David", "Smith", "COGS", 99, 48000, "2014-05-11");
        Employee emp2 = new Employee("Sally", "Jones", "COGS", 23, 99000, dob);

        emp2.raiseSalary();
        emp1.print();
        emp2.print();
//
//        System.out.println(emp1.getFirstName() + "'s Salary is " + emp1.salary);
//        System.out.println(emp2.getFirstName() + "'s Salary is " + emp2.salary);
//
        emp1.printStartDate();
        emp1.printDateOfBirth();
        emp2.printStartDate();
        emp1.printAge();

//        System.out.println(emp1.getFullName());
//        System.out.println(emp2.getFullName());
//        System.out.println(c1.getFullName());
//        System.out.println(c3.getFullName());
//
//        emp1.print();
//
//        Customer cust1 = new Customer("David","Kristiansen");
//        int i = cust1.getId();
//
//        Customer cust2 = new Customer();
//        cust2.setLastName("Smith");
//        System.out.println(cust2.getLastName());


    }
}