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

