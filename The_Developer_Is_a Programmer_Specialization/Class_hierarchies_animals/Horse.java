// import java.util.ArrayList;
// import java.util.List;
// import java.util.Objects;

// public class Horse implements Animals{
//     private String name;
//     private String dateBirth;
//     private List<String> commands;

//     public Horse (String name, String dateBirth, List<String> commands) {
//         this.name = name;
//         this.dateBirth = dateBirth;
//         this.commands = commands;
//     }

//     public Horse(){
//         this("name", "dateBirth", new ArrayList<>());
//     }



//     //*********************************************************************************** */

//     @Override
//     public String getName() {
//         return this.name;
//     }

//     @Override
//     public void setName(String name) {
//         this.name = name;
//     }

//     @Override
//     public void setDataBirth(String date) {
//         this.dateBirth = date;
//     }

//     @Override
//     public String getDataBirth() {
//         return this.dateBirth;
//     }

//     @Override
//     public void addCommand(String newCommand) {
//         if (commands.stream().filter(x -> x.equals(newCommand)).findFirst().isEmpty()) {
//         return;
//         }
//         commands.add(newCommand);
//     }

//     @Override
//     public void removeCommand(String command) {
//         commands.remove(command);
//     }

//     @Override
//     public List<String> getCommandList() {
//         return commands;
//     }

//     @Override
//     public int getCommandCount() {
//         return commands.size();
//     }

// //*************************************************************************************** */


// @Override
//     public String toString() {
//         StringBuilder builder = new StringBuilder();
//         builder.append("HORSE ")
//         .append(name)
//         .append(" ")
//         .append(dateBirth);

//         return builder.toString();
//     }

//     @Override
//     public boolean equals(Object o) {
//         if (this == o) return true;
//         if (o == null || getClass() != o.getClass()) return false;
//         Horse horse = (Horse) o;
//         return Objects.equals(name, horse.name);
//     }

//     @Override
//     public int hashCode() {
//         return Objects.hash(name);
//     }
// }