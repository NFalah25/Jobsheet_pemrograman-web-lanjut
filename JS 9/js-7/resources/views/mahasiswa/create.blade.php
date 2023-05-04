@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width:24rem">
            <div class="card-header">
                Tambah Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whopps!</strong> There were some problems with yout input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>

                @endif
                <form action="{{route('mahasiswa.store')}}" method="post" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control">
                            @foreach ($kelas as $kls)
                                <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="jurusan" name="jurusan" class="form-control" id="jurusan"
                            aria-describedby="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">No_Hanphone</label>
                        <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                            aria-describedby="no_handphone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
