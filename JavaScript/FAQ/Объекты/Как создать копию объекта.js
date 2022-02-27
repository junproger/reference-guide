'use strict';

// Создание поверхностных копий объекта oldObject
const oldObject = {
  'a': 0,
  'b': 2,
  'c': 3
};

// С помощью цикла for..in
function copyObject(mainObject) {
  const tempObject = {};
  for(let key in mainObject) {
    tempObject[key] = mainObject[key];
  }
  return tempObject;
}
const newObject1 = copyObject(oldObject);
newObject1.a = 1;

// С помощью метода assign
const newObject2 = Object.assign({}, oldObject);
newObject2.a = 2;

// С помощью spread-оператора
const newObject3 = {...oldObject};
newObject3.a = 3;

// Вывод результатов
console.log(oldObject);  // { a: 0, b: 2, c: 3 }
console.log(newObject1); // { a: 1, b: 2, c: 3 }
console.log(newObject2); // { a: 2, b: 2, c: 3 }
console.log(newObject3); // { a: 3, b: 2, c: 3 }