'use strict';

// Создание поверхностных копий массива oldArray
const oldArray = ['a', 'b', 'c'];

// С помощью цикла for
function copyArray(mainArray) {
  const tempArray = [];
  for(let i = 0; i < mainArray.lenght; i++) {
    tempArray[i] = mainArray[i];
  }
  return tempArray;
}
const newArray1 = oldArray.slice();
newArray1[0] = '1';

// С помощью метода slice
const newArray2 = oldArray.slice();
newArray2[0] = '2';

// С помощью spread-оператора
const newArray3 = [...oldArray];
newArray3[0] = '3';

// Вывод результатов
console.log(oldArray);  // [ 'a', 'b', 'c' ]
console.log(newArray1); // [ '1', 'b', 'c' ]
console.log(newArray2); // [ '2', 'b', 'c' ]
console.log(newArray3); // [ '3', 'b', 'c' ]