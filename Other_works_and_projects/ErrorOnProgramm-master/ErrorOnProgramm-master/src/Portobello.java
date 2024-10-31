import java.io.FileWriter;
import java.io.IOException;
import java.util.Arrays;
import java.util.Scanner;

public class Portobello {

    public static int indexLastName = 0;
    public static int indexFirstName = 1;
    public static int indexPatronymic = 2;
    public static int indexDateBirth = 3;
    public static int indexMobileNumber = 4;
    public static int indexGender = 5;
    public static int indexCurrent = indexGender + 1;


    public static void createUser() throws errorValidata, errorKeyInput {
        System.out.println("Enter, separated by a space: last name, first name, patronymic, dd.mm.yyyy, phone number, gender (m or f)");
        Scanner scanner = new Scanner(System.in);
        String console = scanner.nextLine().trim();
        String[] arr = console.split(" ");

        if (arr.length != 6) {
            throw new errorKeyInput(" * Error user Data");
        } else {
            System.out.println("The entry was successfully added, thanks !!!");
        }
        if (arr.length != indexCurrent) {
            throw new errorValidata(indexCurrent, arr.length);
        }
        errorGender(arr[indexGender]);
        errorDate(arr[indexDateBirth]);
        errorTelefone(arr[indexMobileNumber]);
        errorUserName(arr[indexLastName], arr[indexFirstName], arr[indexPatronymic]);

        try (FileWriter f = new FileWriter("src/log/" + arr[indexLastName], true))
        {
            f.append(console).append("\n");
        } catch (IOException e) {
            throw new errorKeyInput(" * The file is corrupted or missing");
        }
    }


    public static void errorGender(String gender) throws errorKeyInput {
        if (!gender.equals("m") && !gender.equals("f")) {
            throw new errorKeyInput("Specify the gender in the form of a letter!!!");
        }
    }


    public static void errorDate(String date) throws errorKeyInput {
        try {
            String[] ed = date.split("\\.");
            int day = Integer.parseInt(ed[0]);
            int month = Integer.parseInt(ed[1]);
            int year = Integer.parseInt(ed[2]);

            if (ed.length != 3)
                if (day < 1 || day > 32)
                    if (month < 1 || month > 13)
                        if (year < 1 || year > 9999);

        } catch (RuntimeException e) {
            throw new errorKeyInput(String.format(" * Error Date, please input correct date!!!"));
        }
    }


    public static void errorTelefone(String tel) throws errorKeyInput {
        if (tel.length() != 12) {
            throw new errorKeyInput(" * The phone number was entered incorrectly!!!");
        }
    }

    public static void errorUserName(String last, String first, String patronymic) throws errorKeyInput {
        char[] bugSimbol = {'!','@','#','$','%','^','&','*','(',')','/','*','-','+',};
        for (char c : bugSimbol) {
            if (last.indexOf((int) c) != -1 || first.indexOf((int) c) != -1 || patronymic.indexOf((int) c) != -1)
                throw new errorKeyInput(String.format(" * Invalid character values"));
        }
    }

}










