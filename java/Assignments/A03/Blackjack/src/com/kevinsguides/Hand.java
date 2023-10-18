package com.kevinsguides;

import java.util.ArrayList;


/**
 * A hand of cards to play with
 */
public class Hand {

    private ArrayList<Card> hand;

    public Hand(){
        hand = new ArrayList<Card>();
    }
    /**
     * Take a single card from the top of this deck and add it to the hand, removing it from the previous deck
     * @param deck The deck of cards we're taking from
     */
    public void takeCardFromDeck(Deck deck){
        hand.add(deck.takeCard());
    }

    /**
     *
     * @return The hand with all its cards in a single line String
     */
    public String toString(){
        String output = "";
        for(Card card: hand){
            output += card + " - ";
        }
        return output;
    }

    /**
     *
     * @return The calculated numerical value of the hand as an integer
     */
    public int calculatedValue(){

        //variable to count number of aces, and current total value
        int value = 0;
        int aceCount = 0;

        for(Card card: hand){
            value += card.getValue();
            if (card.getValue() == 11){
                aceCount ++;
            }
        }

        if (value > 21 && aceCount > 0){
            while(aceCount > 0 && value > 21){
                aceCount --;
                value -= 10;
            }
        }
        return value;

    }

    public Card getCard(int idx){
        return hand.get(idx);
    }
    /**
     *
     * @param discardDeck The deck we're discarding this hand to
     */
    public void discardHandToDeck(Deck discardDeck){

        //copy cards from hand to discardDeck
        discardDeck.addCards(hand);

        //clear the hand
        hand.clear();

    }


}