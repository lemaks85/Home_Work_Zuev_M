<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ url('store_form') }}">
      
        <div class="userForm">
          <div class="userForm__item">
            <label for="username">Name</label>
            <input type="text" name="username" id="username">
          </div>
          <div class="userForm__item">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname">
          </div>
          <div class="userForm__item">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
          </div>
          <button type="submit" class="userForm__button">Отправить</button>
        </div>

    </form>
</body>

</html>