import java.time.LocalDate;
import java.time.Period;


public class Employee extends Person {

    String location;
    int corpId;
    private double salary;

    private LocalDate dateOfBirth;
    private LocalDate startDate;
    private void setDateOfBirth(String dob) {
        this.dateOfBirth = LocalDate.parse(dob);
    }
    public Employee(String fname, String lname, String location, int corpId, double salary, String dateOfBirth) {
        super(fname,lname);
        this.location = location;
        this.corpId = corpId;
        this.salary = salary;
        this.setDateOfBirth(dateOfBirth);
        this.startDate = LocalDate.now();
        this.age = getAge();
    }

    public int getAge() {
        return Period.between(this.dateOfBirth, LocalDate.now()).getYears();
    }

    public void raiseSalary() {
        this.salary += this.salary * 0.015;
    }

    public void printStartDate() {
        System.out.println(this.startDate);
    }

    public void printDateOfBirth() {
        System.out.println(this.dateOfBirth);
    }

    public void printAge() {
        System.out.println(this.getAge());
    }

    public void print() {
        System.out.println("Employee{" + super.toString() +", id=" + this.corpId + "}");
    }

}