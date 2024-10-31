import jdk.jfr.Frequency;
import java.util.ArrayList;
import java.util.function.Function;

public class ToyStore {

    private ArrayList<Toy> toys;
    private ArrayList<Toy> prizeToys;

    public ToyStore(){
        toys = new ArrayList<Toy>();
        prizeToys = new ArrayList<Toy>();

    }

    public void addToy(Toy toy){
        toys.add(toy);
    }

    public void changeToyFrequency(int toyId, double newFrequency){
        for(Toy toy : toys) {
            if (toy.getId() == toyId) {
                toy.setFrequency(newFrequency);
            }
        }
    }

    public void spendRaffle(){
        prizeToys.clear();
        for (Toy toy : toys) {
            double random = Math.random() * 100;
            if (random < toy.getFrequency()) {
                prizeToys.add(toy);
            }
        }
    }

    public Toy getPrizeToy(){
        if (!prizeToys.isEmpty()) {
            Toy prizeToy = prizeToys.remove(0);
            prizeToy.setQuantity(prizeToy.getQuantity() - 1);
            return prizeToy;
        } else {
            System.out.println("***********************   Toys out   ***********************");
            return  null;
        }
    }

}
