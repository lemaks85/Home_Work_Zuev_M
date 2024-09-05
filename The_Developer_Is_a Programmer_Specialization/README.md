# Итоговая контрольная работа.

## По блоку Разработчик — Программист. Специализация
```
Выполнил:

Студент Geekbrains, группа № 6014
Зуев Максим Мизайлович
```

**Информация о проекте:**

> Необходимо организовать систему учета для питомника в котором живут домашние и Pack animals.

**Как сдавать проект**

>Для сдачи проекта необходимо создать отдельный общедоступный репозиторий (Github, gitlub, или Bitbucket). Разработку вести в этом репозитории, использовать пул реквесты на изменения. Программа должна запускаться и работать, ошибок при выполнении программы быть не должно. Программа, может использоваться в различных системах, поэтому необходимо разработать класс в виде конструктора.
---
### Задание
```
Операционные системы и виртуализация (Linux)
```

1. Использование команды cat в Linux
   - Создать два текстовых файла: "Pets"(Домашние животные) и "Pack animals"(вьючные животные), используя команду `cat` в терминале Linux. В первом файле перечислить собак, кошек и хомяков. Во втором — лошадей,  верблюдов и ослов.
   - Объединить содержимое этих двух файлов в один и просмотреть его  содержимое.
   - Переименовать получившийся файл в "Human Friends"

---
![](./ScreenShots/Screenshot%202024-08-26%20214332.png)
![](./ScreenShots/Screenshot%202024-08-26%20215240.png)
![](./ScreenShots/Screenshot%202024-08-26%20215540.png)
![](./ScreenShots/Screenshot%202024-08-26%20220457.png)
---
2. Работа с директориями в Linux
   - Создать новую директорию и переместить туда файл "Human_Friends".
---
![](./ScreenShots/Screenshot%202024-08-26%20222031.png)
![](./ScreenShots/Screenshot%202024-08-26%20222737.png)
![](./ScreenShots/Screenshot%202024-08-26%20222913.png)
---
3. Работа с MySQL в Linux. “Установить MySQL на вашу вычислительную машину ”
   - Подключить дополнительный репозиторий MySQL и установить один из пакетов из этого репозитория.
---
![](./ScreenShots/Screenshot%202024-08-26%20224846.png)
![](./ScreenShots/Screenshot%202024-08-26%20225421.png)
![](./ScreenShots/Screenshot%202024-08-26%20225231.png)
![](./ScreenShots/Screenshot%202024-08-26%20230054.png)
---

4. Управление deb-пакетами
   - Установить и затем удалить deb-пакет, используя команду `dpkg`.
---
   ![](./ScreenShots/Screenshot%202024-08-26%20232505.png)
   ![](./ScreenShots/Screenshot%202024-08-26%20233130.png)
---
 5. История команд в терминале Ubuntu

   - Сохранить и выложить историю ваших терминальных команд в Ubuntu. В формате: Файла с ФИО, датой сдачи, номером группы(или потока).
---
   ![](./ScreenShots/Screenshot%202024-08-26%20233650.png)
   ![](./ScreenShots/Screenshot%202024-08-26%20233656.png)
---
```
Объектно-ориентированное программирование.
```
6. Диаграмма классов
   - Создать диаграмму классов с родительским классом `Животные`, и двумя подклассами: `Pets` и `Pack animals`.

   - В составы классов которых в случае `Pets` войдут классы: собаки, кошки, хомяки, а в класс `Pack animals` войдут: Лошади, верблюды и ослы.

   - Каждый тип животных будет характеризоваться (например, имена, даты рождения, выполняемые команды и т.д)

   - Диаграмму можно нарисовать в любом редакторе, такими как `Lucidchart`, `Draw.io`, `Microsoft Visio` и других.
---
 `Draw.io` [Диаграммы](./Animals_diagramm/)
