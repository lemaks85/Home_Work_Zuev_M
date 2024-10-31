package Heroes;


import GemeSetting.coordinateHero;
import GemeSetting.shooterSet;

public class arbalester extends shooterSet {
    private static final int HEALTH = 800;
    private static final int POWER = 35;
    private static final int AGILITY = 20;
    private static final int DEFENCE = 5;
    private static final int DISTANCE = 16;
    private static final int ARROWS = 12;
    private static final int EFFECTIVE_DISTANCE = 3;


    public arbalester(String name, coordinateHero pos) {
        super(name, 3, HEALTH, POWER, AGILITY, DEFENCE, DISTANCE, ARROWS, EFFECTIVE_DISTANCE, pos);
    }

    @Override
    public String toString() {
        return String.format("[arbalester] (%s) %s { Hp->%d, Bolt->%d }", position.toString(), name, health, ammo);
    }


}