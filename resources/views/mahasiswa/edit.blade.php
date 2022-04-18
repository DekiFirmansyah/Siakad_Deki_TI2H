@extends('mahasiswa.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Edit Mahasiswa</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Mahasiswa->nim }}" aria-describedby="Nim" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}" aria-describedby="Nama" >
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select class="form-control" name="Kelas">
                            @foreach($kelas as $kls)
                                <option value="{{$kls->id}}" {{ $Mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{$kls->nama_kelas}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="text" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->jurusan }}" aria-describedby="Jurusan" >
                        </div>
                        <div class="form-group">
                            <label for="Tanggal lahir">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $Mahasiswa->tgl_lahir }}" ariadescribedby="tgl_lahir" >
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="Email" class="form-control" id="Email" value="{{ $Mahasiswa->email }}" ariadescribedby="Email">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="Alamat" value="{{ $Mahasiswa->alamat }}" ariadescribedby="Alamat" >
                        </div>
                        <div class="form-group">
                            <label for="image">Foto Profil</label>
                            <input type="file" name="foto" class="form-control" value="{{ $Mahasiswa->foto }}" id="Foto" ariadescribedby="Foto" >
                            <img style="width: 100%" src="{{ asset('./storage/'. $Mahasiswa->foto) }}" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection