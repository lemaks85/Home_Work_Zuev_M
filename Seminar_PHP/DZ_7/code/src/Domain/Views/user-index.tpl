<p>Список пользователей в хранилище</p>
<a href="/user/edit">Добавить пользователя</a>
<ul id="navigation">
    {% for user in users %}
        <li>

                        {{ user.getUserName() }} {{ user.getUserLastName() }}. День рождения: {{ user.getUserBirthday() | date('d.m.Y') }}
                <a href="/user/edit/?user_id={{user.userId}}">Править</a>
                <a href="/user/delete/?user_id={{user.userId}}">Удалить</a>


        </li>
    {% endfor %}
</ul>