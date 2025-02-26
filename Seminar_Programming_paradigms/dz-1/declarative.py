from random import randint
from typing import List


def sort_array(arr: List[int]) -> List[int]:
    if len(arr) == 0:
        raise ValueError(
            'На вход должен подаваться непустой целочисленный список')
    return sorted(arr, reverse=True)


lst = [randint(0, 100) for i in range(7)]
print(lst)
print(sort_array(lst))
