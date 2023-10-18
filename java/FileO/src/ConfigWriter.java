import java.io.*;
public class ConfigWriter {
    String newline = System.getProperty("line.separator");

    ConfigWriter(){
        try {
            File file = new File("highscores.txt");
            FileOutputStream fs = new FileOutputStream(file);
            write(fs, "username=George");
            write(fs, "score=99");

        }catch (IOException e){
            System.out.println("Could not write file.");
        }
    }

    private void write(FileOutputStream stream, String output) throws IOException{
        output = output + newline;
        byte[] data = output.getBytes();
        stream.write(data,0,data.length);
    }
}
