@extends('template')
@section('content')

<table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col" class="text-center">Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $v)
        <tr>
            <td class="text-center"><a href="/produk/{{$v['CategoryID']}}">{{$v['CategoryName']}}</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop