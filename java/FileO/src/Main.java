import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;

public class Main {
    public static void main(String[] args) {
        String txt = "Hello world";
        String filename = "test.txt";
        System.out.println(txt);
        //From w3school
        File myObj = new File(filename);
        if (myObj.exists()){
            System.out.println("File name: " + myObj.getName());
            System.out.println("Absolute path: " + myObj.getAbsolutePath());
            System.out.println("Writable: " + myObj.canWrite());
            System.out.println("Readable: " + myObj.canRead());
            System.out.println("File size in bytes: " + myObj.length());
        }else{
            System.out.println("The file does not exist");
        }
        /////////////////////////////////////////////////////////
        try {
            ShowFIle.showFile(filename);
        }catch (FileNotFoundException e){
            System.out.println(e);
        }catch (IOException e){
            System.out.println(e);
        }

    }
}