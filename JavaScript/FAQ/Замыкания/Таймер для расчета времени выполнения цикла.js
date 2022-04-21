function stopWatch() {
  let timeStart = Date.now();
  function stopDelay () {
    let timeDelay = Date.now() - timeStart;
    console.log(timeDelay);
  }
  return stopDelay;
}
// замыкание времени старта выполнения цикла
let timer = stopWatch();
// выполнение цикла
for(let i = 1; i < 1000000; i++) {
  // любой код
}
// расчет и вывод времени выполнения цикла
timer();