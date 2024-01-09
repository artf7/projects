package org.example;

import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

public class Logger {
    private static Logger _instance;
    private LogLevel loglevel;
    private List<String> logs;
    private PrintWriter fileWriter;


    public Logger() {

        loglevel = LogLevel.INFO;
        logs = new ArrayList<>();
        try {
            fileWriter = new PrintWriter(new FileWriter("LogginExample.log"));

        } catch (IOException e) {
            e.printStackTrace();
        }

    }

    // Create an instance of Logger (if it is not exist already)
    public static Logger getInstance() {
        if (_instance == null) {
            synchronized (Logger.class) {
                if (_instance == null) {
                _instance = new Logger();
                }
            }
        }
        return _instance;
    }


    // Set the log level
    public void setLogLevel(LogLevel level) {
        loglevel = level;
    }


    // Log a message with the specified level
    public void log(LogLevel level, String message) {
        if (level.ordinal() >= loglevel.ordinal()) {
            String log = String.format("[%s] [%s] %s", level, LocalDateTime.now(), message);
            System.out.println(log);
            fileWriter.println(log);
            fileWriter.flush();
        }
    }
    //display all logged messages
    public void dispalyLog(){
        for (String log : logs)
        {
            System.out.println(log);
        }
    }




}
