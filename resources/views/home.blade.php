@extends('layouts.mainLayout')

@section('title', 'Home')

@section('content')
    <h1>Ini halaman Home</h1>
    <p>Selamat Datang, {{ $name }}</p>

    {{-- @if ($role == 'Admin')
            <a href="">Ke Halaman Admin</a>
        @elseif ($role == 'Staf')
            <a href="">Ke Halaman Gudang</a>
        @endif --}}

    {{-- @switch($role)
            @case('Admin')
                <a href="">Ke Halaman Admin</a>
            @break

            @case('Staf')
                <a href="">Ke Halaman Gudang</a>
            @break

            @default
        @endswitch --}}

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
