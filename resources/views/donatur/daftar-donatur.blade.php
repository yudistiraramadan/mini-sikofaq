@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <h3>Daftar Donatur</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>No Whatsapp/Hp</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($donatur as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->donatur_name }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->job }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
