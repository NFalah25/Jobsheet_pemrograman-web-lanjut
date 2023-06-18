@extends('mahasiswa.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{route('mahasiswa.update', $mahasiswa->Nim)}}" method="post" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" value="{{$mahasiswa->Nim}}"
                            aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$mahasiswa->nama}}"
                            aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        {{-- <input type="kelas" name="kelas" class="form-control" id="kelas" value="{{$Mahasiswa->kelas}}"
                            aria-describedby="kelas"> --}}
                        <select name="kelas" class="form-control">
                            @foreach ($kelas as $kls)
                                <option value="{{$kls->id}}" {{$mahasiswa->kelas_id == $kls->id ? 'selected' : ''}}> {{$kls->nama_kelas}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                            value="{{$mahasiswa->jurusan}}" aria-describedby="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">No_Handphone</label>
                        <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                            value="{{$mahasiswa->no_handphone}}" aria-describedby="no_handphone">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $Mahasiswa->email }}" ariadescribedby="email">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal_lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                            value="{{ $Mahasiswa->tanggal_lahir }}" ariadescribedby="tanggal_lahir">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
