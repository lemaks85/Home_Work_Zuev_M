/* Задача 3: Задайте произвольный массив. Выведете его элементы, начиная с конца.
Использовать рекурсию, не использовать циклы. */

internal class Program{
static int[] CreateArray(int min, int max, int size){
    int[] array = new int[size];
        for (int i = 0; i < size; i++){
            array[i] = new Random().Next(min, max + 1);
            Console.Write(array[i] + "|");
            }
    return array;
}
static void ShowArray(int[] array, int i = 0){
    if (i < array.Length){
        ShowArray(array, i + 1);
        Console.Write(array[i] + "|");
        }
}
private static void Main(string[] args){
    int[] myArray = CreateArray(1, 9, 10);
    Console.WriteLine();
    ShowArray(myArray);
    }
}
/* PS C:\Users\Maks_Z\Desktop\Home_Work_Zuev_M\Seminar_7_Recursion\zadacha_3> dotnet run
9|1|5|1|3|2|5|9|6|8|
8|6|9|5|2|3|1|5|1|9| */