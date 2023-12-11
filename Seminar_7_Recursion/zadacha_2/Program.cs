/* Задача 2: Напишите программу вычисления функции Аккермана с помощью рекурсии.
Даны два неотрицательных числа m и n. */

internal class Program{
static int Ackermann(int m, int n){
    if (m == 0) return n + 1;
    if (m > 0 && n == 0) return Ackermann(m - 1, 1);
    if (m > 0 && n > 0) return Ackermann(m - 1, Ackermann(m, n - 1));
return Ackermann(m, n);
}
        
          
    private static void Main(string[] args){

    int result = Ackermann(3, 2);
        Console.WriteLine(result);          
    }
}

/* PS C:\Users\Maks_Z\Desktop\Home_Work_Zuev_M\Seminar_7_Recursion\zadacha_2> dotnet run
29 */