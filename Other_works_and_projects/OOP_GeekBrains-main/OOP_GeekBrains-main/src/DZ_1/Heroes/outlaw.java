package DZ_1.Heroes;


import DZ_1.GemeSetting.coordinateHero;
import DZ_1.GemeSetting.infantrySet;


public class outlaw extends infantrySet {
    private static final int HEALTH = 1000;
    private static final int POWER = 70;
    private static final int AGILITY = 60;
    private static final int DEFENCE = 10;
    private static final int DISTANCE = 1;


    public outlaw(String name, coordinateHero pos) {
        super(name, 2, HEALTH, POWER, AGILITY, DEFENCE, DISTANCE, pos);
    }


    @Override
    public String toString() {
        return String.format("[outlaw] (%s) %s { Hp->%d }", position.toString(), name, health);
    }


}