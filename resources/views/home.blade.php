@extends('layouts.mainLayout')

@section('title', 'Home')

@section('content')
    <h1>Ini halaman Home</h1>
    <p>Selamat Datang, {{ $name }}</p>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach ($barang as $data)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{ $data }} </td>
            </tr>
        @endforeach
    </table>
@endsection
