public class Basketball extends Athlete{
    private  int gamesPlayed;
    private int shotsMade;
    private int shotsAttempted;

    //default constructor
    public Basketball() {
        super();
        gamesPlayed = 60;
        shotsMade = 12;
        shotsAttempted = 25;
    }

    // secondary constructor
    public Basketball(String name, double weight, double height, int gamesPlayed, int shotsMade, int shotsAttempted) {
        super(name, weight, height);
        this.gamesPlayed = gamesPlayed;
        this.shotsMade = shotsMade;
        this.shotsAttempted = shotsAttempted;
    }

    // Getter and Setter for gamesPlayed
    public int getGamesPlayed() {
        return gamesPlayed;
    }
    public void setGamesPlayed(int gamesPlayed) {
        this.gamesPlayed = gamesPlayed;
    }

    // Getter and Setter for shotsMade
    public int getShotsMade() {
        return shotsMade;
    }

    public void setShotsMade(int shotsMade) {
        this.shotsMade = shotsMade;
    }

    // Getter and Setter for shotsAttempted
    public int getShotsAttempted() {
        return shotsAttempted;
    }

    public void setShotsAttempted(int shotsAttempted) {
        this.shotsAttempted = shotsAttempted;
    }

    // Display function
    public void display() {
        super.display();
        System.out.println("Games played: " + gamesPlayed);
        System.out.println("Shots made: " + shotsMade);
        System.out.println("Shots attempted: " + shotsAttempted);
    }
    // Calculate rating function
    public void calculateRating() {
        double percentage = ((double)shotsMade / (double)shotsAttempted) * 100;
        System.out.println("Made shot percentage: " + percentage + "%");
    }

}
