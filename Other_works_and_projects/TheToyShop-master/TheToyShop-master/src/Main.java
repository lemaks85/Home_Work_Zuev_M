
public class Main {
    public static void main(String[] args) {

        ToyStore store = new ToyStore();

        Toy toy1 =  new Toy(1, "Bear brown", 10, 20);
        Toy toy2 =  new Toy(2, "Bear white", 200, 40);
        Toy toy3 =  new Toy(3, "Candy purple", 300, 30);
        Toy toy4 =  new Toy(4, "Candy green", 50, 20);
        Toy toy5 =  new Toy(5, "Toy car sedan", 100, 50);
        Toy toy6 =  new Toy(6, "Rabbit pink", 200, 40);

        store.addToy(toy1);
        store.addToy(toy2);
        store.addToy(toy3);
        store.addToy(toy4);
        store.addToy(toy5);
        store.addToy(toy6);

        store.changeToyFrequency(1, 30);

        store.spendRaffle();

        Toy prizeToy = store.getPrizeToy();
        if (prizeToy != null) {
            System.out.println("You got a toy: " + prizeToy.getName());
        }



    }
}