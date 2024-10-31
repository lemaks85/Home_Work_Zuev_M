package Heroes;


import GemeSetting.coordinateHero;
import GemeSetting.magicianSet;

public class magician extends magicianSet {

    private static final int HEALTH = 600;
    private static final int POWER = 40;
    private static final int AGILITY = 10;
    private static final int DEFENCE = 0;
    private static final int DISTANCE = 8;
    private static final int MANA = 100;


    public magician(String name, coordinateHero pos) {
        super(name, 1, HEALTH, POWER, AGILITY, DEFENCE, DISTANCE, MANA, pos);
    }


    @Override
    public String toString() {
        return String.format("[magician] (%s) %s { Hp->%d, Mana->%d }", position.toString(), name, health, mana);
    }


}