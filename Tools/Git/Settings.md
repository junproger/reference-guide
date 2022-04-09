# Настройка Git

1. Проверить версию Git: `git --version`

2. Справочная информация: `git [имя_команды] --help`

3. Установить VSCode в качестве редактора поумолчанию для Git:<br>
  `git config --global core.editor "code --wait"`

4. Настроить окончания строк:<br>
  для Windows: `git config --global core.autocrlf true`<br>
  для Unix / Linux / OS X: `git config --global core.autocrlf input`

5. Добавить имя пользователя и почту для всех проектов:<br>
  `git config --global user.name "Александра Храпкова"`<br>
  `git config --global user.email aleksandra.hrapkova@hobbyworld.ru`

6. Добавить имя пользователя и почту для локального проекта:<br>
  `git config user.name "Aleksandra Khrapkova"`<br>
  `git config user.email axi83@mail.ru`

7. Посмотреть настройки:<br>
  все установленные настройки: `git config --list`<br>
  только глобальные настройки: `git config --global --list`(файл настроек .gitconfig храниться в папке пользователя компьютера)

8. Открыть файл .gitconfig:<br>
  в терминале: `cat ~/.gitconfig`<br>
  для редактирования: `git config --global -e`

9. Удалить локалные настройки:<br>
  имя пользователя: `git config --unset user.name`<br>
  почту: `git config --unset user.email`<br>
  всю секцию user: `git config --remove-section user`