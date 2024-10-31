//package Sem_2;
//
//import javax.swing.text.Position;
//import java.util.ArrayList;
//import java.util.List;
//
//public class Go {
//    protected int x, y;
//    public Go(int x, int y){
//        this.x = x;
//        this.y = y;
//
//    }
//    public List<Integer> getGo(){
//        List<Integer> list = new ArrayList<>();
//        list.add(x);
//        list.add(y);
//        return list;
//    }
//    public int getX(){
//        return x;
//
//    }
//    public  int getY(){
//        return y;
//    }
//    public double getDistance(Position target){
//        double targetDistance  = Math.sqrt(Math.pow(target.x - x, 2) + (Math.pow(target.y - y, 2)));
//        return targetDistance;
//    }
//}
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
////import units.*;
////
////        import java.util.ArrayList;
////import java.util.Random;
////
////public class MyFirstGame {
////    public static void main(String[] args) {
////        hollyTeam = teamCreator(0, 0);
////        darkTeam = teamCreator(0, 3);
////        System.out.println(hollyTeam);
////        System.out.println();
////        System.out.println(darkTeam);
////    }
////    public static ArrayList<Person> hollyTeam;
////    public static ArrayList<Person> darkTeam;
////
////    private static ArrayList<Person> teamCreator(int val, int numm){
////        ArrayList<Person> team = new ArrayList<Person>();
////        int teamCount = 10;
////        for (int i = 1; i < teamCount + 1; i++){
////            switch (new Random().nextInt(4) + numm){
////                case 0:
////                    team.add(new Crossbowman(fillName(), val));
////                    break;
////                case 1:
////                    team.add(new Monk(fillName(), val));
////                    break;
////                case 3:
////                    team.add(new Peasant(fillName(), val));
////                    break;
////                case 2:
////                    team.add(new Pikeman(fillName(), val));
////                    break;
////                case 4:
////                    team.add(new Sniper(fillName(), val));
////                    break;
////                case 5:
////                    team.add(new Wizard(fillName(), val));
////                    break;
////                case 6:
////                    team.add(new Robber(fillName(), val));
////                    break;
////            }
////        }
////        return team;
////    }
////    private static String fillName(){
////        return String.valueOf(Names.values()[new Random().nextInt(Names.values().length - 1)]);
////    }
////
////
////}