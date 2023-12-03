@extends('template')
@section('content')

<table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col" class="text-center">Id</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Unit Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $v)
        <tr>
            <td class="text-center">{{$v['ProductID']}}</td>
            <td class="text-center">{{$v['ProductName']}}</td>
            <td class="text-center">{{$v['UnitPrice']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop