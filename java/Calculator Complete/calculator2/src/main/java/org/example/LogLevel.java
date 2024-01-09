/**
 * The LogLevel enum represents different levels of logging severity.
 */
package org.example;

/**
 * Enumerates different log levels with associated numeric values.
 */
public enum LogLevel {
    /**
     * Trace log level with the lowest severity.
     */
    TRACE(1),

    /**
     * Debug log level with a higher severity than Trace.
     */
    DEBUG(2),

    /**
     * Info log level with a higher severity than Debug.
     */
    INFO(3),

    /**
     * Warning log level with a higher severity than Info.
     */
    WARN(4),

    /**
     * Error log level with the highest severity.
     */
    ERROR(5);

    /**
     * The numeric value associated with each log level.
     */
    final int level;

    /**
     * Constructs a LogLevel enum with a specified numeric value.
     *
     * @param level The numeric value associated with the log level.
     */
    LogLevel(int level) {
        this.level = level;
    }
}
