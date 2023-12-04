@extends('template')
@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Quantity</th>
            <th scope="col" class="text-center">Total Price</th>
        </tr>
    </thead>
    <tbody>
        @if(session()->exists('data'))
        @foreach(session()->get('data') as $v)
        <tr>
            <td class="text-center">{{$v['name']}}</td>
            <td class="text-center">{{$v['qty']}}</td>
            <td class="text-center">{{$v['total']}}</td>
        </tr>
        @endforeach
        <tr>
            <th colspan="2" class="text-center">sub-total</th>
            <td class="text-center">{{session()->get('total')}}</td>
        </tr>
        @else
        <h3>Tidak ada Data</h3>
        @endif
    </tbody>
</table>

@stop