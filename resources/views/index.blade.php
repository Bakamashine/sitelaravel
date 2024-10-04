@include ("layouts.header")
<html>
        {{-- <table class="section-1-table-index"> --}}
        {{--     <tr> --}}
        {{--         <td class="section-1-td-index"><h3>id</h3></td> --}}
        {{--         <td class="section-1-td-index"><h3>Название товара</h3></td> --}}
        {{--         <td class="section-1-td-index"><h3>Описание товара</h3></td> --}}
        {{--         <td class="section-1-td-index"><h3>Цена товара</h3></td> --}}
        {{--     </tr> --}}
        {{--     @foreach ($bbs as $bb) --}}
        {{--         <tr style="border: 1px solid black"> --}}
        {{--             <td><a href="{{$bb->id}}">{{$bb->id}}</a></td> --}}
        {{--             <td>{{$bb->title}}</td> --}}
        {{--             <td>{{$bb->content}}</td> --}}
        {{--             <td>{{$bb->price}}</td> --}}
        {{--         </tr> --}}
        {{--     @endforeach --}}
        {{-- </table> --}}
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">&#10031</th>
      <th scope="col">Имя товара</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($bbs as $bb)
    <tr>
        <th scope="row"><a href="{{$bb->id}}">Подробнее...</a></th>
      <td>{{$bb->title}}</td>
      <td>{{$bb->content}}</td>
      <td>{{$bb->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</html>
