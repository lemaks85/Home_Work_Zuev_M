import java.util.List;
public interface Animals {


    String getName(); // Получить имя животного
    void setName(String name); // Установить имя животного

    void setDataBirth(String date); //Установить дату животного
    String getDataBirth(); // Получить дату животного

    void addCommand(String newCommand); // Новая команда животного
    void removeCommand(String command); // Удаление команды животного

    List<String> getCommandList(); // Получить список команд животного
    int getCommandCount();// Получить кооличество комманд животного


}
