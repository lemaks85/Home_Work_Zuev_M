/* Задача 3: Задайте прямоугольный двумерный массив. Напишите программу,
которая будет находить строку с наименьшей суммой элементов. */
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

static void MinSumRow(int[,] array)
{
    int index = 0, minsum = 0, sum = 0;
        for (int i = 0; i < array.GetLength(0); i++)
        {
            for (int j = 0; j < array.GetLength(1); j++)
            {
                sum += array[i, j];
            }
                if (i == 0)
                {
                    minsum = sum;
                }
                    else if (sum < minsum)
                    {
                    minsum = sum;
                    index = i;
                    }
        }
    Console.WriteLine($"Minimum line amount {minsum}");
}


    private static void Main(string[] args){
       
        int[,] myArray = CreateArray(5, 10, 1, 9);
            Show2dArray(myArray);
                Console.WriteLine();
                    MinSumRow(myArray);
    }
}