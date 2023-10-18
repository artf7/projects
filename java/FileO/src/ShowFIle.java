import java.io.*;


public class ShowFIle {
    public static void showFile(String filename) throws IOException,FileNotFoundException{
        int c;
        //create a file object
        File input = new File(filename);

        //connect to stream
        FileInputStream in = new FileInputStream(input);

        //do the reading
        while((c=in.read())!= -1){
            System.out.println((char) c);//cast the int to the char, the int is the ASCII code
        }
            System.out.println();
            in.close();
    }
}
