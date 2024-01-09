/**
 * Represents a simple calculator with basic arithmetic operations.
 */
package org.example;

/**
 * The Calculator class provides functionality for basic arithmetic operations.
 */
public class Calculator {

    /**
     * Logger instance for logging events.
     */
    private Logger logger = new Logger();

    /**
     * First operand for calculations.
     */
    private Double num1;

    /**
     * Second operand for calculations.
     */
    private Double num2;

    /**
     * Operator used for calculations.
     */
    private String operator;

    /**
     * Sets the first operand for calculations.
     *
     * @param n The value to set as the first operand.
     */
    public void setNum1(Double n) {
        try {
            this.num1 = n;
            logger.log(LogLevel.INFO, "Added 1st number");
        } catch (NullPointerException e) {
            logger.log(LogLevel.WARN, "Problem with entrance of 1st");
            this.num1 = 0d;
        }
    }

    /**
     * Sets the second operand for calculations.
     *
     * @param n The value to set as the second operand.
     */
    public void setNum2(Double n) {
        try {
            this.num2 = n;
            logger.log(LogLevel.INFO, "Added 2nd number");
        } catch (NullPointerException e) {
            logger.log(LogLevel.WARN, "Problem with entrance of 2nd");
            this.num2 = 0d;
        }
    }

    /**
     * Retrieves the first operand.
     *
     * @return The value of the first operand.
     */
    public Double getNum1() {
        return num1;
    }

    /**
     * Retrieves the second operand.
     *
     * @return The value of the second operand.
     */
    public Double getNum2() {
        return num2;
    }

    /**
     * Sets the operator for calculations.
     *
     * @param operator The operator to set.
     */
    public void setOperator(String operator) {
        logger.log(LogLevel.INFO, "Setting operator");
        this.operator = operator;
    }

    /**
     * Retrieves the operator.
     *
     * @return The operator for calculations.
     */
    public String getOperator() {
        return operator;
    }

    /**
     * Performs addition operation.
     *
     * @return The result of the addition operation.
     */
    public Double add() {
        try {
            logger.log(LogLevel.INFO, "Adding");
            return num1 + num2;
        } catch (NullPointerException e) {
            logger.log(LogLevel.WARN, "Problem with adding");
            return 0d;
        }
    }

    /**
     * Performs subtraction operation.
     *
     * @return The result of the subtraction operation.
     */
    public Double subtract() {
        try {
            logger.log(LogLevel.INFO, "Subtracting");
            return num1 - num2;
        } catch (NullPointerException e) {
            logger.log(LogLevel.WARN, "Problem with subtracting");
            return 0d;
        }
    }

    /**
     * Performs multiplication operation.
     *
     * @return The result of the multiplication operation.
     */
    public Double multiply() {
        try {
            logger.log(LogLevel.INFO, "Multiplying");
            return num1 * num2;
        } catch (NullPointerException e) {
            logger.log(LogLevel.WARN, "Problem with multiplying");
            return 0d;
        }
    }

    /**
     * Performs division operation.
     *
     * @return The result of the division operation.
     */
    public Double divide() {
        try {
            logger.log(LogLevel.INFO, "Dividing");
            return num1 / num2;
        } catch (NullPointerException e) {
            logger.log(LogLevel.ERROR, "Problem with dividing");
            System.out.println(e.toString());
            return 0d;
        } catch (Exception e) {
            logger.log(LogLevel.WARN, "Dividing by zero");
            System.out.println(e.toString());
            return 0d;
        }
    }

    /**
     * Clears the calculator by resetting operands and operator.
     */
    public void clear() {
        logger.log(LogLevel.INFO, "Pressing clear button");
        num1 = 0d;
        num2 = 0d;
        operator = null;
    }

    /**
     * Performs the calculation based on the current operator.
     *
     * @return The result of the calculation.
     */
    public Double performCalculation() {
        Double result = 0d;

        switch (operator) {
            case "+":
                result = add();
                logger.log(LogLevel.INFO, num1 + "+" + num2 + "=" + result);
                break;
            case "➖":
                result = subtract();
                logger.log(LogLevel.INFO, num1 + "-" + num2 + "=" + result);
                break;
            case "X":
                result = multiply();
                logger.log(LogLevel.INFO, num1 + "*" + num2 + "=" + result);
                break;
            case "/":

                if (num2 == 0) {
                    logger.log(LogLevel.ERROR, num1 + "/" + num2 + " Cannot divide by zero");
                } else {
                    result = divide();
                    logger.log(LogLevel.INFO, num1 + "/" + num2 + "=" + result);
                }
                break;
            case "C":
                clear();
                logger.log(LogLevel.INFO, "Calculator cleared");
                break;
            case "Bksp":
                logger.log(LogLevel.INFO, "Number deleted");
                break;
            default:
                result = num2;
        }

        return result;
    }
}
