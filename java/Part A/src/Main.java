public class Main {
    public static void main(String[] args) {
        //creating object with default values
        Athlete person = new Athlete();
        //printing out default values
        //name
        System.out.println(person.getName());
        //weight
        System.out.println(person.getWeight());
        //height
        System.out.println(person.getHeight());
        //setting name
        person.setName("C");
        //setting height
        person.setHeight(199);
        //setting setting weight
        person.setWeight(97);
        //checking are all values had been applied
        person.display();
        //creating object, using constructor
        Athlete person1 = new Athlete("A",69,180);
        person1.display();


        //creating object of Basketball class
        //using default constructor
        Basketball b_player = new Basketball();
        //display default values
        b_player.display();
        //using the getters
        //get played games
        System.out.println(b_player.getGamesPlayed());
        // get shots attempted
        System.out.println(b_player.getShotsAttempted());
        // get shots made
        System.out.println(b_player.getShotsMade());

        //using the setters
        //set the number of shots that was made
        b_player.setShotsMade(10);
        //set the number of attempted shots
        b_player.setShotsAttempted(15);
        //set the number of game
        b_player.setGamesPlayed(65);
        //checking are all values had been applied
        b_player.display();


        //secondary constructor
        Basketball custom_player = new Basketball("Person",86,197,125,45,50);
        //displaying custom player
        custom_player.display();

        //calculate rating function
        custom_player.calculateRating();

    }
}