@extends('layouts.main')
@section('main')
@include('layouts.topbar')
    <section>
        <div class="container pt-3 mb-5">
            <div class="justify-content-center pt-5">
                <div class="container">
                    <div class="d-flex justify-content-between p-2 bg-success-subtle">
                        <h3 class="fw-bold">{{ $title }}</h3>
                        <a href="{{ route('student.create') }}" class="btn btn-light btn-sm"><i class="bi bi-person-plus-fill align-items-lg-end"></i> Tambah</a>
                    </div>
                    <div class="card p-2">
                        <form id="containerValue" action="cetak/card.php" method="POST" target="_blank">
                            <button type="submit" form="containerValue"
                                class="btn btn-danger btn-sm d-none d-sm-inline m-1"><i
                                    class="bi bi-printer-fill"></i></button>
                            <button type="button" class="btn btn-success btn-sm d-none d-sm-inline mb-1"
                                id="btnPilihSemua">Pilih Semua</button>
                            <table class="table table-striped">
                                <tbody>
                                    @foreach ($students as $student )
                                    <tr>
                                        <td class="p-1 col-1 text-start">
                                            <input class="form-check-input" type="checkbox" name="selected_santri[]"
                                                value="">
                                            <a href="" data-bs-target="#modalDetail{{ $student->id }}" data-bs-toggle="modal">
                                                <img src="asset/foto/" class="rounded-circle"
                                                    style="width: 40px; height: 40px;">
                                            </a>
                                        </td>
                                        <td class="p-1 col-4">
                                            <small class="fs-sm-6">
                                                {{ $student->name }}
                                            </small><br>
                                            <small class="text-muted fs-6">
                                                {{ $student->nisn }}
                                            </small>
                                        </td>
                                        <td class="p-1 col-1 text-end">
                                            <a data-bs-target="#modalUpdate" data-bs-toggle="modal"><i
                                                    class="bi bi-pencil-square text-warning"></i></a>
                                            <a data-bs-target="#modalDelete" data-bs-toggle="modal"><i
                                                    class="bi bi-x-circle-fill text-danger"></i></a>
                                        </td>
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-2">{{ $students->links() }}</div>
        </div>
    </section>
    @include('dashboard.students.show')
@endsection