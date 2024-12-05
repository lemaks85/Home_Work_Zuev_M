// import java.util.ArrayList;
// import java.util.List;
// import java.util.NoSuchElementException;

// //import java.util.NoSuchElementException;

// public class ListAnimals <Animal> {
//     private List<Animal> animals = new ArrayList<>();

// public void addAnimal(Animal animal) {
//         animals.add(animal);
//     }





//     public boolean removeAnimal(Animal animal){ // Удалить животное из списка.
//         return animals.remove(animal);
//     }

//     public List<Animal> getAnimals(){ // Получить список животных.
//         return animals;
//     }


//     public List<Animal> getCats(){
//         return animals.stream().filter(x -> x instanceof Cat).toList(); // Список кошек.
//     }


//     public List<Animal> getDogs(){
//         return animals.stream().filter(x -> x instanceof Dog).toList(); // Список собак.
//     }

//     public List<Animal> getHamsters(){
//         return animals.stream().filter(x -> x instanceof Hamster).toList(); // Список хомяков.
//     }

//     public List<Animal> getCamels(){
//         return animals.stream().filter(x -> x instanceof Camel).toList(); // Список верблюдов.
//     }

//     public List<Animal> getDonkeys(){
//         return animals.stream().filter(x -> x instanceof Donkey).toList(); // Список ослов.
//     }

//     public List<Animal> getHorses(){
//         return animals.stream().filter(x -> x instanceof Horse).toList(); // Список хомяков.
//     }




//     public Cat findCat(String name){
//         List<Cat> cats = (List<Cat>) this.getCats();
//         Cat cat = null;

//         try {
//             cat = cats.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             cat = null;
//         }
//         return cat;
//     }


//     public Dog findDog(String name){
//         List<Dog> dogs = (List<Dog>) this.getDogs();
//         Dog dog = null;

//         try {
//             dog = dogs.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             dog = null;
//         }
//         return dog;
//     }


//     public Hamster findHamster(String name){
//         List<Hamster> hamsters = (List<Hamster>) this.getHamsters();
//         Hamster hamster = null;

//         try {
//             hamster = hamsters.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             hamster = null;
//         }
//         return hamster;
//     }

// //***************************************************************************************************************** */
//     public Camel findCamel(String name){
//         List<Camel> camels = (List<Camel>) this.getCamels();
//         Camel camel = null;

//         try {
//             camel = camels.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             camel = null;
//         }
//         return camel;
//     }


//     public Donkey findDonkey(String name){
//         List<Donkey> donkeys = (List<Donkey>) this.getDonkeys();
//         Donkey donkey = null;

//         try {
//             donkey = donkeys.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             donkey = null;
//         }
//         return donkey;
//     }


//     public Horse findHorse(String name){
//         List<Horse> horses = (List<Horse>) this.getHorses();
//         Horse horse = null;

//         try {
//             horse = horses.stream().filter(c -> c.getName().equals(name)).findFirst().get();
//         }
//         catch (NoSuchElementException ex){
//             horse = null;
//         }
//         return horse;
//     }




// }