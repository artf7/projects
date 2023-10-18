public class TestBankAccount {
    public static void main(String[] args) {
        //checking first constructor
        BankAccount account1 = new BankAccount();
        account1.display();
        System.out.println();
        //checking second constructor
        BankAccount account2 = new BankAccount(1124,"A","F","34 C St",199.6);
        account2.display();
        System.out.println();
        //checking third constructor
        BankAccount account3 = new BankAccount("C","V","56 E st");
        account3.display();
        System.out.println();

        //checking deposit and withdraw (from account 2)
        //Deposit +345
        account2.deposit(345);
        account2.display();
        System.out.println();
        //Withdraw - 45
        account2.withdraw(45);
        account2.display();
    }
}
