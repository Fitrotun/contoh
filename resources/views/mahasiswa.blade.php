@extends('layout')
@section('konten')
<h3>Halaman Mahasiswa</h3>

<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
    </tr>
    
        @php
        $no=0;
        @endphp
        @foreach ($datamahasiswa as $data)
         @php $no++; @endphp
           
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $data -> nama}}</td>
                <td>{{ $data -> jurusan}}</td>
                <td>{{ $data -> fakultas}}</td>
                </tr>
        @endforeach
    
    
</table>


@endsection






