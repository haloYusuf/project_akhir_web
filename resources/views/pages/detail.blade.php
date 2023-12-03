@extends('template')
@section('content')

<form action="" method="post">
    <table class="table table-borderless">
        <tr>
            <th>Product Name</th>
            <th>:</th>
            <td>{{$data['ProductName']}}</td>
        </tr>
        <tr>
            <th>Qty per Unit</th>
            <th> : </th>
            <td>{{$data['QuantityPerUnit']}}</td>
        </tr>
        <tr>
            <th>Unit Price</th>
            <th> : </th>
            <td>{{$data['UnitPrice']}}</td>
        </tr>
        <tr>
            <th>Units in Stock</th>
            <th> : </th>
            <td>{{$data['UnitsInStock']}}</td>
        </tr>
        <tr>
            <th>Units on Order</th>
            <th> : </th>
            <td>{{$data['UnitsOnOrder']}}</td>
        </tr>
        <tr>
            <th>Reorder Level</th>
            <th> : </th>
            <td>{{$data['ReorderLevel']}}</td>
        </tr>
        <tr>
            <th>Discontinued</th>
            <th> : </th>
            <td>{{$data['Discontinued']}}</td>
        </tr>
        <tr>
            <th>Qty Buy</th>
            <th> : </th>
            <td><input type="number" class="form-control" name="qty" placeholder="Input Quantity" min="1" required></td>
        </tr>
    </table>
    <input type="hidden" class="form-control" name="nama" value="{{$data['ProductName']}}" required>
    <button type="submit" class="btn btn-success mt-3" style="width:100%">Submit</button>
</form>

@stop