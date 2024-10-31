package GemeSetting;

import java.util.ArrayList;

public interface moveHero {

    void step(ArrayList<heroySet> enemies, ArrayList<heroySet> friends);

    String getInfo();
}
