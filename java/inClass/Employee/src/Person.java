abstract class Person {
    String firstName;
    String lastName;
    int age;

    public String getFirstName() {
        return firstName;
    }
    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }
    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public int getAge() {
        return age;
    }
    public void setAge(int age) {
        this.age = age;
    }

    public Person() {
    }

    public Person(String firstName, String lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
    }

    @Override
    public String toString() {
        return "fName='" + firstName + '\'' +
                ", lName='" + lastName + '\'' +
                ", age=" + age;
    }

    public abstract void print();

    public  String getFullName(){
        return  firstName + " " + lastName;
    };
}