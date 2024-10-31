package DZ_1.Heroes;

import DZ_1.GemeSetting.coordinateHero;
import DZ_1.GemeSetting.heroySet;
import DZ_1.GemeSetting.shooterSet;

import java.util.ArrayList;

public class peasant extends heroySet {
    private static final int HEALTH = 500;
    private static final int POWER = 30;
    private static final int AGILITY = 30;
    private static final int DEFENCE = 0;
    private static final int DISTANCE = 1;
    private static final int FULL_BAG = 240;

    private int bag;


    public peasant(String name, coordinateHero pos) {
        super(name, 0, HEALTH, POWER, AGILITY, DEFENCE, DISTANCE, pos);
        bag = FULL_BAG;
    }


    @Override
    public void step(ArrayList<heroySet> enemies, ArrayList<heroySet> friends) {
        history = "";

        if (health <= 0 || bag <= 0)
            return;
        shooterSet p = (shooterSet) getShooter(friends);
        if (p != null) {
            if (p.getAmmo() < p.getMaxAmmo()) {
                p.setAmmo(p.getAmmo() + 1);
                bag--;
                history = String.format(" дал стрелу %s", p);
            }
        }
    }


    private heroySet getShooter(ArrayList<heroySet> friends) {
        heroySet p = null;
        int min = Integer.MAX_VALUE;

        for (heroySet friend : friends) {
            if (friend.getHealth() > 0 && friend instanceof shooterSet) {
                if (min > ((shooterSet) friend).getAmmo()) {
                    min = ((shooterSet) friend).getAmmo();
                    p = friend;
                }
            }
        }
        return p;
    }

    @Override
    public String toString() {
        return String.format("[peasant] (%s) %s { Hp->%d, Bolt->%d }", position.toString(), name, health, bag);
    }
}