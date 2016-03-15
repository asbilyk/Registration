Конфигурационный файл:
library/configdb.php - данные для подключения к БД: имя/адрес хоста, пользователь, пароль и имя БД; 


Дамп база данных:
users.sql - сделать импорт в предварительно созданную БД, в настройках configdb.php стоит имя "test",
необходимо чтоб имена совпадали.


класс пользователя:
library/user_class.php

скрипт авторизации:
library/authorization.php

скрипт регистрации
library/registration.php

скрипт панели пользователя:
library/change.php

скрипт выхода из профиля пользователя
library/logout.php

скрипт подтверждения активации
activation.php



Javascript (jQuery, ajax)
скрипт авторизации и регистрации
js/main.js

скрипт панели пользователя:
js/user.js




--страницы smarty:
smarty/templates

главная:
smarty/templates/index.tpl

панель пользователя:
smarty/templates/user.tpl

