- [Что такое Markdown?](#что-такое-markdown)
    - [Полезные ссылки](#полезные-ссылки)
- [Базовый синтаксис](#базовый-синтаксис)
  - [Абзацы и перенос строки](#абзацы-и-перенос-строки)
  - [Заголовки](#заголовки)
  - [Акценты](#акценты)
  - [Цитаты](#цитаты)
  - [Списки](#списки)
  - [Исходный код](#исходный-код)
  - [Горизонтальная линия](#горизонтальная-линия)
  - [Ссылки](#ссылки)
  - [Изображения](#изображения)
  - [Таблицы](#таблицы)
  - [Эмодзи](#эмодзи)

# Что такое Markdown?
> Markdown - это язык разметки, используемый для форматирования документов всех типов, созданный Джоном Грубером и Аароном Шварцем в 2004 году, сегодня это один из самых популярных языков среди программистов. Кроме традиционного Markdown у разработчиков получил распространение дополненный и улучшеный вариант языка - Github Flavoured Markdown, сокращенно GFM.
### Полезные ссылки
- [Полное руководство по Markdown](https://ru.markdown.net.br/)

# Базовый синтаксис
Mожно смешивать Markdown и HTML. Если на какие-то элементы нужно поставить классы или атрибуты, смело используем HTML.

Для экранирования спецсимволов используется обратная косая черта `\`.
## Абзацы и перенос строки
Абзацы создаются при помощи пустой строки.

Чтобы сделать перенос строки, нужно поставить два пробела в конце предыдущей строки или добавить тег `<br>`.
## Заголовки
Заголовки отмечаются диезом `#` в начале строки, от одного до шести.

## Акценты
Один символ `*` для *наклонного текста*, два символа для **жирного текста**, три - для ***наклонного и жирного*** одновременно.
Два символа `~` для ~~зачеркнутого~~ текста.

## Цитаты
Цитаты оформляются с помощью символа `>`. Для вложенных цитат используются два и более символов `>>`.
> Цитата
>> Вложенная цитата

## Списки
Неупорядоченный список оформляется с помощью символа `-`.
- первый элемент
- второй элемент
  - вложенный элемент
- третий элемент

Упорядоченный список оформляется с помощью символа цифры с точкой.
1. первый элемент
2. второй элемент
   1. вложенный элемент
3. третий элемент

Чек-лист:
- [X] выполненная задача
- [ ] невыполненная задача
- [ ] невыполненная задача


## Исходный код
Для вставки кода внутри предложений нужно заключать этот код в апострофы: `<html class="ie no-js">`. Если внутри кода есть апостроф, то код надо обрамить двойными апострофами: ``There is a literal backtick (`) here``.

В чистом Маркдауне блоки кода отбиваются 4 пробелами в начале каждой строки, но в GFM можно поставить по три апострофа до и после кода и при необходимости указать язык исходного кода.
``` javascript
const a = 'Hi!';
console.log(a);
```

## Горизонтальная линия
Сосдается тремя дефисами `---`, перед и после горизонтальной линии необходимо помещать пустую строку.

## Ссылки
Cинтаксис Markdown для добавления ссылок:
1. текст ссылки в квадратных скобках: []
2. url в круглых скобках: ()
3. необязательный тайтл после url в кавычках

Это [ссылка](https://yandex.ru/ "Yandex") с тайтлом.
Эта [ссылка](https://yandex.ru/) без тайтла.
<https://yandex.ru/> - а это безанкорная ссылка.

Чтобы длинные url не затрудняли чтение текста, есть вариант присвоения каждой ссылке определенных меток: [Яндекс][id], [Яндекс][1], [Яндекс][2],
[Яндекс][]

[id]: https://yandex.ru/ "Сайт Яндекса"
[1]: https://yandex.ru/ 'Сайт Яндекса'
[2]: https://yandex.ru/ (Сайт "Яндекса")
[Яндекс]: https://yandex.ru/

## Изображения
Синтаксис Markdown для добавления изображения:
1. восклицательный знак: !.
2. альтернативный текст изображения в квадратных скобках: []
3. полный адрес изображения в круглых скобках: ()
4. необязательный заголовок в кавычках, по-прежнему в скобках: ("")

![Markdown](https://markdown.net.br/assets/img/basic-syntax/markdown-logo-small.png "Логотип Markdown")

Ссылке на картинку тоже можно присвоить определенный id:

![Картинка][logo]

[logo]: https://markdown.net.br/assets/img/basic-syntax/markdown-logo-small.png "Логотип Markdown"

Для создания изображение-ссылки надо создать обычную ссылку, поместить в квдратных скобках изображение, а в круглых url целевой страницы.

[![Markdown](https://markdown.net.br/assets/img/basic-syntax/markdown-logo-small.png "Логотип Markdown")](#)

## Таблицы
Колонки таблицы размечаются с помощью символа вертикальной черты `|`, а заголовок отделяется дефисами `-`. Можно управлять выравниванием столбцов в таблице при помощи двоеточия.

| Номер | Название | Цена |
| -- |:--:| --:|
| 1 | слон | $1 |
| 2 | кот | $200 |
| 3 | медведь | $30 |

## Эмодзи
:kissing_heart:
