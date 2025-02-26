import java.util.Arrays;
public class RadixSortPhoneNumbers {
public static void countingSort(long[] arr, int exp) {
int n = arr.length;
long[] output = new long[n];
int[] count = new int[10];
for (int i = 0; i < n; i++)
count[(int) ((arr[i] / exp) % 10)]++;
for (int i = 1; i < 10; i++)
count[i] += count[i - 1];
for (int i = n - 1; i >= 0; i--) {
output[count[(int) ((arr[i] / exp) % 10)] - 1] = arr[i];
count[(int) ((arr[i] / exp) % 10)]--;
}
for (int i = 0; i < n; i++)
arr[i] = output[i];
}
public static long[] sortPhoneNumbers(long[] arr) {
long max = Arrays.stream(arr).max().getAsLong();
for (int exp = 1; max / exp > 0; exp *= 10)
countingSort(arr, exp);
return arr;
}
public static void main(String[] args) {
long[] phoneNumbers = {9876543210L, 1234567890L, 5555555555L,
1000000000L};
System.out.println(Arrays.toString(sortPhoneNumbers(phoneNumbers)));
}
}
