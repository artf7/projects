 public class Athlete {
    private String name;
    private double weight;
    private double height;
// creating constructor accessible only in this current class
 public Athlete(){
        this.name = "Player McPlayer";
        this.weight = 75;
        this.height = 180;
    }
//create constructor that allow each class use it
    public Athlete(String name, double weight, double height){
         this.name = name;
         this.weight = weight;
         this.height = height;
    }
//creating getters and setters for the name
     public String getName() {
         return name;
     }

     public void setName(String name) {
         this.name = name;
     }
     //creating getters and setters for the weight
     public double getWeight() {
         return weight;
     }

     public void setWeight(double weight) {
         this.weight = weight;
     }
     //creating getters and setters for the height
     public double getHeight() {
         return height;
     }

     public void setHeight(double height) {
         this.height = height;
     }
    //display function
    public void display(){
        System.out.println("Name: " + name);
        System.out.println("Weight: " + weight +", height:  "+  height);
    }
}
