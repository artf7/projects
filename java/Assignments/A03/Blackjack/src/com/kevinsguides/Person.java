package com.kevinsguides;
/**
 * Used for logic between the dealer and player
 */
public abstract class Person {

    private Hand hand;
    private String name;

    /**
     * Create a new Person
     */
    public Person(){
        this.hand = new Hand();
        this.name = "";

    }
    /**
     * Gets hand
     * @return -- current hand
     */
    public Hand getHand(){
        return this.hand;
    }
    /**
     * Sets hand
     * @param hand
     */
    public void setHand(Hand hand){
        this.hand = hand;
    }
    /**
     * Gets name of player/dealer
     * @return -- name of player/dealer
     */
    public String getName(){
        return this.name;
    }
    /**
     * Sets name of player/dealer
     * @param  name
     */
    public void setName(String name){
        this.name = name;
    }

    /**
     * Prints a formatted version of the Person's hand
     */
    public void printHand(){
        System.out.println(this.name + "'s hand looks like this:");
        System.out.println(this.hand + " Valued at: " + this.hand.calculatedValue());
    }
    /**
     * Check if Person has 21
     * @return True if the Person has 21
     */
    public boolean hasBlackjack(){
        if(this.getHand().calculatedValue() == 21){
            return true;
        }
        else{
            return false;
        }
    }
    /**
     * Player takes a card from the deck
     * @param deck - the deck we are drawing from
     * @param discard - the deck we discard cards to, in case we need to reshuffle this when we run out of deck cards
     */
    public void hit(Deck deck, Deck discard){

        //If there's no cards left in the deck
        if (!deck.hasCards()) {
            deck.reloadDeckFromDiscard(discard);
        }
        this.hand.takeCardFromDeck(deck);
        System.out.println(this.name + " gets a card");
        this.printHand();

    }

}