public class Customer extends Person {

    private int custId;
    private String phoneNumber;
    public String getPhoneNumber(){
        return phoneNumber;
    }
    public void setPhoneNumber(String phoneNumber){
        this.phoneNumber = phoneNumber;
    };
    public int getId(int id) { return id; }
    public void setCustId(int custId) { this.custId = custId; }

    public Customer() {
        this.firstName = "Jane";
        this.lastName = "Doe";
    }

    public Customer (String firstName, String lastName) {
        super(firstName,lastName);
    }

    public Customer(String firstName, String lastName, int age) {
        super(firstName, lastName);
        this.age = age;
    }

    public void print() {
        System.out.println("Customer{" + this.toString() +", id=" + this.custId + "}");
    }

    public void printName(){
        System.out.println(this.getFullName());
    }
}