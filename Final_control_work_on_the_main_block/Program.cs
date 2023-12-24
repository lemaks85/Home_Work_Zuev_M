/* Задача: Написать программу, которая из имеющегося массива строк формирует новый массив из строк,
длина которых меньше, либо равна 3 символам. Первоначальный массив можно ввести с клавиатуры,
либо задать на старте выполнения алгоритма. При решении не рекомендуется пользоваться коллекциями,
лучше обойтись исключительно массивами. */


internal class Program{

static string[] NewArrayString(string[] pull)   // Метод создания массива с клавиатуры.
{
    string[] chars = new string[pull.Length];   // Создание массива.
        for (int i = 0; i < pull.Length; i++)   // Цикл массива
        {
            chars[i] = pull[i];                 // Присвоение элементов массива
        }
    return chars;                               // Возврат массива
}
static void ShowArray(string[] array)  // Метод вывода массива на консоль.
{
    Console.Write("The created array" + " ");
        foreach (string elem in array)
        {
            Console.Write(elem + " ");
        }
}
static string[] ModArray(string[] array) // Метод обработки и возврат обработанного массива.
{
    string[] newArray = new string[array.Length];  // Создание нового массива по длинее входного.
    int count = 0;                                 // Счетчик элементов массива. 
        for (int i = 0; i < array.Length; i++)     // Цикл перебоки массива.
        {
            if (array[i].Length <= 3)              // Условие проверки элементов массива.
            {
                newArray[count] = array[i];        //Присвоение новуму массиву элементов из счетчика.
                count++;                           // Увеличение счетчика
            }
        }

    return newArray;                               // Возврат обработанного массива.
}

private static void Main(string[] args){

Console.WriteLine("Enter a comma-separated ',' string as an array element");
    string s = Console.ReadLine();          // Ввод строки с клавиатуры.
        string[] pull = s.Split(',');       // Разбивка строки на группы для записи массива по элементно 
                                            // через запятую ",".
string[] myArray = NewArrayString(pull);        // Обьявление методов
        ShowArray(myArray);

        Console.WriteLine();

string[] newArray = ModArray(myArray);
    ShowArray(newArray);
    }
}
