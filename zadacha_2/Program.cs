/* Задача 2: Задайте массив на 10 целых чисел.
Напишите программу, которая определяет
количество чётных чисел в массиве. */
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
static int EvenCountsArray(int[] array)
{
    int result = 0;
        for (int i = 0; i < array.Length; i++)
        {
            if (array[i] % 2 == 0)
            {
                result++;
            }
        }
    return result;
}
private static void Main(string[] args){
    int[] myArray = CreateArray(1, 100, 10);
        int counts = EvenCountsArray(myArray);
            ShowArray(myArray);
                Console.WriteLine($"\nThe number '{counts}' of even numbers in the array");
    }
}