# FAQ по Scss/Sass

## Как сделать миксин для размера элемента с выбором единицы измерения?
```scss
@mixin size($w, $h, $units: px) {
  width: #{$w}#{$units};
  height: #{$h}#{$units};
}

@include size(100, 100);      // width: 100px; height: 100px;
@include size(100, 100, '%'); // width: 100%; height: 100%;
```