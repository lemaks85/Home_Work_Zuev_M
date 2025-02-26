import java.util.Arrays;
public class HeapSortTasks {
public static void heapify(int[] arr, int n, int i) {
int largest = i;
int left = 2 * i + 1;
int right = 2 * i + 2;
if (left < n && arr[left] > arr[largest])
largest = left;
if (right < n && arr[right] > arr[largest])
largest = right;
if (largest != i) {
int swap = arr[i];
arr[i] = arr[largest];
arr[largest] = swap;
heapify(arr, n, largest);
}
}
public static int[] sortTasksByPriority(int[] tasks) {
int n = tasks.length;
for (int i = n / 2 - 1; i >= 0; i--)
heapify(tasks, n, i);
for (int i = n - 1; i >= 0; i--) {
int temp = tasks[0];
tasks[0] = tasks[i];
tasks[i] = temp;
heapify(tasks, i, 0);
}
return tasks;
}
public static void main(String[] args) {
int[] tasks = {3, 1, 4, 2, 5};
System.out.println(Arrays.toString(sortTasksByPriority(tasks)));
}
}
