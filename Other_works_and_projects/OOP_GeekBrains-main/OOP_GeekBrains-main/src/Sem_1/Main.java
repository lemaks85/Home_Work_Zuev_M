package Sem_1;

import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
//        Cat cat = new Cat();
//        SmallCat cat1 = new SmallCat();
//
//
//        System.out.println(cat.getName());
//        System.out.printf(cat1.getName());
        ArrayList<Cat> cats = new ArrayList<>();
        cats.add(new Cat("Persik",12));
        cats.add(new SmallCat("Vasiliy", 4));

        cats.forEach(n -> System.out.println(n.getName()));


    }
}