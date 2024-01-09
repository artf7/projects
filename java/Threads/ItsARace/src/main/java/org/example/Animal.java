package org.example;

public class Animal extends Thread {
    public String getSpecies() {
        return species;
    }

    public void setSpecies(String species) {
        this.species = species;
    }

    private String species;

    public int getDistance() {
        return distance;
    }

    public void setDistance(int distance) {
        this.distance = distance;
    }

    private int distance;

    public int getTopSpeed() {
        return TopSpeed;
    }

    public void setTopSpeed(int topSpeed) {
        TopSpeed = topSpeed;
    }

    private int TopSpeed;

    public Animal(String species, int topSpeed){
        this.species = species;

    }
    @Override
    public void run(){
        for (int i = 0; i < 10; i++){
            System.out.println("Now go: " + this.species);
            try{
                Thread.sleep(1000);
            }catch(Exception e){
                throw new RuntimeException(e);
            }
        }
    }



}
