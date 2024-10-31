package DZ_1.StartGeme;

import DZ_1.GemeSetting.*;
import DZ_1.Heroes.*;

import java.util.ArrayList;
import java.util.Scanner;
import java.util.Random;


public class main {
    public static ArrayList<heroySet> greenPersons = new ArrayList<>();
    public static ArrayList<heroySet> bluePersons = new ArrayList<>();
    public static ArrayList<heroySet> allPersons = new ArrayList<>();

    public static void main(String[] args) {
        createTeam(greenPersons, 10, 0);
        createTeam(bluePersons, 10, 3);
        allPersons.addAll(bluePersons);
        allPersons.addAll(greenPersons);
        allPersons.sort((o1, o2) -> Integer.compare(o2.priority, o1.priority));


        Scanner in = new Scanner(System.in);
        while (true) {
            view.view();
            for (heroySet p : allPersons) {
                if (greenPersons.contains(p)) {
                    p.step(bluePersons, greenPersons);

                } else {
                    p.step(greenPersons, bluePersons);
                }
            }
            in.nextLine();
            if (!isLiving(greenPersons)) {
                System.out.println("Blue team wins!");
                break;
            }
            if (!isLiving(bluePersons)) {
                System.out.println("Green wins!");
                break;
            }

        }

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

    public static void createTeam(ArrayList<heroySet> team, int num, int start) {
        Random rnd = new Random();
        int cy = 0;
        while (num-- > 0) {
            int n = start + rnd.nextInt(4);
            switch (n) {
                case 0:
                    team.add(new arbalester(names.getRandomName(), new coordinateHero(9, cy)));
                    break;
                case 1:
                    team.add(new spearmen(names.getRandomName(), new coordinateHero(9, cy)));
                    break;
                case 2:
                    team.add(new magician(names.getRandomName(), new coordinateHero(9, cy)));
                    break;
                case 3:
                    team.add(new peasant(names.getRandomName(), new coordinateHero((3 - start) * 3, cy)));
                    break;
                case 4:
                    team.add(new sniper(names.getRandomName(), new coordinateHero(0, cy)));
                    break;
                case 5:
                    team.add(new monk(names.getRandomName(), new coordinateHero(0, cy)));
                    break;
                case 6:
                    team.add(new outlaw(names.getRandomName(), new coordinateHero(0, cy)));
                    break;
                default:
                    System.out.println("ERROR!");
            }
            cy++;
        }
    }
}

