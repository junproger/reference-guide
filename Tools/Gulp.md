- [Полезные ссылки](#полезные-ссылки)
- [Алгоритм настройки](#алгоритм-настройки)

## Полезные ссылки
* Официальный сайт Gulp https://gulpjs.com/ 
* Официальный сайт npm https://www.npmjs.com/ 
* Официальный сайт Browsersync https://browsersync.io/ 

## Алгоритм настройки
1. Инициализировать проект с настройкой по-умолчанию: `npm init -y`
2. Установить gulp локально: `npm i -D gulp`
   (для глобальной установки gulp используется команда `npm i -g gulp-cli`)
3. Создать скрипт в файле `package.json` для возможности запуска gulp из проекта в терминале командой `gulp`   
```json
"scripts": {
    "gulp": "gulp"
}
```
4. Создать структуру папок и файлов проекта
5. Создать в корневой директории проекта файл `gulpfile.js` 
6. Импортировать gulp 
```javascript
const { src, dest, series, parallel, watch } = require('gulp');
```
7. Создать task для копирования файлов из одной папки в другую
```javascript
function copy() {
    return src('src/styles/*.scss').pipe(dest('dist'));
}

exports.copy = copy;
```