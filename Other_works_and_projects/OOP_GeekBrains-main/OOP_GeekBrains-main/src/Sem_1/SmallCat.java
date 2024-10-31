package Sem_1;

public class SmallCat extends Cat {
    int size;

    public SmallCat(String name, int age) {
        super(name, age);
    }

    @Override
    public String getName() {
        return name + "is small cat!";
    }
}