---
![](./Animals_diagramm/Animals_diagramm.svg)
---
7. Работа с MySQL (Задача выполняется в случае успешного выполнения задачи    “Работа с MySQL в Linux. “Установить MySQL на вашу машину”
---
![](./ScreenShots/Screenshot%202024-08-27%20232813.png)
---
7. 1 После создания диаграммы классов в 6 пункте, в 7 пункте база данных `Human Friends` должна быть структурирована в соответствии с этой диаграммой. Например, можно создать таблицы, которые будут соответствовать классам `Pets` и `Pack animals`, и в этих таблицах будут поля, которые характеризуют каждый тип животных (например, имена, даты рождения, выполняемые команды и т.д.).
---
![](./ScreenShots/Screenshot%202024-08-29%20003517.png)
---
7. 2   - В ранее подключенном MySQL создать базу данных с названием "Human Friends". [SCREEN_SHOT](./ScreenShots/Screenshot%202024-08-28%20215516.png)
   - Создать таблицы, соответствующие иерархии из вашей диаграммы классов.[SCREEN_SHOT](./ScreenShots/Screenshot%202024-08-29%20012922.png)

   - Заполнить таблицы данными о животных, их командах и датами рождения.[SCREEN_SHOT](./ScreenShots/Screenshot%202024-08-29%20014806.png)

   - Удалить записи о верблюдах и объединить таблицы лошадей и ослов.[SCREEN_SHOT]![](./ScreenShots/Screenshot%202024-08-29%20003225.png)

   - Создать новую таблицу для животных в возрасте от 1 до 3 лет и вычислить
   их возраст с точностью до месяца.[SCREEN_SHOT](./ScreenShots/Screenshot%202024-08-29%20013909.png)

   - Объединить все созданные таблицы в одну, сохраняя информацию о принадлежности к исходным таблицам.[SCREEN_SHOT](./ScreenShots/Screenshot%202024-08-29%20013722.png)
---
![](./ScreenShots/Screenshot%202024-08-28%20215516.png)
![](./ScreenShots/Screenshot%202024-08-29%20014746.png)
![](./ScreenShots/Screenshot%202024-08-29%20014806.png)
![](./ScreenShots/Screenshot%202024-08-29%20012922.png)
![](./ScreenShots/Screenshot%202024-08-29%20003225.png)
![](./ScreenShots/Screenshot%202024-08-29%20013909.png)
![](./ScreenShots/Screenshot%202024-08-29%20013722.png)
![](./ScreenShots/Screenshot%202024-08-29%20013727.png)
---
8.  ООП и Java
   - Создать иерархию классов в Java, который будет повторять диаграмму классов созданную в задаче 6(Диаграмма классов) .
9. Программа-реестр домашних животных
    - Написать программу на Java, которая будет имитировать реестр домашних животных. Должен быть реализован следующий функционал:
---
9. 1. Добавление нового животного
        - Реализовать функциональность для добавления новых животных в реестр.

Животное должно определяться в правильный класс (например, "собака", "кошка", "хомяк" и т.д.)


9. 2. Список команд животного
        - Вывести список команд, которые может выполнять добавленное животное (например, "сидеть", "лежать").
---

9. 3. Обучение новым командам
        - Добавить возможность обучать животных новым командам.
---
9. 4 Вывести список животных по дате рождения

9.5. Навигация по меню
        - Реализовать консольный пользовательский интерфейс с меню для навигации между вышеуказанными функциями.

10. Счетчик животных
Создать механизм, который позволяет вывести на экран общее количество созданных животных любого типа (Как домашних, так и вьючных), то есть при создании каждого нового животного счетчик увеличивается на “1”. 
---
![](./ScreenShots/Screenshot%202024-09-05%20102816.png)
![](./ScreenShots/Screenshot%202024-09-05%20104322.png)
![](./ScreenShots/Screenshot%202024-09-05%20104340.png)


Код программы [тут](./Class_hierarchies_animals)

Пример кода 
```java
import java.util.ArrayList;
import java.util.List;
import java.util.Objects;

public class Camel implements Animals{
    private String name;
    private String dateBirth;
    private List<String> commands;

    public Camel(String name, String dateBirth, List<String> commands) {
        this.name = name;
        this.dateBirth = dateBirth;
        this.commands = commands;
    }

    public Camel() {
        this("name", "dateBirth", new ArrayList<>());
    }

    //*********************************************************************************** */

@Override
public String getName() {
    return this.name;
}

@Override
public void setName(String name) {
    this.name = name;
}

@Override
public void setDataBirth(String date) {
    this.dateBirth = date;
}

@Override
public String getDataBirth() {
    return this.dateBirth;
}

@Override
public void addCommand(String newCommand) {
    if (commands.stream().filter(x -> x.equals(newCommand)).findFirst().isEmpty()) {
    return;
    }
    commands.add(newCommand);
}

@Override
public void removeCommand(String command) {
    commands.remove(command);
}

@Override
public List<String> getCommandList() {
    return commands;
}

@Override
public int getCommandCount() {
    return commands.size();
}

//*************************************************************************************** */


@Override
public String toString() {
    StringBuilder builder = new StringBuilder();
    builder.append("CAMEL ")
    .append(name)
    .append(" ")
    .append(dateBirth);

    return builder.toString();
}

@Override
public boolean equals(Object o) {
    if (this == o) return true;
    if (o == null || getClass() != o.getClass()) return false;
    Camel camel = (Camel) o;
    return Objects.equals(name, camel.name);
}

@Override
public int hashCode() {
    return Objects.hash(name);
   }
}
```