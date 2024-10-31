package DZ_1.GemeSetting;

import java.util.ArrayList;

public abstract class shooterSet extends heroySet {
    protected int ammo;                         // боеприпасов в наличии
    protected int maxAmmo;
    protected int level;                        // уровень (зависит от опыта и даёт увеличение урона)
    protected int effectiveDistance;            // макс. дальность эффективной стрельбы


    protected shooterSet(String name, int priority, int health, int power, int agility, int defence, int distance, int ammo, int effectiveDistance, coordinateHero pos) {
        super(name, priority, health, power, agility, defence, distance, pos);
        this.ammo = ammo;
        this.maxAmmo = ammo;
        this.effectiveDistance = effectiveDistance;
        this.level = 1;
    }


    public int getAmmo() {
        return ammo;
    }

    public int getMaxAmmo() {
        return maxAmmo;
    }

    public void setAmmo(int ammo) {
        this.ammo = Math.min(ammo, maxAmmo);
    }

    protected void shot(heroySet target) {
        ammo--;
        float dist = position.distanceTo(target.position);
        int damage = getRound(power, 10) + (power / 10) * level;
        if (dist > effectiveDistance)
            damage *= 0.5f;
        else if (dist < effectiveDistance)
            damage *= 1.2f;

        boolean critical = (this.agility / 3) >= rnd.nextInt(100);
        if (critical) {
            damage *= 2.0f;
        }
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

        if (health <= 0)
            return;

        if (ammo > 0) {
            heroySet target = this.findNearestPerson(enemies);
            if (target != null) {
                shot(target);
            }
        } else {
            history = String.format(" ждёт подвоза стрел.");
        }
    }

}