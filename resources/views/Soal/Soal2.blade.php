@extends('Templates.Navbar')

@section('main')
<!-- Menu Bar -->
<div class="container text-center">
    <p class="pt-4">  
    <h3 class="font-weight-bold bg-warning text-white" style="font-family: 'Franklin Gothic Medium'"> SOAL 2 - PASSING DATA 2 VARIABLE ARRAY </h3>
        <h2 class="font-weight-bold bg-danger text-white">
        <p class="pt-2"> 
            @foreach ($data as $value)
                {{ $value }} |
            @endforeach
        </p>
        <p> Nilai Rata-Ratanya =  {{ $average }}</p>

    </h2>
    <h1 style="font-family: Brush Script MT">Daftar Nama Anggota</h1>
    <h3>
    <ul class="list-group" style="font-family: Brush Script MT">
        <li class="list-group-item bg-dark text-white">Anggota 1 : Ari Budianto (21104410038)</li>
        <li class="list-group-item bg-dark text-white">Anggota 2 : Moch Miftakhul Rizal (21104410044)</li>
        <li class="list-group-item bg-dark text-white">Anggota 3 : Muhammad Ikhsan Mandirri (21104410070)</li>
    </ul>
    </h3>
    </div>
   
@endsection
