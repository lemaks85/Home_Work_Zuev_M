/* Задача 1: Задайте одномерный массив из 10 целых
чисел от 1 до 100. Найдите количество элементов
массива, значения которых лежат в отрезке [20,90].  */

internal class Program{ 
static int[] CreateArray(int min, int max, int size)
{
    int[] array = new int[size];
        for (int i = 0; i < size; i++)
        {
            array[i] = new Random().Next(min, max + 1);
        } 
    return array;
}
static void ShowArray(int[] array)
{
        for (int i = 0; i < array.Length; i++)
        {
            Console.Write(array[i] + "|");
        }
}
static int CountSegmentArray(int[] array)
{
    int result = 0;
        for (int i = 0; i < array.Length; i++)
        {
            if (array[i] >= 20 && array[i] <=90)
            {
                result++;
            }
        }
    return result;
}
private static void Main(string[] args){
    int[] myArray = CreateArray(1, 100, 10);
        int counts = CountSegmentArray(myArray);
            ShowArray(myArray);
                Console.WriteLine($"\nThe number of array '{counts}' elements whose values lie in the segment [20,90]");    
    }
}