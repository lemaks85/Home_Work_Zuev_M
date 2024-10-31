package DZ_1.GemeSetting;

import java.util.LinkedList.*;
import java.util.ArrayList;
import java.util.stream.Collectors;


public abstract class magicianSet extends heroySet {
    private static final int COST_HEALED = 10;  // кол-во маны за процедуру лечения
    private static final int MANA_RECOVERY = 5; // кол-во восстанавливаемой маны за ход ожидания
    private static final int MANA_TO_HEAL = 3;  // коэфф. конвертации маны в здоровье

    protected int mana;                     // мана для волшебства
    protected int maxMana;
    private int resurrectMana;              // необходимое кол-во маны для воскрешения
    private heroySet respawnTarget;       // наша цель на воскрешение


    protected magicianSet(String name, int priority, int health, int power, int agility, int defence, int distance, int mana, coordinateHero pos) {
        super(name, priority, health, power, agility, defence, distance, pos);
        this.mana = mana;
        this.maxMana = mana;
        this.resurrectMana = mana / 2;
        this.respawnTarget = null;
    }

    public void setMana(int mana) {
        this.mana = mana;
    }

    @Override
    public void step(ArrayList<heroySet> enemies, ArrayList<heroySet> friends) {
        history = "";

        if (health <= 0)
            return;
        mana = Math.min(mana + MANA_RECOVERY, maxMana);

        if (isWaitResurrection(friends))
            return;

        if (getNumOfDead(friends, mana >= resurrectMana) > 3) {
            beginResurrection(friends);     // воскрешаем
        } else {
            doHeal(friends);                // лечим
        }
    }

    private void beginResurrection(ArrayList<heroySet> friends) {
        heroySet p = null;
        int max = -1;
        for (heroySet person : friends) {
            if (person.getHealth() < 0 && mana >= resurrectMana) {
                p = person;                 // нашли ожидающего, он у нас в приоритете
                break;
            }
            if (person.getHealth() == 0 && max < person.getPriority()) {
                p = person;
                max = person.getPriority();
            }
        }

        if (p != null) {
            respawnTarget = p;
            if (mana >= resurrectMana) {
                doResurrection(p);
            } else {
                respawnTarget.health = -1;
                history = String.format(" восстанавливает ману для воскрешения %s", respawnTarget);
            }
        }
    }


    private boolean isWaitResurrection(ArrayList<heroySet> friends) {
        if (respawnTarget == null || respawnTarget.getHealth() >= 0) {
            respawnTarget = null;               // некого воскрешать (или уже воскресили)
            return false;
        }
        if (mana >= resurrectMana) {
            doResurrection(respawnTarget);      // воскрешаем
        } else {
            history = String.format(" восстанавливает ману для воскрешения %s", respawnTarget);
        }
        return true;
    }


    private void doResurrection(heroySet person) {
        if (respawnTarget.getHealth() <= 0) {
            person.healed(respawnTarget.getMaxHealth());
            mana -= resurrectMana;
            history = String.format(" воскресил %s", respawnTarget);
        } else {
            history = String.format(" не нашел погибшего для воскрешения!");
        }
        respawnTarget = null;
    }


    private void doHeal(ArrayList<heroySet> friends) {
        int min = Integer.MAX_VALUE;
        heroySet p = null;
        for (heroySet friend : friends) {
            int hp = friend.getHealth() * 100 / friend.getMaxHealth();
            if (hp > 0 && hp < min) {
                min = hp;
                p = friend;
            }
        }
        if (p != null && min < 100) {
            int hp = p.getHealth();
            int needMana = (p.getMaxHealth() - hp) / MANA_TO_HEAL;      // кол-во маны для полного лечения
            int n = Math.min(mana, Math.min(needMana, COST_HEALED));
            mana -= n;
            p.healed(n * MANA_TO_HEAL);
            history = String.format(" вылечил %s на %d пунктов здоровья", p, p.getHealth() - hp);
        } else {
            history = String.format(" пропускает ход.");
        }
    }


    private int getNumOfDead(ArrayList<heroySet> friends, boolean isReservation) {
//        return (int) friends.stream().filter(n -> n.getHealth() <= 0).count();
        int count = 0;
        for (heroySet friend : friends) {
            if (friend.getHealth() == 0)
                count++;
            else if (friend.getHealth() < 0 && isReservation)
                count++;
        }
        return count;
    }


    @Override
    public int getDamage(int damage) {
        int hp = super.getDamage(damage);
        if (health <= 0) {
            if (respawnTarget != null) {
                if (respawnTarget.getHealth() < 0)
                    respawnTarget.health = 0;
                respawnTarget = null;
            }
        }
        return hp;
    }
}