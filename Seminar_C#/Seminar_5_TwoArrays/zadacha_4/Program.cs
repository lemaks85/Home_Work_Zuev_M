/* Задача 4*(не обязательная): Задайте двумерный массив из целых чисел. 
Напишите программу, которая удалит строку и столбец, на пересечении которых расположен наименьший элемент массива.
 Под удалением понимается создание нового двумерного массива без строки и столбца */

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

static void ShowArray(int[,] array)
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

static int[,] DelLineArr(int [,] array)
{
    int [,] newArray = new int [array.GetLength(0) - 1, array.GetLength(1) - 1];
    int min = array[0, 0];
    int rowIndex = 0;
    int colIndex = 0;
    for(int i = 0; i < array.GetLength(0); i++)
    {
        for(int j = 0; j < array.GetLength(1); j++)
        {
            if (min > array[i,j])
            {
                rowIndex = i;
                colIndex = j;
                min = array[i,j];
            }
        }
    }
                for (int i = 0; i < array.GetLength(0); i++)
                {
                    for (int j = 0; j < array.GetLength(1); j++)   
                    {
                       //Вот тут мой мозг поплыл и требуется подсказка или обьяснение как это работает.
                    }
                }   
        
         
    

    return newArray;
}


int [,] myArray = CreateArray(5, 5, 1, 9);
ShowArray(myArray);
int [,] meArray = DelLineArr(myArray);
ShowArray(meArray);