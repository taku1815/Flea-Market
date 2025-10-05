@extends('layouts.default')
<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title', '商品一覧')

@section('content')
    <form class="form" action="/logout" method="post">
         @csrf
        <button class="header-nav__button">ログアウト</button>
    </form>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>nationality</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                </tr>
            @endforeach
        </table>
@endsection