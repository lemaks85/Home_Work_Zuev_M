/* Задача 2: Задайте строку, содержащую латинские буквы в обоих регистрах. 
Сформируйте строку, в которой все заглавные буквы заменены на строчные. */
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
private static void Main(string[] args){
    
    string str = "The J u S t Do It";
        string res = FilterString(str);
            Console.WriteLine(res);
    }
}