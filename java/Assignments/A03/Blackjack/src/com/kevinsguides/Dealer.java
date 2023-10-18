package com.kevinsguides;

/**
 * This class represents a dealer in a card game.
 */
public class Dealer extends Person{


    /**
     *Constructor for creating a new Dealer object.
     * Sets the dealer's name as "Dealer".
     */
    public Dealer(){

        super.setName("Dealer");

    }

    /**
     * Prints the dealer's first hand, with one card face down.
     */
    public void printFirstHand(){
        System.out.println("The dealer's hand looks like this:");
        System.out.println(super.getHand().getCard(0));
        System.out.println("The second card is face down.");
    }

}