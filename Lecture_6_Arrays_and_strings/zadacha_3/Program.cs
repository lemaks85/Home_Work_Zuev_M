/* Задача 3: Задайте произвольную строку. Выясните, является ли она палиндромом. */
internal class Program{
static string FilterString(string str)
{
    string res = str.ToLower();
    string count = "";
        foreach (char elem in res)
        {
            if (elem != ' ')
            {
                count += elem;
            }
        }
    return count;
}
static string IsPalindrome(string str)
{
    for (int i = 0; i < str.Length / 2; i++)
    {
        if (str[i] != str[str.Length - i - 1])
        {
            return "String is not palindrome";
        }
    }
    return "String is palindrome";
}
private static void Main(string[] args){
    
    string str = "Wow";
        string res = FilterString(str);
            Console.WriteLine(IsPalindrome(res));
    }
}