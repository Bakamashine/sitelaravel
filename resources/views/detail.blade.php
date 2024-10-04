@include ("layouts.header")
<html>
    <h1 class="text-center">Объявление</h1>
    <p>Название товара: {{$bb->title}}</p>
    <p>Описание: {{$bb->content}}</p>
    <p>Цена: {{$bb->price}}</p>
    <a href="/">На перечень объявлений</a>
</html>
