package org.example;

import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {

        List<Animal> animalList = animalList = new ArrayList<>();
        animalList.add(new Animal("cheetah", 112));
        animalList.add(new Animal("ostrich", 70));
        animalList.add(new Animal("pronghorn", 97));
        animalList.add(new Animal("golden eagle", 322));

        for (Animal a : animalList) {
            System.out.println("Go " + a.getSpecies() + " Go!");
            a.start();
        }
    }

}