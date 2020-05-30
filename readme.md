# Fork for testing MODX Revolution 2.7.3 whith SqLite3
## (По-русски ниже.)

The basis for creating and upgrading the ability to work with sqlite was the RTOSkit user repository.
He created a fork and the ability to work with sqlite MODX Revo 2.2.5. https://github.com/RTOSkit/revolution. Thanks to him for that. It is a pity that he has not come to the GitHub for a long time.

## Technical data:
- support for php 5.6+ with php sqlite3 extension. can be found through phpinfo.
- MODX Revo 2.6.5+
- The load. For small projects such as: Landings, business cards. Because the database is 1 file. Therefore, if 10 users log in at the same time, and the server response is 0.3 seconds, then the 10th user will most likely wait 0.3 * 10 = 3 seconds. I think everything is clear here.
- the database file will be located in the core / data / folder and be closed from unexpected guests through htpasswd. Or move this file outside of www. the path to the file is written in the core / config config.

## Testing and familiarization:
1. Simply clone or save as a ZIP;
2. Transfer the archive to your server and unzip it.
3. The public_html folder can be deleted, here are the files for working with sqlite3. If you want to help, it will be more convenient to have these files 100% and send PR here.
4. Install as usual - / setup.
4.1. When setting up the database, select - sqlite.
4.2. Do not enter anything into the connections - click to check the connection.
4.3. test the connection in the database.
4.4. If everything is successful, enter the data for the admin as usual and set it to the end.
5. Log in to the admin panel if there are no errors.
6. READY. You can test, try.

## Packages.
For packages that use the database, you need to create models for xpdo so that the add-on is installed correctly, otherwise you will get a bunch of errors about not being able to find database models for your Package and as a result, the system will not be able to create tables.
Examples of models are the sources that lie in the public_html folder. rely on mysql when creating, there they are almost 1 in 1.
Turn on the server and mods logs at the level you need.

## Request pool:
** If you suddenly make a pool of requests, then do them AND in the public_html folder as well.
Because in this way it will be easier to see the difference and more accurately bargain. **

##Conclusion
I hope that someone will come in handy a similar version of MODX without mysql. Already more robust and working.
Requests pool in the original MODX repo, so far I think is unnecessary, because there are still errors and there is no good testing and a 100% guarantee that everything will be fine.
Good luck!

#RUSSIAN

#Форк для тестировани и использования MODX Revolution 2.7.3 в работе с файловой базой данных SqLite3.

Основой для создания и модернизации возможности работы с sqlite выступил репозиторий пользователя RTOSkit.
Он создал форк и возможность работы с sqlite MODX Revo 2.2.5. https://github.com/RTOSkit/revolution. Спасибо ему за это. Жаль что уже он давно не заходит на ГитХаб.

##Технические данные:
- поддержка php 5.6+ с расширением php sqlite3. можно узнать через phpinfo.
- MODX Revo 2.6.5+
- Нагрузка. Для мелких проектов типа: Лендингов, визиток. Потому что БД представляет собой 1 файл. Поэтому если одновременно зайдут 10 пользователей, а ответ сервера будет 0,3 сек, то 10й пользователь, скорее всего будет ожидать 0,3*10 = 3 секунды. Думаю, тут все понятно.
- файл БД будет находиться в папке core/data/ и закрываться от нежданных гостей через htpasswd. Или выносите этот файл за пределы www. путь до файла прописывается в конфиге core/config. 

##Тестирование и ознакомление:
1. Просто склонировать или сохранить в ZIP;
2. Архив перенесите к себе на сервер и распакуйте.
3. папку public_html можно удалить, тут файлы для работы с sqlite3. Если вы захотите помочь - удобнее будет 100% иметь эти файлы и сюда слать PR.
4. Устанавливайте как обычно - /setup.
4.1. При настройке БД выберите - sqlite.
4.2. В подключения ничего не вводите - жмите проверить подключение.
4.3. протестируйте соединение в БД.
4.4. Если все успешно - введите данные для адмики как обычно и установите до конца.
5. Войдите в админку если ошибок нет.
6. ГОТОВО. можно тестить, пробовать.

##Пакеты.
Для пакетов которые используют БД - нужно создать модели для xpdo, чтобы дополнение установилось корректно, иначе вы получите кучу ошибок о не возможности найти модели БД для своего Пакета и как следствие система создать таблицы не сможет.
Примеры моделей - исходники которые лежат в public_html папке. ориентируйтесь на mysql при создании, там они почти 1 в 1.
Включите логи сервера и модикса на нужном вам уровне.

##Пул реквесты:
**Если вдруг вы будете делать пул реквесты, то делайте их И в папку public_html в том числе.
Потому что так можно будет проще увидеть разницу и точнее продебажить.**

##Заключение
Надеюсь, что кому-нибудь пригодиться подобная версия MODX без mysql. Уже более крепкая и рабочая.
Пул реквесты в оригинальный репо MODX, считаю пока излишними, т.к. еще есть ошибки и нет хорошего тестирования и 100% гарантии что все будет хорошо.

Успехов!