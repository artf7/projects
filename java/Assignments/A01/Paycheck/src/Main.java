import java.util.Scanner;
import java.text.DecimalFormat;
public class Main {
    private static final DecimalFormat decfor = new DecimalFormat("0.00");
    public static void main(String[] args) {
        double hoursPay, hoursWorked, grossPay, netPay,percentOfTax;
        System.out.println("Welcome to Paycheck program");
        Scanner userInput = new Scanner(System.in);
        System.out.print("Enter the hours rate pay: $");
        hoursPay = userInput.nextDouble();
        System.out.print("Enter the worked hours: $");
        hoursWorked = userInput.nextDouble();
        grossPay = hoursPay * hoursWorked;
        System.out.println("-----Paycheck-----");
        System.out.println("Gross pay: $"+ grossPay);
        percentOfTax = ((10.0/100.0) * grossPay);
        System.out.println("10% tax  : $"+decfor.format(percentOfTax));
        netPay = grossPay - percentOfTax;
        System.out.println("netPay   : $"+netPay);
        System.out.println("------------------");
    }
}