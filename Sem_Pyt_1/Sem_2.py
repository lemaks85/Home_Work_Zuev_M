# int number = 5;
# int factorial = number;
# for(int i = 1; i < 5; i++) {
#     factorial = factorial * i;
#   System.out.println("Факториал " + number + " равен " + factorial);
#***************************************************************************************************
# int a = 1;
# int b = 8;
# int c = 3;
# int d = 2;
# int e = 6;
# int max = a;
#     if (b > max) max = b;
#     if (c > max) max = c;
#     if (d > max) max = d;
#     if (e > max) max = e;
# System.out.print(max + " килограмм");

# n = int(input('ввидите число: '))
# i = 1
# while n > 0:
#     i *= n
#     n -= 1
# print(i)    

# a = int(input('Push Number: '))
# n0 = 0
# n1 = 1
# n2 = None
# i = 1
# while n0 < a:
#     n2 = n0 + n1
#     n0 = n1
#     n1 = n2
#     i += 1
#     if n0 > a:
#         i = -1
# print(i)


# n = int(input('Push Day: '))
# max_day = 0
# temp_max = 0
# for i in range(n):
#     x = int(input('Push Temp: '))
#     if x > 0:
#         temp_max += 1
#     else:
#         temp_max = 0
#     if temp_max > max_day:
#         max_day = temp_max
    
# print(max_day)
n = int(input('Сколькло арбузов '))
x = int(input('Сколькло арбузов '))
max = x
min = x
for i in range(n):
    if x > max:
        max = x
    elif x < min:
        min = x
print(max, min)