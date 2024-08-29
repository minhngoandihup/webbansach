@extends('layout')
@section('title', 'Khuyến mãi')
@section('content')
    <h1>Trang khuyến mãi nè</h1>
    @foreach($khuyenmai as $products)
                    <tr>
                        <td>{{ $khuyenmai->id }}</td>
                        <td>{{ $khuyenmai->name }}</td>
                        <td>{{ $khuyenmai->price }}</td>
                        <td>{{ $khuyenmai->quantity }}</td>
                    </tr>
    @endforeach
@endsection