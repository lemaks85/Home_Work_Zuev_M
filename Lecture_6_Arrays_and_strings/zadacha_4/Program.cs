/* Задача 4*(не обязательная): Задайте строку, состоящую из слов, разделенных пробелами. Сформировать строку,
в которой слова расположены в обратном порядке. В полученной строке слова должны быть также разделены пробелами. */
internal class Program{
static string RevStr(string str)
{
    char[] arr = str.ToCharArray();
        Array.Reverse(arr);
    return new String(arr);
}
private static void Main(string[] args){
    
    string str = "J u s t";
        string res = RevStr(str);
            Console.WriteLine(str);
                Console.WriteLine(res);
    }
}