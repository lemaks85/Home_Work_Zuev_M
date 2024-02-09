from data_create import input_user_data



def input_data():
    name, surname, phone, adress = input_user_data()
    var = int(input(f'\n В каком формате записать данные? \n'
                    f'1 Вариант:\n'
                    f'{name}\n'
                    f'{surname}\n'
                    f'{phone}\n'
                    f'{adress}\n\n'
                    f'2 вариант:\n'
                    f'{name};{surname};{phone};{adress}\n\n'
                    f'Ваш выбор: '))
    if var == 1:
        with open('data_first_variant.csv', 'a', encoding='utf-8') as file:
            file.write( f'{name}\n'
                        f'{surname}\n'
                        f'{phone}\n'
                        f'{adress}\n\n')
    else:
        with open('data_second_variant.csv', 'a', encoding='utf-8') as file:
            file.write(f'{name};{surname};{phone};{adress}\n\n')
    print_data()


def print_data():
    print('/////////////////////////////////////////////////////////////////////////////////')
    print('1 Файл:')
    with open('data_first_variant.csv', 'r', encoding='utf-8') as file:
        data = file.readlines()
        print(''.join(data))
        
    print('2 Файл:')
    with open('data_second_variant.csv', 'r', encoding='utf-8') as file:
        data = file.readlines()
        print(''.join(data))
    print('/////////////////////////////////////////////////////////////////////////////////')
       
    
        
        
        
def tochange_data(): # Функуция изменения данных
    var2 = int(input(f'\n Выберите файл который хотите изменить? \n'
                f'Файл № 1:\n'
                f'Файл № 2:\n\n'
                f'Ваш выбор: '))
    name, surname, phone, adress = input_user_data()
    if var2 == 1:
        with open('data_first_variant.csv', 'w+', encoding='utf-8') as file:
            file.write( f'{name}\n'
                        f'{surname}\n'
                        f'{phone}\n'
                        f'{adress}\n\n')
    else:
        with open('data_second_variant.csv', 'w+', encoding='utf-8') as file:
            file.write(f'{name};{surname};{phone};{adress}\n\n')
    print_data()
        
                       
                    
def delete_data(): # Функция удаления данных полностью из двух файлов
    with open('data_first_variant.csv','w+', encoding='utf-8') as file:
        data = file.readlines()
        for line in data:
                file.write(line)
    with open('data_second_variant.csv','w+', encoding='utf-8') as file:
        data = file.readlines()
        for line in data:
                file.write(line)
    print_data()


def copy_data(): # Функция копирывания данных из одного файла  в другой файл
    var3 = int(input(f'\n Выберите файл в который хотите скопировать данные? \n'
                f'1 Из файла № 1 в файл № 2:\n'
                f'2 Из файла № 2 в файл № 1:\n\n'
                f'Ваш выбор: '))
    if var3 == 1:
        with open('data_first_variant.csv', 'r+', encoding='utf-8') as firstfile, open('data_second_variant.csv', 'w+', encoding='utf-8') as secondfile:
          for line in firstfile:
                secondfile.write(line)
    elif var3 == 2:
        with open('data_second_variant.csv', 'r+', encoding='utf-8') as secondfile, open('data_first_variant.csv', 'w+', encoding='utf-8') as firstfile:
            for line in secondfile:
                firstfile.write(line)
    print_data()
            
    
      
    
