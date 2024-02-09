from logger import input_data, print_data, tochange_data, delete_data, copy_data


def interface():
    print('********************************************************************************')
    print('Добрый день! Это бот-помощник. \n'
          'Что вы хотите сделать? \n\n'
          '1 - Записать данные \n'
          '2 - Вывести данные \n'
          '3 - Изменить данные \n'
          '4 - Удалить данные \n'
          '5 - Копировать данные \n\n')
    command = int(input('Ваш выбор: '))
    
    

    while command < 1 or command > 5:
        command = int(input('Ошибка! Ваш выбор: '))

    if command == 1:
        input_data()
    elif command == 2:
        print_data()
    elif command == 3:
        tochange_data()
    elif command == 4:
        delete_data()
    elif command == 5:
        copy_data()
    
    interface()

        
        

interface()


