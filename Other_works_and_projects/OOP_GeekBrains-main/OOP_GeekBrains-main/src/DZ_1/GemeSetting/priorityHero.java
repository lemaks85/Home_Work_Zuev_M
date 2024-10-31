package DZ_1.GemeSetting;

import java.util.Comparator;


public class priorityHero implements Comparator<heroySet> {


    @Override
    public int compare(heroySet o1, heroySet o2) {
        return Integer.compare(o2.priority, o1.priority);
    }
}
