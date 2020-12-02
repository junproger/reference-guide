[TOC]

## Настройка ESLint

### Установка необходимых утилит
1. Установите LTS (Latest) версию nodejs (https://nodejs.org/en/)
2. В терминале перейдите в корневую папку проекта
3. Вызовите команду `npm init -y`, которая создаст файл package.json
4. Установите необходимые пакеты командой
`npm install eslint babel-eslint eslint-config-airbnb-base eslint-config-prettier eslint-plugin-import -D`
5. Добавьте файл с названием `.eslintrc.js` в корневую папку проекта

### Настройка плагина для VSCode
1. Установите плагин для VSCode (https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
2. Перезагрузите VSCode
   
Теперь в редакторе будут подчеркиваться красным синтаксические ошибки в коде. Так же будут подчеркиваться те части кода, которые написаны не лучшим образом и могут привести к ошибкам.

### Содержимое файла .eslintrc.js
```js
module.exports = {
    extends: ["airbnb-base", "prettier"],
    parser: "babel-eslint",
    env: {
        browser: true,
        es6: true,
        jest: true,
    },
    rules: {
        "no-console": 0,
        "import/prefer-default-export": 0,
        "prefer-template": 0,
    },
};
```