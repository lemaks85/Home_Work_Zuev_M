# Подключение к нескольким удаленным репазиториям

- Переходим в раздел репазитория `test_1` командой `cd` (раннее в данном репазитории была удаленя связь `origin`)
- Создаем связь с репазиторием `test_1` командой `git remote add source path` (где path адресс репазитория `test_1`)
- Проверяем что связь установилась командой `git remote -v` (должно быть четыре связи две `origin` - `fetch` & `push` и две `source` - `fetch` & `push`)
- Далее всносим изменения в локальном репазитории `test_1` 
- Создаем коммит в текущем репазитории командой `git commit -m "Текс коммита"`
- Отпровляем в оба репазитория командой `git push -u origin master` & `git push -u source master`
- Проверяем изменения в удаленных репазиториях `test_1` & `test_2`
- Теперь внесем изменения в обоих удаленных репазиториях `test_1` & `test_2`
- Получаем изменения из удаленных репазиториях `test_1` & `test_2` командой `git fetch --all`
- Просматриваем их командами `git log origin/master ^master` & `git log source/master ^master`
- Вливаем их на локальный репазиторий командой `git merge origin/master` & `git merge source/master
- Находясь в текущей дериктории можно просматривать файлы в терминале командой `more имя файла`
