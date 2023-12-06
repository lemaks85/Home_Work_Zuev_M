/* Задача 1: Задайте двумерный массив символов (тип char [,]).
Создать строку из символов этого массива. */

internal class Program{

static string GetStringFromCharArray(char[,] array)
{
    string res = "";
        foreach (char elem in array)
        {
                res += elem;
        }
    return res;
}

private static void Main(string[] args){
    char[,] myArray = { { 'a', 'b', 'c' }, { 'd', 'e', 'f' }, { 'g', 'h', 'i' } };
        string str = GetStringFromCharArray(myArray);
            Console.WriteLine(str);
    }
}