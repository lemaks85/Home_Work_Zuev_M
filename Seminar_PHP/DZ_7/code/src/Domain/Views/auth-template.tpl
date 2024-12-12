{% if not user_authorized %}
    <p><a href="/user/auth/">Вход в систему</a></p>
{% else %}
    <p>Добро пожаловать на сайт!</p>
{% endif %}