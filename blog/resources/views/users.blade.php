@include('header')
<h1>Users Page</h1>
@include('inner')

@foreach ($users as $item )
<h3>{{$item}}</h3>
@endforeach

