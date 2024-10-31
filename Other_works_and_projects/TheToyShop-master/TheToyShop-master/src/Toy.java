public class Toy {
    private final int id;
    private final String name;
    private int quantity;               // Колличество
    private double frequency;           // Частота


    public Toy(int id, String name, int quantity, double frequency){
        this.id = id;
        this.name = name;
        this.quantity = quantity;
        this.frequency = frequency;
    }


    public int  getId(){
        return id;
    }

    public String getName(){
        return name;
    }

    public int getQuantity(){
        return quantity;
    }

    public double getFrequency(){
        return frequency;
    }

    public void setQuantity(int quantity){
        this.quantity = quantity;
    }

    public void setFrequency(double frequency){
        this.frequency = frequency;
    }

}
