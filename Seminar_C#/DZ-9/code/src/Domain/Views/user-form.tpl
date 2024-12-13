<form action="/user/save/" method="post">
  <input id="csrf_token" type="hidden" name="csrf_token" value="{{ csrf_token }}">
  <p>
    <label for="user-name">Имя:</label>
    <input id="user-name" type="text" name="name">
  </p>
  <p>
    <label for="user-lastname">Фамилия:</label>
    <input id="user-lastname" type="text" name="lastname">
  </p>
  <p>
    <label for="user-login">Логин:</label>
    <input id="user-login" type="text" name="login">
  </p>
  <p>
    <label for="user-password">Пароль:</label>
    <input id="user-password" type="text" name="password">
  </p>
  <p>
    <label for="user-birthday">День рождения:</label>
    <input id="user-birthday" type="text" name="birthday" placeholder="ДД-ММ-ГГГГ">
  </p>
  <p><input type="submit" value="Сохранить"></p>
</form>