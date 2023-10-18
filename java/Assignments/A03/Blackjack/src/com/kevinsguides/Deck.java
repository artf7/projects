package com.kevinsguides;

import java.util.ArrayList;
/**
 This class represents a deck of playing cards.
 */
public class Deck {

    private ArrayList<Card> deck;

    /**
     Constructor to create an empty deck of cards.
     */
    public Deck(){
        deck = new ArrayList<Card>();
    }
    /**
     * Constructor to create a deck of cards with the option to populate it.
     * @param makeDeck - boolean value to indicate if the deck should be populated with cards or not
     */
    public Deck(boolean makeDeck){
        deck = new ArrayList<Card>();
        if(makeDeck){
            for(Suit suit : Suit.values()){
                for(Rank rank : Rank.values()){
                    deck.add(new Card(suit, rank));
                }
            }
        }

    }

    /**
     * Getter method to retrieve the cards in the deck.
     * @return - an ArrayList of cards in the deck
     */
    public ArrayList<Card> getCards() {
        return deck;
    }
    /**
     *Method to add a card to the deck.
     *@param card - the card to be added to the deck
     */
    public void addCard(Card card){
        deck.add(card);
    }
    /**
    * Method to take a card from the deck.
    * @return - the card that was taken from the deck
     **/
    public Card takeCard(){

        Card cardToTake = new Card(deck.get(0));
        deck.remove(0);
        return cardToTake;

    }
    /**
     * Method to convert the deck to a string representation.
     * @return - a string representation of the deck
     */
    public String toString(){
        String output = "";

        for(Card card: deck){
            output += card;
            output += "\n";
        }
        return output;
    }

    /**
     Method to shuffle the deck.
     */
    //Shuffle the deck
    public void shuffle(){
        ArrayList<Card> shuffled = new ArrayList<Card>();
        while(deck.size()>0){
            int cardToPull = (int)(Math.random()*(deck.size()-1));
            shuffled.add(deck.get(cardToPull));
            deck.remove(cardToPull);
        }
        deck = shuffled;
    }
    public boolean hasCards(){
        if (deck.size()>0){
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * Empties out this Deck
     */
    public void emptyDeck(){
        deck.clear();
    }

    /**
     *
     * @param cards an arraylist of cards to be added to this deck
     */
    public void addCards(ArrayList<Card> cards){
        deck.addAll(cards);
    }

    /**
     * Take all the cards from a discarded deck and place them in this deck, shuffled.
     * Clear the old deck
     * @param discard - the deck we're getting the cards from
     */
    public void reloadDeckFromDiscard(Deck discard){
        this.addCards(discard.getCards());
        this.shuffle();
        discard.emptyDeck();
        System.out.println("Ran out of cards, creating new deck from discard pile & shuffling deck.");
    }
    /**
     * Returning size of the left deck
     * @return -- size of deck */
    public int cardsLeft(){
        return deck.size();
    }

}