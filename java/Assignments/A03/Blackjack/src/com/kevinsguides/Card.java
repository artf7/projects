package com.kevinsguides;

/**
 *Card class represents a playing card with a suit and rank.
 *
 *@param suit -- Represents the suit of the card (e.g. hearts, diamonds, spades, clubs).
 *
 *@param rank  -- Represents the rank of the card (e.g. 2, 3, 4, ..., 10, Jack, Queen, King, Ace).
 **/

public class Card {

    private Suit suit;
    private Rank rank;

    /**
     *Constructor to create a Card object with a given suit and rank.
     *@param suit -- Represents the suit of the card.
     *@param rank -- Represents the rank of the card.
     **/
    public Card(Suit suit, Rank rank){
        this.suit = suit;
        this.rank = rank;
    }
    /**
     * Constructor to create a Card object with the same suit and rank as another Card object.
     *
     * @param card  -- Represents the Card object from which the suit and rank will be copied.

     **/
    public Card(Card card){
        this.suit = card.getSuit();
        this.rank = card.getRank();
    }
    /**
     * Returns the numerical value of the card based on its rank.
     *
     * @return The numerical value of the card.
     **/
    public int getValue(){
        return rank.rankValue;
    }
    /**
     * Returns the suit of the card.
     *
     * @return -- The suit of the card.
     **/
    public Suit getSuit(){
        return suit;
    }
    /**
     * Returns the rank of the card.
     *
     * @return -- The suit of the card.
     **/
    public Rank getRank(){
        return rank;
    }
    /**
     * Returns a string representation of the card in the format "[rank] of [suit] (value)".
     * @return -- A string representation of the card.
     **/
    public String toString(){
        return ("["+rank+" of "+ suit + "] ("+this.getValue()+")");

    }

}