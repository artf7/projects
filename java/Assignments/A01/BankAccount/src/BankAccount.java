public class BankAccount {
    private int bankAccountNumber;
    private double balance;
    private String customerFirstName;
    private String customerLastName;
    private String address;



    //getter and setter methods
    public int getBankAccountNumber(){
        return bankAccountNumber;
    }

    public void setBankAccountNumber(int bankAccountNumber){
        this.bankAccountNumber = bankAccountNumber;
    }

    public double getBalance(){
        return balance;
    }

    public void setBalance(double balance){
        this.balance = balance;
    }

    public String getCustomerFirstName() {
        return customerFirstName;
    }

    public void setCustomerFirstName(String customerFirstName){
        this.customerFirstName = customerFirstName;
    }

    public String getCustomerLastName() {
        return customerLastName;
    }

    public void setCustomerLastName(String customerLastName){
        this.customerLastName = customerLastName;
    }

    public String getAddress(){
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    //deposit
    public void deposit(double amount){
        balance += amount;
    }

    //withdraw
    public void withdraw(double amount){
        balance -= amount;
    }

    //default constructor
    public BankAccount(){
        this.bankAccountNumber = 2;
        this.balance = 2;
        this.customerFirstName = "empty";
        this.customerLastName = "empty";
        this.address = "empty";
    }

    //constructor that set all attributes
    public BankAccount(int bankAccountNumber, String customerFirstName, String customerLastName, String address, double balance){
        this.bankAccountNumber = bankAccountNumber;
        this.customerFirstName = customerFirstName;
        this.customerLastName = customerLastName;
        this.balance = balance;
        this.address = address;
    }

    //constructor that set string attributes and default numeric attributes
    public BankAccount(String customerFirstName, String customerLastName, String address){
        this.bankAccountNumber = 2;
        this.balance = 2;
        this.customerFirstName = customerFirstName;
        this.customerLastName = customerLastName;
        this.address = address;
    }
    //display method
    public void display(){
        System.out.println("Bank account number: " + bankAccountNumber);
        System.out.println("Balance: $" + balance);
        System.out.println("Customer name: " + customerFirstName + " " + customerLastName);
        System.out.println("Address: " + address);

    }

}
