package com.mygdx.game;

import GemeSetting.heroySet;
import GemeSetting.magicianSet;
import GemeSetting.names;
import GemeSetting.coordinateHero;
import Heroes.*;

import java.util.ArrayList;
import java.util.Comparator;
import java.util.Random;

// import static jdk.vm.ci.hotspot.riscv64.RISCV64HotSpotRegisterConfig.t1;

public class MainProgram {


    public ArrayList<heroySet> greenPersons = new ArrayList<>();
    public ArrayList<heroySet> bluePersons = new ArrayList<>();
    public ArrayList<heroySet> allPersons = new ArrayList<>();

    public MainProgram() {

        for (int count = 1; count < 11; count++) {
            int newCharacter = new Random().nextInt(4);
            switch (newCharacter) {
                case 0:
                    bluePersons.add(new magician(names.getRandomName(), new coordinateHero(1, count)));
                    break;
                case 1:
                    bluePersons.add(new outlaw(names.getRandomName(), new coordinateHero(1, count)));
                    break;
                case 2:
                    bluePersons.add(new sniper(names.getRandomName(), new coordinateHero(1, count)));
                    break;
                case 3:
                    bluePersons.add(new peasant(names.getRandomName(), new coordinateHero(1, count)));
                    break;

            }
        }

        for (int count = 1; count < 11; count++) {
            int newCharacter = new Random().nextInt(4);
            switch (newCharacter) {
                case 0:
                    greenPersons.add(new monk(names.getRandomName(), new coordinateHero(10, count)));
                    break;
                case 1:
                    greenPersons.add(new outlaw(names.getRandomName(), new coordinateHero(10, count)));
                    break;
                case 2:
                    greenPersons.add(new arbalester(names.getRandomName(), new coordinateHero(10, count)));
                    break;
                default:
            }
        }
        allPersons.addAll(bluePersons);
        allPersons.addAll(greenPersons);
        allPersons.sort(new Comparator<heroySet>() {
            @Override
            public int compare(heroySet o1, heroySet o2) {
                return o1.priority - o2.getPriority();
            }
        });
    }

    public boolean step() {
        int deadCountallPersons = 0;
        int deadCountgreenPersons = 0;
        boolean endGame = false;
        for (heroySet item : bluePersons) {
            if (bluePersons.contains(item)) {
                item.step(greenPersons, bluePersons);
            } else {
                item.step(bluePersons, greenPersons);
            }
        }
        for (heroySet item : bluePersons) {
            if (item.getHealth() <= 0) {
                deadCountallPersons += 1;
            }
            if (deadCountallPersons == bluePersons.size()) {
                System.out.println("Победила команда Green");
            }
        }
        for (heroySet item : greenPersons) {
            if (item.getHealth() <= 0) ;
            deadCountgreenPersons += 1;
        }
        if (deadCountgreenPersons == greenPersons.size()) {
            System.out.println("Победила каманда Blue");
            endGame = true;
        }
        deadCountallPersons = 0;
        deadCountgreenPersons = 0;

        return endGame;
    }
    private static boolean isLiving(ArrayList<heroySet> team) {
        for (heroySet personBase : team) {
            if (personBase.getHealth() > 0)
                return true;
        }
        return false;
    }


    public static void setDied(ArrayList<heroySet> team, int num) {
        for (heroySet p : team) {
            if (p instanceof magician || p instanceof monk)
                continue;
            p.healed(-p.getHealth());
            num--;
            if (num <= 0)
                break;
        }
    }

    public static void setManas(ArrayList<heroySet> team, int mana) {
        for (heroySet p : team) {
            if (p instanceof magician || p instanceof monk) {
                ((magicianSet) p).setMana(mana);
            }
        }
    }
}
