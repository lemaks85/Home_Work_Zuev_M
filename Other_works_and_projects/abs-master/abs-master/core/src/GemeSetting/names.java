package GemeSetting;

import java.util.Random;

public class names {
    private static Random rnd;
    private static String[] names = {"Wolfer", "Blade", "Zobenos", "Foedus", "Daspecori", "Indanaur", "Jandasan","Murray","Count Dracula","Blooby","wolfych"};

    static {
        rnd = new Random();
    }

    public  String getName(int index) {
        if (index >= names.length)
            index = 0;
        return names[index];
    }

    public static String getRandomName() {
        return names[rnd.nextInt(names.length)];
    }
}