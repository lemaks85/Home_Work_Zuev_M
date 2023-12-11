/* Задача 1: Задайте значения M и N. Напишите программу, которая
выведет все натуральные числа в промежутке от M до N.
Использовать рекурсию, не использовать циклы. */

internal class Program{
static void LineNumbers(int m, int n){
    if (m <= n){
        LineNumbers(m, n - 1);
        Console.Write(n + " ");
    }
}    
    private static void Main(string[] args){
       
       LineNumbers(8, 32);
    }
}

/* PS C:\Users\Maks_Z\Desktop\Home_Work_Zuev_M\Seminar_7_Recursion\zadacha_1> dotnet run
8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32  */