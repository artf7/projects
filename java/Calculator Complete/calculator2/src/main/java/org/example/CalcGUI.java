/**
 * Represents a graphical user interface for a basic calculator application.
 */
package org.example;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**
 * The CalcGUI class provides a simple GUI for a calculator application.
 * It includes buttons for digits, operators, and other functionalities.
 */
public class CalcGUI {
    private JButton a7Button;
    private JButton a8Button;
    private JButton a9Button;
    private JButton a4Button;
    private JButton a5Button;
    private JButton a6Button;
    JButton a1Button;
    JButton a2Button;
    private JButton a3Button;
    JTextField num2TextField;
    JButton a0Button;
    private JButton multiplyButton;
    JButton divideButton;
    private JButton subtractButton;
    JButton addButton;
    JButton equalButton;
    private JButton dotButton;
    JButton clearButton;
    JButton bkspButton;
    JTextField num1TextField;
    private JPanel panelMain;

    private JFrame mainFrame;

    private Calculator calc;

    /**
     * Sets the calculator instance for the GUI.
     *
     * @param c The calculator instance to set.
     */
    public void setCalculator(Calculator c) {
        this.calc = c;
    }

    /**
     * Constructs a new CalcGUI instance.
     * Initializes the main frame, buttons, and event listeners.
     */
    public CalcGUI() {
        mainFrame = new JFrame("Calculator");
        mainFrame.setSize(400, 400);
        mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        mainFrame.setContentPane(panelMain);
        mainFrame.setVisible(true);

        ActionListener numListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    JButton numButton = (JButton) e.getSource();
                    num2TextField.setText(num2TextField.getText() + numButton.getText());
                } catch (Exception exception) {
                    System.out.println(exception.toString());
                }
            }
        };

        ActionListener operatorListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    Double currentNumber = Double.parseDouble(num2TextField.getText());
                    calc.setNum1(currentNumber);
                    JButton opButton = (JButton) e.getSource();
                    String buttonText = opButton.getText();
                    calc.setOperator(buttonText);
                    num2TextField.setText("");
                    num1TextField.setText(buttonText);
                } catch (Exception exception) {
                    System.out.println(exception.toString());
                }
            }
        };

        // ActionListener for digit buttons
        a0Button.addActionListener(numListener);
        a1Button.addActionListener(numListener);
        a7Button.addActionListener(numListener);
        a8Button.addActionListener(numListener);
        a9Button.addActionListener(numListener);
        a4Button.addActionListener(numListener);
        a5Button.addActionListener(numListener);
        a6Button.addActionListener(numListener);
        a2Button.addActionListener(numListener);
        a3Button.addActionListener(numListener);
        dotButton.addActionListener(numListener);

        // ActionListener for operator buttons
        multiplyButton.addActionListener(operatorListener);
        subtractButton.addActionListener(operatorListener);
        addButton.addActionListener(operatorListener);
        divideButton.addActionListener(operatorListener);
        clearButton.addActionListener(operatorListener);

        // ActionListener for backspace button
        bkspButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String currentText = num2TextField.getText();
                if (!currentText.isEmpty()) {
                    num2TextField.setText(currentText.substring(0, currentText.length() - 1));
                }
            }
        });

        // ActionListener for equal button
        equalButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                double num2 = Double.parseDouble(num2TextField.getText());
                calc.setNum2(num2);
                Double result = calc.performCalculation();
                num2TextField.setText("0");
                num1TextField.setText(result.toString());
            }
        });
    }
}
