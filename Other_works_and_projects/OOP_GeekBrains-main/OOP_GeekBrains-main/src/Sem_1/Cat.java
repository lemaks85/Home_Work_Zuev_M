package Sem_1;
import java.awt.*;

public class Cat {
    String name;
    int age;
    Color color;
    public Cat(String name, int age){
        this.name = name;
        this.age = age;
        color = new Color(Color.GRAY.getRGB());

    }
    public String getName(){return "My name is " + name;}

}
