/* Задача 1: Напишите программу, которая на вход принимает позиции элемента в двумерном массиве,
и возвращает значение этого элемента или же указание, что такого элемента нет.
 */
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

static void ShowArray(int [,] array)
{
    for(int i = 0; i<array.GetLength(0); i++)
    {
        for(int j=0; j<array.GetLength(1); j++)
        {
            Console.Write(array[i,j]+" ");
        }
        Console.WriteLine();
    }
}

static void PoiskElem(int [,] array, int elem)
{
    for (int i = 0; i < array.GetLength(0); i++)
    {
            for (int j = 0; j < array.GetLength(1); j++)
            {
                   if (array[i, j] == elem) 
                   {
                    Console.Write("The value of the element" + elem);
                   }
                   if (array[i, j] != elem)
                   {
                    Console.WriteLine("There is no such element");
                   }
            }
    }
}
        
int [,] myArray = CreateArray(4, 4, 1, 9);
ShowArray(myArray);
PoiskElem(myArray, 9);
