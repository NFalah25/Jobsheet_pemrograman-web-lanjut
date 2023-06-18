@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
            <form action="" method="GET">
                <div class="row">
                    <div class="col-4">
                        <input type="text" class="form-control" name="nama" placeholder="Cari nama Mahasiswa"
                            aria-label="First name">
                    </div>
                    <div class="col-4">
                        <button class="btn btn-warning" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        <div class="float-right my-2">
            <a href="{{route('mahasiswa.create')}}" class="btn btn-success">Input Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p> {{$message}} </p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Hanphone</th>
        <th>Email</th>
        <th>tanggal_lahir</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $Mahasiswa )
    <tr>
        <td> {{$Mahasiswa->Nim}} </td>
        <td> {{$Mahasiswa->nama}} </td>
        <td> {{$Mahasiswa->kelas->nama_kelas}} </td>
        <td> {{$Mahasiswa->jurusan}} </td>
        <td> {{$Mahasiswa->no_handphone}} </td>
        <td>{{ $Mahasiswa->email }}</td>
        <td>{{ $Mahasiswa->tanggal_lahir }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy', $Mahasiswa->Nim) }}" method="post">
                <a href="{{ route('mahasiswa.show', $Mahasiswa->Nim)}}" class="btn btn-info">Show</a>
                <a href="{{ route('mahasiswa.edit', $Mahasiswa->Nim)}}" class="btn btn-primary">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
