import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        double length, width;
        double area;
        System.out.println("Hello to calculation area program ");
        Scanner userInput = new Scanner(System.in);
        System.out.print("Enter the length: ");
        length = userInput.nextDouble();
        System.out.print("Enter the width: ");
        width = userInput.nextDouble();
        area = length * width;
        System.out.println("You have " + area + " square meters.");

    }
}
