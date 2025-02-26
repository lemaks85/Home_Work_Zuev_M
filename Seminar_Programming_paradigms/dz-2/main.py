def multiplication_table(n):
    for i in range(1, n + 1):
        for j in range(1, 10):
            print(f"{i} * {j} = {i * j}")
        print('')


n = int(input("Введите число n: "))
multiplication_table(n)


# В данном примере выбрана процедурная парадигма, так как она является достаточно простой и понятной для решения этой задачи.