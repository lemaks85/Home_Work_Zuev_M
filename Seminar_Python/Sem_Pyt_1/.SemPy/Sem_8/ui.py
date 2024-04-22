from logger import input_data, print_data, tochange_data, delete_data, copy_data


def exit_data():
    return exit()


def interface():
    print('********************************************************************************')
    print('Добрый день! Это бот-помощник. \n'
          'Что вы хотите сделать? \n\n'
          '1 - Создать заметку \n'
          '2 - Покозать заметку \n'
          '3 - Изменить заметку \n'
          '4 - Удалить заметку \n'
          '5 - Копировать заметку \n'
          '6 - <<< Выход >>> \n\n')
    command = int(input('Ваш выбор: '))
    
    

    while command < 1 or command > 6:
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
    elif command == 6:
        exit_data()
    
    interface()

        
        

interface()


