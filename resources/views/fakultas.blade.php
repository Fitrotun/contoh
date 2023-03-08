@extends('layout')
@section('konten')
<h3>Halaman Fakultas</h3>

<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama Fakultas</th>
    </tr>
    
        @php
        $no=1;
        foreach ($namafakultas as $data) {
           $nomor=$no++;
           
            echo "<tr>
                <td>$nomor</td>
                <td>$data</td>
                </tr>";
        }
    @endphp
    
</table>


@endsection






