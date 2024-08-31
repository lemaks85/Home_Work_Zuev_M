import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

public class Camel{
    private String name;
    private String dateBirth;
    private List<String> commands;

    public Camel(String name, String dateBirth, List<String> commands) {
        this.name = name;
        this.dateBirth = dateBirth;
        this.commands = commands;
    }

    public Camel() {
        this("name", "dateBirth", new ArrayList<>());
    }
}