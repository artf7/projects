/**
 * The Logger class provides logging functionality with different log levels.
 */
package org.example;

import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

/**
 * The Logger class handles logging messages with various log levels.
 */
public class Logger {
    /**
     * Singleton instance of the Logger class.
     */
    private static Logger _instance;

    /**
     * The current log level.
     */
    private LogLevel loglevel;

    /**
     * List to store logged messages.
     */
    private List<String> logs;

    /**
     * PrintWriter to write logs to a file.
     */
    private PrintWriter fileWriter;

    /**
     * Constructs a new Logger instance with default settings.
     */
    public Logger() {
        loglevel = LogLevel.INFO;
        logs = new ArrayList<>();
        try {
            fileWriter = new PrintWriter(new FileWriter("Logging.log"));
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    /**
     * Retrieves the singleton instance of the Logger class.
     *
     * @return The Logger instance.
     */
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

    /**
     * Sets the log level for filtering messages.
     *
     * @param level The log level to set.
     */
    public void setLogLevel(LogLevel level) {
        loglevel = level;
    }

    /**
     * Logs a message with the specified log level.
     *
     * @param level   The log level of the message.
     * @param message The message to log.
     */
    public void log(LogLevel level, String message) {
        if (level.ordinal() >= loglevel.ordinal()) {
            String log = String.format("[%s] [%s] %s", level, LocalDateTime.now(), message);
            System.out.println(log);
            fileWriter.println(log);
            fileWriter.flush();
        }
    }

    /**
     * Displays all logged messages.
     */
    public void displayLog() {
        for (String log : logs) {
            System.out.println(log);
        }
    }
}
