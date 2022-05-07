# Как сделать предупреждение об использовании cookie на сайте без плагина используя локальное хранилище ([источник](https://digital-boom.ru/coding/kak-sdelat-preduprezhdenie-ob-ispolzovanii-cookie-na-sajte-bez-plagina-ispolzuya-lokalnoe-hranilishhe.html))

>При каждой загрузке страницы выполняется коротенькая функция, которая проверяет объект Local Storage по ключу «cookieDate». Значение этого ключа будет дата соглашения отдельного пользователя с тем, что ваш сайт использует cookie в системе UNIX. UNIX время - это количество секунд, прошедших с полуночи (00:00:00 UTC) 1 января 1970 года. Если прошло уже больше года с момента, когда мы показывали пользователю предупреждение, то есть если дата была получена по ключу и она на год (точнее, на 31536000000 миллисекунд) меньше текущей даты - мы показываем предупреждение, добавив ему класс «.show». Также мы показываем это предупреждение в случае, если указанного ключа вообще не было в локальном хранилище. Это означает, что человек на нашем сайте впервые. В противном случае мы ничего не делаем, и пользователь просто не видит предупреждение, потому что по умолчанию оно скрыто.

Html-разметку поместить в футер сайта (в самый низ). Если сайт на CMS, то ищите у него в корне шаблона файл `footer.php`. Если простенький одностраничный сайт, то в самом низу перед закрывающим тегом `</footer>`.

```html
<div id="cookie_notification">
        <p>Для улучшения работы сайта и его взаимодействия с пользователями мы используем файлы cookie. Продолжая работу с сайтом, Вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего браузера.</p>
        <button class="button cookie_accept">Принять</button>
</div>
```

Стили CSS поместить в конец основного файла стилей.
```css
#cookie_notification{
  display: none;
  justify-content: space-between;
  align-items: flex-end;
  position: fixed;
  bottom: 15px;
  left: 50%;
  width: 900px;
  max-width: 90%;
  transform: translateX(-50%);
  padding: 25px;
  background-color: white;
  border-radius: 4px;
  box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.4);
}

#cookie_notification p{
  margin: 0;
  font-size: 0.7rem;
  text-align: left;
  color: $color_text;
}


@media (min-width: 576px){
  #cookie_notification.show{
    display: flex;
  }
  .cookie_accept{
    margin: 0 0 0 25px;
  }
}

@media (max-width: 575px){
  #cookie_notification.show{
    display: block;
    text-align: left;
  }
  .cookie_accept{
    margin: 10px 0 0 0;
  }
}
```

Код со скриптами JS нужно добавить в основной скриптовый файл (если их несколько), который срабатывает абсолютно на всех страницах сайта.
```js
function checkCookies(){
    let cookieDate = localStorage.getItem('cookieDate');
    let cookieNotification = document.getElementById('cookie_notification');
    let cookieBtn = cookieNotification.querySelector('.cookie_accept');

    // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
    if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
        cookieNotification.classList.add('show');
    }

    // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
    cookieBtn.addEventListener('click', function(){
        localStorage.setItem( 'cookieDate', Date.now() );
        cookieNotification.classList.remove('show');
    })
}
checkCookies();
```