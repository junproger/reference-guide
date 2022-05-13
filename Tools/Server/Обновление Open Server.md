# Обновление Open Server ([источник](https://conotes.ru/administrirovanie-web-servera/obnovlenie-open-server.html#comment-8077))

Как обновить Open Server и перенести все данные сайтов:
1. Скачиваем и устанавливаем последнюю версию OpenServer в отдельную папку.
2. Копируем из папки со старой версией OpenServer содержимое папки domains (например, c:/OSPanel/domains) в папку domains новой версии.
3. Перенос баз данных со старой версии Open Server на новую.

Пользователь Ink0gnit0 поделился двумя небольшими скриптами для автоматического экспорта и импорта всех баз MySQL / MariaDB.

Резервное копирование всех баз данных (за исключением системных):
```php
@echo off
rem Указание пути к исполняемому файлу 'mysql'
set PATH=%PATH%;C:\openserver\modules\database\MariaDB-10.1\bin
set usr=root
set pwd=

rem Получение списка баз данных
mysql --user=%usr% --password=%pwd% --execute="SHOW DATABASES WHERE NOT `Database` IN ('mysql', 'information_schema', 'performance_schema');" --skip-column-names > %~dp0databases.tmp

rem Создание резервных копий всех баз данных
for /f "tokens=*" %%D in ('type databases.tmp') do (
	echo Backuping DB '%%D'
    mysqldump --user=%usr% --password=%pwd% %%D > %~dp0%%D.sql
)
rem Удаление временных файлов
del %~dp0databases.tmp
pause
```

Восстановление баз данных из раннее созданных sql-файлов:
```php
@echo off
rem Указание пути к исполняемому файлу 'mysql'
set PATH=%PATH%;C:\openserver\modules\database\MariaDB-10.1\bin
set usr=root
set pwd=

echo Found files:
dir /B %~dp0*.sql
pause

rem Восстановление всех баз данных из резервных копий (*.sql)
for /f "tokens=*" %%D in ('dir /B %~dp0*.sql') do (
	echo Restoring file '%%D'
	mysql --user=%usr% --password=%pwd% < %~dp0%%D.sql
)
pause
```

В скриптах надо указать путь до исполняемого файла mysql той версии, с которой работали сайты.
Код каждый скрипта копируем в отдельный текстовый файл и сохраняем с расширением .bat
После этого скрипт можно будет запустить простым кликом мыши по нему.