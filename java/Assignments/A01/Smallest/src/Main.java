public class Main {
    public static void main(String[] args) {
        int n;
        n = 0;
        while(Math.pow(n,2) < 12000){
            n++;
        }
        System.out.println(n + " is the smallest number that to the power of 2 give us a number more than 12000 ("+Math.pow(n,2)+")." );
    }
}