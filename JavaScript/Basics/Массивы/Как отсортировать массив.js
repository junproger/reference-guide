'use stict';

// Сортировка массива строк
const arrStrs = ['d', 'b', 'c', 'e', 'a'];
arrStrs.sort();
console.log(arrStrs); // [ 'a', 'b', 'c', 'd', 'e' ]

// Сортировка массива чисел
const arrNums = [7, 1, 27, 25, 17];
arrNums.sort();
console.log(arrNums); // [ 1, 17, 25, 27, 7 ]

// Метод sort сортирует любые элементы массива как строки,
// поэтому для сортировки числовых массивов необходимо использовать колбек функцию
arrNums.sort(compareNum);
function compareNum(a, b) {
  return a - b;
}
console.log(arrNums); // [ 1, 7, 17, 25, 27 ]