public class OldCustomer {
    private int id;
    String firstName;
    String lastName;

    public int getId() { return id; }
    private void setId(int id) { this.id = id; }

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

    public OldCustomer() {
        this.id = 0;
    }

    public OldCustomer(String firstName, String lastName) {
        this.id = 0;
        this.firstName = firstName;
        this.lastName = lastName;
    }

    public void resetId() {
        setId(0);
    }
}

