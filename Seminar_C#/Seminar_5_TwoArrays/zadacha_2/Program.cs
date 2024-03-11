/* Задача 2: Задайте двумерный массив. Напишите программу, 
которая поменяет местами первую и последнюю строку массива.
 */
internal class Program{
static int[,] CreateArray(int row, int col, int min, int max)
{
    int[,] array = new int[row, col];
            for (int i = 0; i < row; i++)
            {
                for (int j = 0; j < col; j++)
                {
                    array[i, j] = new Random().Next(min, max + 1);
                }
            }
    return array;
}

static void Show2dArray(int[,] array)
{
            for (int i = 0; i < array.GetLength(0); i++)
            {
                for (int j = 0; j < array.GetLength(1); j++)
                {
                    Console.Write(array[i, j] + " ");
                }
                    Console.WriteLine();
            }
}

 static void ReplacementLine(int[,] array)
{
        for (int i = 0; i < array.GetLength(0); i++)
        {
            for (int j = 0; j < array.GetLength(1); j++)
            {
                int temp = array[array.GetLength(0) - 1, j];
                array[array.GetLength(0) - 1, j] = array[0, j];
                array[0, j] = temp;
            }
        }

}

    private static void Main(string[] args){
      
        int[,] myArray = CreateArray(5, 5, 1, 9);
            Show2dArray(myArray);
                ReplacementLine(myArray);
                    System.Console.WriteLine();
                        Show2dArray(myArray);
    }
}