from typing import List


def binary_search(arr: List[int], target: int) -> int:
    """
    Реализует бинарный поиск элемента в целочисленном массиве.

    Agrs:
    - arr (List[int]): Целочисленный массив, в котором осуществляется поиск.
    - target (int): Искомый элемент в массиве.

    Return:
    - int: Индекс элемента в массиве, если элемент найден. Или -1, если элемент не найден.
    """
    left = 0
    right = len(arr) - 1

    while left <= right:
        mid = (left + right) // 2

        if arr[mid] == target:
            return mid
        elif arr[mid] < target:
            left = mid + 1
        else:
            right = mid - 1

    return -1


arr = [1, 3, 5, 7, 9, 11]
target = 7
result = binary_search(arr, target)
print(f"Исходный список: {arr}")
print(f"Цель: {target}")
if result == -1:
    print("Искомый элемент не найден")
else:
    print(f"Искомый элемент найден по индексу {result}")
