@extends('layouts.main')
@section('main')
    @include('layouts.topbar')
    <section>
        <div class="container pt-3 mb-5">
            <div class="justify-content-center pt-5">
                <div class="container">
                    <div class="d-flex justify-content-between p-2 bg-success-subtle">
                        <h3 class="fw-bold">{{ $title }}</h3>
                    </div>
                    <div class="card p-lg-5 p-2">
                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-auto mb-2">
                                <label for="nisn">NISN</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional" value="{{ old('nisn') }}" >
                                @error('nisn')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" class="form-select form-select-sm @error('gender') is-invalid @enderror">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Prempuan">Perempuan</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="birthday">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" value="{{ old('birthday') }}">
                                @error('birthday')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="address">Alamat</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address">{{ old('address') }}</textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="class_year">Tahun Masuk</label>
                                <select name="class_year" id="class_year" class="form-control @error('class_year') is-invalid @enderror" >
                                    <option class="text-white">Select Year</option>
                                    @for ($tahun = 2000; $tahun <= date('Y'); $tahun++)
                                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                                    @endfor
                                </select>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-auto mb-2">
                                <label for="gambar">Foto/Gambar</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                            </div>
                            <div class="modal-footer p-2">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-success">SIMPAN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

