from typing import List
from math import sqrt


def pearson_correlation(numbers_1: List[float], numbers_2: List[float]) -> float:
    """
    Расчет корреляции Пирсона между двумя массивами.

    Args:
     - numbers_1: первый массив значений
    - numbers_2: второй массив значений

    Return:
     - Корреляция Пирсона между массивами numbers_1 и numbers_2
    """
    # Проверка на то, что массивы одинаковой длины
    if len(numbers_1) != len(numbers_2):
        raise ValueError("Массивы должны быть одинаковой длины")

    n = len(numbers_1)

    # Расчет среднего значения для каждого массива
    mean_1 = sum(numbers_1) / n
    mean_2 = sum(numbers_2) / n

    # Вычисление ковариации и дисперсии для массивов numbers_1 и numbers_2
    covariance = sum((numbers_1[i] - mean_1) * (numbers_2[i] - mean_2) for i in range(n))
    variance_numbers_1 = sum((x - mean_1) ** 2 for x in numbers_1)
    variance_numbers_2 = sum((y - mean_2) ** 2 for y in numbers_2)

    # Расчет корреляции Пирсона
    correlation = covariance / \
        (sqrt(variance_numbers_1) * sqrt(variance_numbers_2))

    return round(correlation)


num_1 = [1, 2, 3, 4, 5]
num_2 = [5, 4, 3, 2, 1]

correlation = pearson_correlation(num_1, num_2)
print(f"Корреляция Пирсона: {correlation}")
