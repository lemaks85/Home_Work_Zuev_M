import java.util.Map;
import java.util.TreeMap;
public class CountingSortLetters {
public static void countLetters(String text) {
text = text.toLowerCase();
int[] count = new int[26];
for (char c : text.toCharArray()) {
if (Character.isLetter(c)) {
count[c - 'a']++;
}
}
Map<Character, Integer> letterCount = new TreeMap<>();
for (int i = 0; i < 26; i++) {
if (count[i] > 0) {
letterCount.put((char) (i + 'a'), count[i]);
}
}
for (Map.Entry<Character, Integer> entry :
letterCount.entrySet()) {
System.out.println(entry.getKey() + ": " +
entry.getValue());
}
}
public static void main(String[] args) {
String text = "Hello World";
countLetters(text);
}
}