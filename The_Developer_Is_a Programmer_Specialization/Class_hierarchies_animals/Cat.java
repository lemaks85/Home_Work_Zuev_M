import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

public class Cat implements Animals{
    private String name;
    private String dataBirth;
    private List<String> commands;

    public Cat(String name, String dataBirth, List<String> commands) {
        this.name = name;
        this.dataBirth = dataBirth;
        this.commands = commands;
    }

    public Cat(){
        this("", "", new ArrayList<>());
    }





`
    @Override
    public String getName() {
        return this.name;
    }

    @Override
    public void setName(String name) {
        this.name = name;
    }

    @Override
    public void setDataBirth(String date) {
        this.dataBirth = date;
    }

    @Override
    public String getDataBirth() {
        return this.dataBirth;
    }

    @Override
    public void addCommand(String newCommand) {
        if (commands.stream().filter(x -> x.equals(newCommand)).findFirst().isEmpty()) {
        return;
        }
        commands.add(newCommand);
    }

    @Override
    public void removeCommand(String command) {
        commands.remove(command);
    }

    @Override
    public List<String> getCommandList() {
        return commands;
    }

    @Override
    public int getCommandCount() {
        return commands.size();
    }




@Override
    public String toString() {
        StringBuilder builder = new StringBuilder();
        builder.append("Кот ")
        .append(name)
        .append(" ")
        .append(dataBirth);

        return builder.toString();
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Cat cat = (Cat) o;
        return Objects.equals(name, cat.name);
    }

    @Override
    public int hashCode() {
        return Objects.hash(name);
    }




}