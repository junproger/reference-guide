# Gulp

- [Gulp](#gulp)
  - [Полезные ссылки](#полезные-ссылки)
  - [Алгоритм настройки](#алгоритм-настройки)
  - [Что включает в себя сборка?](#что-включает-в-себя-сборка)
  - [Как перенести файлы проекта](#как-перенести-файлы-проекта)

## Полезные ссылки
* Официальный сайт Gulp https://gulpjs.com/ 
* Официальный сайт npm https://www.npmjs.com/ 
* Официальный сайт Browsersync https://browsersync.io/ 
* Официальный сайт Babel https://babeljs.io/

## Алгоритм настройки
1. Инициализировать проект с настройкой по-умолчанию: `npm init -y`
2. Установить gulp локально: `npm i -D gulp`
   (для глобальной установки утилиты командной строки gulp используется команда `npm i -g gulp-cli`)
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
7. Создать необходимые задачи (tasks)

## Что включает в себя сборка?
* [cross-env](https://www.npmjs.com/package/cross-env) - инструмент для достижения кросс-платформенной совместимости скриптов (`npm i -D cross-env`);
* [gulp-if](https://www.npmjs.com/package/gulp-if) - выбор варианта исполнения (`npm i -D gulp-if`);
* [del](https://www.npmjs.com/package/del) - удаление файлов и папок (`npm i -D del`);
* [browser-sync](https://browsersync.io/docs/gulp) - живая перезагрузка веб-страницы при внесении изменений в файлы проекта (`npm i -D browser-sync`);
* [gulp-concat](https://www.npmjs.com/package/gulp-concat) - объединение файлов (`npm i -D gulp-concat`);
* [gulp-sourcemaps](https://www.npmjs.com/package/gulp-sourcemaps) - карта стилей (`npm i -D gulp-sourcemaps`);
* [gulp-file-include](https://www.npmjs.com/package/gulp-file-include) - подключение файлов друг в друга (`npm i -D gulp-file-include`);
* [gulp-htmlmin](https://www.npmjs.com/package/gulp-htmlmin) - минификация html (`npm i -D gulp-htmlmin`);

* [gulp-sass](https://www.npmjs.com/package/gulp-sass) — компиляция SCSS в CSS (`npm install --save-dev node-sass gulp-sass`);
* [gulp-sass-glob](https://www.npmjs.com/package/gulp-sass-glob) - глобальный импорт sass-файлов (`npm i -D gulp-sass-glob`);
* [gulp-postcss](https://www.npmjs.com/package/gulp-postcss) - подключение к проекту PostCSS (`npm i -D gulp-postcss`);
* [postcss-pxtorem](https://www.npmjs.com/package/postcss-pxtorem) - перевод px в rem (`npm i -D postcss-pxtorem`); 
* [autoprefixer](https://www.npmjs.com/package/autoprefixer) — автоматически расставляет вендорные префиксы в CSS (`npm i -D autoprefixer`);
* [cssnano](https://www.npmjs.com/package/cssnano) - минификация css (`npm i -D cssnano`); 
* [gulp-group-css-media-queries](https://www.npmjs.com/package/gulp-group-css-media-queries) - группировка медиазапросов (`npm i -D gulp-group-css-media-queries`);
* 
* [gulp-babel](https://www.npmjs.com/package/gulp-babel) - использование ES6 с [Babel](https://babeljs.io/) (`npm i -D gulp-babel @babel/core @babel/preset-env`);
* [gulp-uglify](https://www.npmjs.com/package/gulp-uglify) — минификация JS-файлов (`npm i -D gulp-uglify`);

* [gulp-imagemin](https://www.npmjs.com/package/gulp-imagemin) — сжатие изображений PNG, JPG, GIF и SVG (`npm i -D gulp-imagemin`);
* [gulp-svgo](https://www.npmjs.com/package/gulp-svgo) - оптимизация svg (`npm i -D gulp-svgo`);
* [gulp-svg-sprite](https://www.npmjs.com/package/gulp-svg-sprite) — создание SVG-спрайтов (`npm i -D gulp-svg-sprite`);
* [gulp-changed](https://www.npmjs.com/package/gulp-changed) - запускает таски только для изменившихся файлов (`npm i -D gulp-changed`);

* [gulp-favicons](https://github.com/evilebottnawi/favicons) — генератор фавиконок для вашего проекта (`npm i -D gulp-favicons`);
* [gulp-replace](https://www.npmjs.com/package/gulp-replace) - замена строк (`npm i -D gulp-replace`);
* 
* [imagemin-pngquant](https://www.npmjs.com/package/imagemin-pngquant) — дополнение к gulp-imagemin для работы с PNG-изображениями;
* [imagemin-jpeg-recompress](https://www.npmjs.com/package/imagemin-jpeg-recompress) — дополнение к gulp-imagemin для работы с JPG-изображениями;
* [gulp-iconfont](https://www.npmjs.com/package/gulp-iconfont) — генератор иконочного шрифта из SVG-изображений;
* [gulp-iconfont-css](https://www.npmjs.com/package/gulp-iconfont-css) — генератор стилей для иконочного шрифта;
* [gulp-newer](https://www.npmjs.com/package/gulp-newer) — дополнительный плагин к ```gulp-imagemin```, позволяет сжимать только новые изображения;
* 
* [gulp-clean](https://www.npmjs.com/package/gulp-clean) — удаление файлов и папок.
* [gulp-rigger](https://www.npmjs.com/package/gulp-rigger) - позволяет вставлять содержимое из отдельных файлов в основной;
* [gulp-clean-css](https://www.npmjs.com/package/gulp-clean-css) — минификация CSS-файлов;
* [gulp-rename](https://www.npmjs.com/package/gulp-rename) — переименование файлов, добавление суффиксов и префиксов (например, добавление суффикса .min к минифицированным файлам);
* [gulp-plumber](https://www.npmjs.com/package/gulp-plumber) — оповещения в командной строке (например, ошибки в SCSS/Sass);
* [gulp-debug](https://www.npmjs.com/package/gulp-debug) — отладка в терминале;
* [gulp-watch](https://www.npmjs.com/package/gulp-watch) — отслеживание изменений в ваших файлах проекта;
## Как перенести файлы проекта
1. Скопировать папку `src`, файлы `gulpfile.js` и `package.json`
2. Запустить в терминале из папки нового проекта команду `npm i`
