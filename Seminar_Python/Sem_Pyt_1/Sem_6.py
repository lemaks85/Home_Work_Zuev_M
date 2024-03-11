# list1 = [int(input('введите число: ')) for i in range(int(input('Введите кол-во: ')))]
# print(list1)
# list2 = [int(input('введите число: ')) for i in range(int(input('Введите кол-во: ')))]
# print(list2)

# for el in list1:
#     if el not in list2:
#         print(el, end = ' ')
        
        
# list1 = [int(input('введите число: ')) for i in range(int(input('Введите кол-во: ')))]
# print(list1)
# count = 0
# for i in range(len(list1) - 1):
#     for j in range(i + 1, len(list1)):
#         if list1[i] == list1[j]:
#             count += 1
# print(count)

# def sum_del(x):
#     summa = 0
#     for i in range(1, x // 2 + 1):
#         if x % i == 0:
#             summa += i
#     return summa

# k = int(input('введите число: '))
# for i in range(k):
#     el1 = sum_del(i) # i = 220 -> el1 = 284
#     el2 = sum_del(el1) # el1 = 284 -> el2 = 220
#     if i < el1 and i == el2:
#         print(el1, el2)