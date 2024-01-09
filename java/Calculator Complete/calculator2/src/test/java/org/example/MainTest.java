package org.example;

import org.example.Calculator;
import org.junit.Before;
import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class MainTest {

    private Calculator calculator;

    @Before
    public void setUp() {
        calculator = new Calculator();
    }

    @Test
    public void testAddition() {
        calculator.setNum1(2.0);
        calculator.setNum2(4.0);
        calculator.setOperator("➕");
        double result = calculator.performCalculation();
        assertEquals(6.0, result, 0.0001);
    }

    @Test
    public void testSubtraction() {
        calculator.setNum1(5.0);
        calculator.setNum2(3.0);
        calculator.setOperator("➖");
        double result = calculator.performCalculation();
        assertEquals(2.0, result, 0.0001);
    }

    @Test
    public void testMultiplication() {
        calculator.setNum1(3.0);
        calculator.setNum2(4.0);
        calculator.setOperator("X");
        double result = calculator.performCalculation();
        assertEquals(12.0, result, 0.0001);
    }

    @Test
    public void testDivision() {
        calculator.setNum1(8.0);
        calculator.setNum2(2.0);
        calculator.setOperator("÷");
        double result = calculator.performCalculation();
        assertEquals(4.0, result, 0.0001);
    }

    @Test(expected = ArithmeticException.class)
    public void testDivisionByZero() {
        calculator.setNum1(5.0);
        calculator.setNum2(0.0);
        calculator.setOperator("÷");
        calculator.performCalculation();
    }

    @Test
    public void testClear() {
        calculator.setNum1(5.0);
        calculator.setNum2(3.0);
        calculator.setOperator("+");
        calculator.clear();
        assertEquals(0.0, calculator.getNum1(), 0.0001);
        assertEquals(0.0, calculator.getNum2(), 0.0001);
        assertEquals(null, calculator.getOperator());
    }

}
