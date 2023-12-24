/* Задача: Написать программу, которая из имеющегося массива строк формирует новый массив из строк,
длина которых меньше, либо равна 3 символам. Первоначальный массив можно ввести с клавиатуры,
либо задать на старте выполнения алгоритма. При решении не рекомендуется пользоваться коллекциями,
лучше обойтись исключительно массивами. */


internal class Program{

static string[] NewArrayString(string[] pull)
{
    string[] chars = new string[pull.Length];
        for (int i = 0; i < pull.Length; i++)
        {
            chars[i] = pull[i];
        }
    return chars;
}

static void ShowArray(string[] array)
{
    Console.Write("The created array" + " ");
        foreach (string elem in array)
        {
            Console.Write(elem + " ");
        }
}

static string[] ModArray(string[] array)
{
    string[] newArray = new string[array.Length];
    int count = 0;
        for (int i = 0; i < array.Length; i++)
        {
            if (array[i].Length <= 3)
            {
                newArray[count] = array[i];
                count++;
            }
        }

    return newArray;
}

private static void Main(string[] args){

Console.WriteLine("Enter a comma-separated ',' string as an array element");
    string s = Console.ReadLine();
        string[] pull = s.Split(',');

string[] myArray = NewArrayString(pull);
        ShowArray(myArray);

        Console.WriteLine();

string[] newArray = ModArray(myArray);
    ShowArray(newArray);
    }
}
