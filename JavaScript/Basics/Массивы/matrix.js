let matrix = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
]

// красивый вывод матрицы
function showMatrix(matrix) {
  for (let i = 0; i < matrix.length; i++) {
    console.log(matrix[i].join(' '));
  }
}
showMatrix(matrix);