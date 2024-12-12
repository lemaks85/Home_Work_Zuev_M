<form action="{{ action }}" method="post">
  <input id="csrf_token" type="hidden" name="csrf_token" value="{{ csrf_token }}">

  <input hidden id="user-login" type="text" name="user_id" value="{{user_data.id_user}}">
  <p>
    <label for="user-name">Логин:</label>
    <input id="user-login" type="text" name="login" value="{{user_data.login}}">
  </p>
  <p>
    <label for="user-name">Имя:</label>
    <input id="user-name" type="text" name="name" value="{{user_data.user_name}}">
  </p>
  <p>
    <label for="user-lastname">Фамилия:</label>
    <input id="user-lastname" type="text" name="lastname" value="{{user_data.user_lastname}}">
  </p>
  <p>
    <label for="user-birthday">День рождения:</label>
    <input id="user-birthday" type="text" name="birthday" placeholder="ДД-ММ-ГГГГ" value="{{user_data.user_birthday_timestamp | date('d-m-Y') }}">
  </p>
  <p><input type="submit" value="Сохранить"></p>
</form>