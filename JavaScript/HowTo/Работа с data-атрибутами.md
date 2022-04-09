# Работа с data-атрибутами
```html
<div>
  <div class="item" data-color="#f00">Text</div>
  <div class="item" data-color="#0f0">Text</div>
  <div class="item" data-color="#00f">Text</div>
</div>
```
```javascript
/* Пример: смена цвета текста при клике на div с получением цвета из data-атрибута */
document.querySelectorAll('.item').forEach(el => el.addEventListener('click', changeColor));

function changeColor() {
  console.log(this.dataset);
  this.style.color = this.dataset.color;
}
```
