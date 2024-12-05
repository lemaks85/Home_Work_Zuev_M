// import java.util.ArrayList;
// import java.util.HashMap;
// import java.util.List;
// import java.util.Map;
// import java.util.logging.Logger;

// public class ProgrammMenu {


//     private final ListAnimals<Object> listanimals = new ListAnimals<>();
//     private final View view = new View();

    
//     private final Map<String, String> menuMain = new HashMap<String, String>() {{ // главное меню
//         put("1", "Add Animal");
//         put("2", "Add Command");
//         put("3", "View List");
//         put("4", "View Commands");
//         put("5", "View List Animals");
//         put("0", "Exit");
//     }};
  

//     private final Map<String, String> menuAnimal = new HashMap<>() {{ // меню второго уровня
//         put("1", "Cat");
//         put("2", "Dog");
//         put("3", "Hamster");
//         put("4", "Camel");
//         put("5", "Donkey");
//         put("6", "Horse");
//         put("0", "Cancel");
//     }};

//     private final Map<String, String> menuYesNo = new HashMap<>(){{
//         put("1","YES");
//         put("0", "NO");
//     }};

//     private enum ANIMALS {CAT, DOG, HAMSTER, CAMEL, DONKEY, HORSE};

//     public void Run() throws Exception {
//         String menu;
//         do {
//             menu = getOperation();

//             switch (menu) {
//                 case "11" -> addAnimal(ANIMALS.CAT);
//                 case "12" -> addAnimal(ANIMALS.DOG);
//                 case "13" -> addAnimal(ANIMALS.HAMSTER);
//                 case "14" -> addAnimal(ANIMALS.CAMEL);
//                 case "15" -> addAnimal(ANIMALS.DONKEY);
//                 case "16" -> addAnimal(ANIMALS.HORSE);
//                 case "21" -> addCommand(ANIMALS.CAT);
//                 case "22" -> addCommand(ANIMALS.DOG);
//                 case "23" -> addCommand(ANIMALS.HAMSTER);
//                 case "24" -> addCommand(ANIMALS.CAMEL);
//                 case "25" -> addCommand(ANIMALS.DONKEY);
//                 case "26" -> addCommand(ANIMALS.HORSE);
//                 case "31" -> showAnimals(ANIMALS.CAT);
//                 case "32" -> showAnimals(ANIMALS.DOG);
//                 case "33" -> showAnimals(ANIMALS.HAMSTER);
//                 case "34" -> showAnimals(ANIMALS.CAMEL);
//                 case "35" -> showAnimals(ANIMALS.DONKEY);
//                 case "36" -> showAnimals(ANIMALS.HORSE);
//                 case "41" -> showCommands(ANIMALS.CAT);
//                 case "42" -> showCommands(ANIMALS.DOG);
//                 case "43" -> showCommands(ANIMALS.HAMSTER);
//                 case "44" -> showCommands(ANIMALS.CAMEL);
//                 case "45" -> showCommands(ANIMALS.DONKEY);
//                 case "46" -> showCommands(ANIMALS.HORSE);
//                 case "5" -> showCountAnimals();
//             }
//         } while (!(menu.isEmpty() || menu.equals("0")));
//     }

//     private void showCountAnimals() throws Exception{
//         try(AnimalCounter counter = new AnimalCounter()){
//             Logger.getAnonymousLogger().info(counter.getCount().toString());
//         }
//     }

//     private void showCommands(ANIMALS animal){
//         String name = view.getString("Commands animal: ");// Отобразить список команд животного

//         Object o = null;

//         switch (animal){
//             case CAT -> o = listanimals.findCat(name);
//             case DOG -> o = listanimals.findDog(name);
//             case HAMSTER -> o = listanimals.findHamster(name);
//             case CAMEL -> o = listanimals.findCamel(name);
//             case DONKEY -> o = listanimals.findDonkey(name);
//             case HORSE -> o = listanimals.findHorse(name);
//         }

//         if(o == null){
//             Logger.getAnonymousLogger().info("Animal DONT LIST!!!");
//             return;
//         }

//         List<String> commands = null;

