'use strict';

const me = {
  name: 'Aleksandra',
  age: 38,
  skills: {
    html: '70%',
    css: '50%',
    js: '10%'
  }
};

// вывод значений всех свойств объекта включая значения вложенных объектов с помощью рекурсии
function printObj(obj) {
  for(let key in obj) {
    if(typeof obj[key] === 'object') {
      printObj(obj[key]);
    } else {
      console.log(`Свойство ${key} имеет значение ${obj[key]}`);
    }
  }
}

printObj(me);