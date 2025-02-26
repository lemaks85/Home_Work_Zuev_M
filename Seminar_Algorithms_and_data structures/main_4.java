import java.util.HashSet;
class ListNode {
int val;
ListNode next;
ListNode(int val) { this.val = val; }
}
public class RemoveDuplicates {
public static void removeDuplicates(ListNode head) {
if (head == null) return;
HashSet<Integer> seen = new HashSet<>();
ListNode current = head;
seen.add(current.val);
while (current.next != null) {
if (seen.contains(current.next.val)) {
current.next = current.next.next; // Удаляем дубликат
} else {
seen.add(current.next.val);
current = current.next;
}
}
}
public static void printList(ListNode head) {
while (head != null) {
System.out.print(head.val + " -> ");
head = head.next;
}
System.out.println("null");
}
public static void main(String[] args) {
ListNode head = new ListNode(1);
head.next = new ListNode(2);
head.next.next = new ListNode(3);
head.next.next.next = new ListNode(2);
head.next.next.next.next = new ListNode(4);
head.next.next.next.next.next = new ListNode(1);
System.out.println("Before removing duplicates:");
printList(head);
removeDuplicates(head);
System.out.println("After removing duplicates:");
printList(head);
}
}