//         switch (animal){
//             case CAT -> commands = ((Cat)o).getCommandList();
//             case DOG -> commands = ((Dog)o).getCommandList();
//             case HAMSTER -> commands = ((Hamster)o).getCommandList();
//             case CAMEL -> commands = ((Camel)o).getCommandList();
//             case DONKEY -> commands = ((Donkey)o).getCommandList();
//             case HORSE -> commands = ((Horse)o).getCommandList();
//         }

//         StringBuilder strCommands = new StringBuilder();
//         for (String c :commands) {
//             strCommands.append(c).append(", ");
//         }

//         Logger.getAnonymousLogger().info(strCommands.toString());
//     }

    
//     private void showAnimals(ANIMALS animal){ // Отображение списка животных
//         List<Object> animals = null;

//         switch (animal){
//             case CAT -> animals = listanimals.getCats();
//             case DOG -> animals = listanimals.getDogs();
//             case HAMSTER -> animals = listanimals.getHamsters();
//             case CAMEL -> animals = listanimals.getCamels();
//             case DONKEY -> animals = listanimals.getDonkeys();
//             case HORSE -> animals = listanimals.getHorses();
//         }

//         Logger logger = Logger.getAnonymousLogger();
//         for (Object o : animals) {
//             logger.info(o.toString());
//         }
//     }

    
//     private void addCommand(ANIMALS animal){ // Добавление команды
//         String name = view.getString("Name animal: ");
//         Object objAnimal = null;
//         switch (animal){
//             case CAT -> objAnimal = listanimals.findCat(name);
//             case DOG -> objAnimal = listanimals.findDog(name);
//             case HAMSTER -> objAnimal = listanimals.findHamster(name);
//             case CAMEL -> objAnimal = listanimals.findCamel(name);
//             case DONKEY -> objAnimal = listanimals.findDonkey(name);
//             case HORSE -> objAnimal = listanimals.findHorse(name);
//         }

//         if(objAnimal == null){
//             Logger.getAnonymousLogger().info("Animal DONT LIST!!!");
//         }
//         else{
//             String command = view.getString("New command: ");

//             switch (animal){
//                 case CAT -> ((Cat)objAnimal).addCommand(command);
//                 case DOG -> ((Dog)objAnimal).addCommand(command);
//                 case HAMSTER -> ((Hamster)objAnimal).addCommand(command);
//                 case CAMEL -> ((Camel)objAnimal).addCommand(command);
//                 case DONKEY -> ((Donkey)objAnimal).addCommand(command);
//                 case HORSE -> ((Horse)objAnimal).addCommand(command);
//             }
//         }

//     }


//     private void addAnimal(ANIMALS animal) throws Exception { // Добавленеи нового животного
//         // Счетчик
//         try(AnimalCounter counter = new AnimalCounter()){
//             counter.add();
//         }


//         String name = view.getString("Name animal: ");
//         String date = view.getString("Date Birth animal: ");
//         //String color = view.getString("Окрас: ");

//         List<String> commands = new ArrayList<>();
//         System.out.println("Add commands?");
//         String menu = view.menuShow(menuYesNo);
//         while (menu.equals("1")){
//             String command = view.getString("Command: ");
//             commands.add(command);
//             System.out.println("Continue?");
//             menu = view.menuShow(menuYesNo);
//         }

//         switch (animal){
//             case CAT -> listanimals.addAnimal(new Cat(name, date, commands));
//             case DOG -> listanimals.addAnimal(new Dog(name, date, commands));
//             case HAMSTER -> listanimals.addAnimal(new Hamster(name, date, commands));
//             case CAMEL -> listanimals.addAnimal(new Camel(name, date, commands));
//             case DONKEY -> listanimals.addAnimal(new Donkey(name, date, commands));
//             case HORSE -> listanimals.addAnimal(new Horse(name, date, commands));
//         }
//     }


//     private String getOperation() { // Выбор операции в меню программы
//         String menu = view.menuShow(menuMain);
//         if (!menu.isEmpty() && !menu.equals("0") && !menu.equals("5")) {
//             menu += view.menuShow(menuAnimal);
//         }

//         return menu;
//     }





// }