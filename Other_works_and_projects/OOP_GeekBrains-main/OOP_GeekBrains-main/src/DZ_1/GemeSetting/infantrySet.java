package DZ_1.GemeSetting;

import java.util.ArrayList;

public abstract class infantrySet extends heroySet {
    protected int level;            // уровень, увеличивается по мере опыта


    protected infantrySet(String name, int priority, int health, int power, int agility, int defence, int distance, coordinateHero pos) {
        super(name, priority, health, power, agility, defence, distance, pos);
        level = 1;
    }


    private boolean isMoved(coordinateHero pos, ArrayList<heroySet> persons) {
        for (heroySet p : persons) {
            if (p.getHealth() > 0 && p.position.equal(pos))
                return false;
        }
        return true;
    }

    private void move(heroySet target, ArrayList<heroySet> friends) {
        int[] px = {1, 0, -1, 0};       // координаты возможных ходов (вправо, вниз, влево, вверх)
        int[] py = {0, 1, 0, -1};

        // ищем кратчайший возможный ход в сторону противника
        coordinateHero newPos = new coordinateHero(position.getX(), position.getY());
        int minIdx = -1;
        float minDist = Float.MAX_VALUE;
        for (int i = 0; i < 4; i++) {
            newPos.setXY(position.getX() + px[i], position.getY() + py[i]);
            if (isMoved(newPos, friends)) {
                // сюда ходить можно, но нужно убедиться - кратчайший ли это путь?
                float dist = position.fastDistance(target.position, px[i], py[i]);
                if (dist < minDist) {
                    minIdx = i;
                    minDist = dist;
                }
            }
        }
        if (minIdx == -1.0f)
            return;

        position.increment(px[minIdx], py[minIdx]);

        history = String.format(" пошёл на (%s)", position.toString());
    }


    private void attack(heroySet target, boolean isMoved) {
        int damage = getRound(power, 10) + (power / 10) * level;
        boolean critical = (this.agility / 3) >= rnd.nextInt(100);
        if (critical) {
            damage *= 2.0f;
        }
        if (isMoved)
            damage /= 2;                        // удар с хода

        int res = target.getDamage(damage);
        history = String.format(" атаковал %s ", target);
        if (res == 0) {
            history += "но он увернулся!";
        } else {
            history += "и нанёс ";
            if (critical) {
                history += "критический ";
            }
            history += "урон в " + res;
        }
    }

    @Override
    public void step(ArrayList<heroySet> enemies, ArrayList<heroySet> friends) {
        history = "";
        heroySet target = this.findNearestPerson(enemies);
        if (health <= 0 || target == null)
            return;

        if (position.distanceTo(target.position) < 1.5f) {
            // бьём
            attack(target, false);
        } else {
            move(target, friends);
            if (position.distanceTo(target.position) < 1.5f) {
                // бьём с ходу, с меньшей силой
                attack(target, true);
            }
        }

    }
}