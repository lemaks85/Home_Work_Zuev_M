import java.util.Map;
import java.util.Scanner;

public class View {

public String menuShow(Map<String, String> menu) {
        Scanner scanner = new Scanner(System.in);
        String answear;

        for (String s : menu.keySet()) {
            System.out.println(s + " - " + menu.get(s));
        }
        System.out.print("> ");

        answear = scanner.next();

        if(!menu.containsKey(answear)){
            answear = "";
        }

        return answear;
    }

   
    public int getInteger(String message){
        Scanner scanner = new Scanner(System.in);

        System.out.print(message);
        return scanner.nextInt();
    }

   
    public String getString(String message){
        Scanner scanner = new Scanner(System.in);

        System.out.print(message);
        return scanner.next();
    }





    
}
