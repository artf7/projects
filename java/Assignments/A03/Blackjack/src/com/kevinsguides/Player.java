package com.kevinsguides;
import java.util.Scanner;
/**
 * Handles all Player specific operations
 */
public class Player extends Person {
    Scanner input = new Scanner(System.in);
    /**
     * Constructor - creates player
     * */
    public Player() {

        super.setName("Player");

    }
    /**
     * Allow the player to decide to hit or stand
     * @param deck - deck we are drawing from when we hit
     * @param discard - deck we discard to, in case we need to shuffle and use when deck runs out
     */
    public void makeDecision(Deck deck, Deck discard) {

        int  decision = 0;
        boolean getNum = true;

        while(getNum){

            try{
                System.out.println("Would you like to: 1) Hit or 2) Stand");
                decision = input.nextInt();
                getNum = false;

            }
            catch(Exception e){
                System.out.println("Invalid");
                input.next();
            }
        }

        if (decision == 1) {
            this.hit(deck, discard);
            if(this.getHand().calculatedValue()>20){
            }
            else{
                this.makeDecision(deck, discard);
            }

        } else {
            System.out.println("You stand.");
        }
    }



}