## 1. Код самой программы расположен в файле Program.cs
## 2. Блок схема в двух расщирениях drawio и png

# Итоговая контрольная работа по основному блоку
## Урок 1. Контрольная работа
#### № Задача: Написать программу, которая из имеющегося массива строк формирует новый массив из строк, длина которых меньше, либо равна 3 символам. Первоначальный массив можно ввести с клавиатуры, либо задать на старте выполнения алгоритма. При решении не рекомендуется пользоваться коллекциями, лучше обойтись исключительно массивами.

Примеры:
[“Hello”, “2”, “world”, “:-)”] → [“2”, “:-)”]
[“1234”, “1567”, “-2”, “computer science”] → [“-2”]
[“Russia”, “Denmark”, “Kazan”] → []

# Описание решение задачи.
1. Написал возвратный метод *"NewArrayString()"* для создания массива с клавиатуры. Где отдельно использывал метод *"String.Split(",")"* c параметром ","  для разделение входной строки на группы, для каждого отдельного элемента массива.

2. Написал не возвратный метод *"ShowArray(string[] array)"* который на вход принемает массив и выводит его на консоль.

3. Нарисал возвратный метод *"ModArray(string[] array)"* который на вход принемет массив, обробатывает его и создает новый массив согласно обрабатываемым параметрам.

4. Провека работоспособнасти каждого метода и программы целиком.




