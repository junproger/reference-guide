**Git представляет собой распределенную систему контроля версий, позволяющую контролировать процесс внесения изменений в проект.**

## Ссылки по Git
* Официальный сайт https://git-scm.com/ 
* Документация по командам https://git-scm.com/docs 
* Онлайн-версия книги "Pro Git" (на русском языке) https://git-scm.com/book/ru/v2
* Система контроля версий Git. Часть I https://loftbooks.ru/git
* Система контроля версий Git. Часть II https://loftbooks.ru/git-2
* Система контроля версий Git. Справочник https://loftbooks.ru/git-reference

## Полезные команды Git
Отключить локальный репозиторий от удаленного: `git remote rm origin`  

Посмотреть непроиндексированные изменения: `git diff`  
Посмотреть проиндексированные изменения: `git diff --staged`  

Откатить изменения до предыдущего коммита: `git checkout file_name`   
Откатить изменения до определенного коммита: `git checkout hash file_name`  
Перейти в другую ветку: `git checkout branch_name`   

## Настройка Git

Проверить версию Git `git --version`  

Добавить имя пользователя и почту для всех проектов:  
`git config --global user.name "Zachetka"`  
`git config --global user.email axi83@mail.ru`

Добавить имя пользователя и почту для локального проекта:  
`git config --local user.name "Zachetka"` или `git config user.name "Zachetka"`    
`git config --local user.email axi83@mail.ru` или `git config user.email axi83@mail.ru`  

Посмотреть все установленные настройки `git config --list`  
Посмотреть только глобальные настройки `git config --global --list`  
(файл настроек .gitconfig храниться в папке пользователя компьютера)

## Алгоритм работы c Git

1. Создать репозиторий (инициализация) `git init`
2. Проверить состояние репозитория `git status`   	
3. Добавить файлы `git add .` 
4. Зафиксировать изменения (коммит) `git commit -m "Initial commit"`
5. Изменить комментарий у последнего коммита `git commit --amend -m "New message"`

Посмотреть историю коммитов: `git log`  
Посмотреть изменения, внесенные отдельным коммитом: `git show hash` 

## Работа с новым удаленным репозиторием
1. Создать новый удаленный репозиторий, если он еще не создан
2. Перейти в локальную директорию в которой будет создана папка с проектом
3. Ввести команду с сылкой на клонируемый репозиторий `git clone https://github.com/zachetka/Test.git`
4. Если необходимо получить изменения с удаленного репозитория `git pull`
5. Если необходимо отправить изменения на удаленный репозиторий `git push`	

## Выгрузка локального репозитория на GitHub
1. Создать новый удаленный репозиторий

2. Подключение к удаленному репозиторию "excel-course"  
`git remote add origin https://github.com/zachetka/excel-course.git`	
2. Получить изменения с удаленного репозитория `git pull`
3. Отправка изменений на сервер `git push -u origin master`	
4. Создание новой ветки с названием "webpack" и переключение на нее `git checkout -b "webpack"`	
5. Пункты 2 и 3  	
6. Отправка изменений на сервер в ветку "webpack" `git push -u origin webpack`