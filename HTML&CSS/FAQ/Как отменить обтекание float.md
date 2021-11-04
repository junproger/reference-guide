## Как отменить обтекание float

```html
<div class="wrapper">
    <div class="image"></div>
    <p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores nostrum architecto, molestias sequi, magni libero modi,   totam ratione saepe non accusantium necessitatibus incidunt vero   adipisci inventore placeat assumenda porro!            
    </p>
</div>
<p class="text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores nostrum architecto, molestias sequi, magni libero modi, totam ratione saepe non accusantium necessitatibus incidunt vero adipisci inventore placeat assumenda porro!        
</p>
```

```css
.image {
    margin: 10px;
    float: left;
    width: 100px;
    height: 100px;
    background-color: lightblue;
}

.wrapper::after {
    content: '';
    display: block;
    clear: both;
}
```

![](/assets/images/2021-01-11-12-03-06.png)