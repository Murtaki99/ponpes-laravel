@php
    use Carbon\Carbon;
@endphp
@foreach ($students as $student )
    <div class="modal fade" id="modalDetail{{ $student->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">DETAIL DATA SANTRI</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center mb-5">
                    <div class="card" style="width: 26rem;">
                        <div class="card-body d-flex justify-content-center p-2">
                            <img src="asset/foto/" class="img-thumbnail" style="width: 150px;
                            height:150px">
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-block">
                                <label class="text-muted">No Induk Siswa Nasional</label>
                                <br>
                                <span class="fw-bold">
                                    {{ $student->nisn }}
                                </span>
                            </li>
                            <li class="list-group-item">
                                <label class="text-muted">Nama Lengkap</label>
                                <br>
                                <span class="fw-bold">
                                    {{ $student->name }}
                                </span>
                            </li>
                            <li class="list-group-item">
                                <label class="text-muted">Jenis Kelamin</label>
                                <br>
                                <span class="fw-bold">
                                    {{ $student->gender }}
                                </span>
                            </li>
                            <li class="list-group-item">
                                <label class="text-muted">Tanggal Lahir</label>
                                <br>
                                <span class="fw-bold">
                                    {{ Carbon::parse($student->birthday)->isoFormat('D MMMM Y', 'Do MMMM Y', 'id') }}
                                </span>
                            </li>
                            <li class="list-group-item">
                                <label class="text-muted">Alamat</label>
                                <br>
                                <span class="fw-bold">
                                    {{ $student->address }}
                                </span>
                            </li>
                            <li class="list-group-item">
                                <label class="text-muted">Tahun Angkatan</label>
                                <br>
                                <span class="fw-bold">
                                    {{ $student->class_year }}
                                </span>
                            </li>
                        </ul>
                        <img src="asset/qr/" class="img-thumbnail" style="width: 100px;
                        height:100px">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach