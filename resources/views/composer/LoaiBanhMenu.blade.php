@foreach($items as $item)
    <li><a href="loai-{{$item->idloaibanh}}"> {{$item->tenloai}}</a></li>
@endforeach
