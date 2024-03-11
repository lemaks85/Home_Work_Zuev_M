/* Задача 4**(не обязательно): Дано натуральноечисло в диапазоне от 1 до 100 000.
 Создайте массив,состоящий из цифр этого числа. Старший разрядчисла должен располагаться на 0-м индексе
массива, младший – на последнем. Размер массива должен быть равен количеству цифр */
internal class Program{ 
static int[] DiditsArray(int num)
{
    int count = 0;
    int num1 = num;

        while (num1 != 0)
        {
                num1 = num1 / 10;
                count++;
        }

    int[] array = new int[count];

        for (int i = count - 1; i >= 0; i--)
        {
                array[i] = num % 10;
                num /= 10;
        }
    return array;
}
static void ShowArray(int[] array)
{
        for (int i = 0; i < array.Length; i++)
        {
            Console.Write(array[i] + "|");
        }
            Console.Write("\nAn array consisting of digits of a given number has been created.");
}
private static void Main(string[] args){
    int[] myArray = DiditsArray(1234);
            ShowArray(myArray);
    }
}