@extends('layouts.navigation')
@section('title', 'Tahanan')
@section('css')
<!-- App Css-->
<link href="{{url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tahanan</a>
                        </li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            @if ($errors->any())
            <div class="mb-5" role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    There's something wrong!
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </p>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tambah Tahanan</h4>
                    <p class="card-title-desc">Silahkan isi data tahanan di bawah ini.</p>
                    <form action="{{ route('prisioner.update', $item['id']) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name"
                                    value="{{ old('name') ?? $item['name'] }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nomor Tahanan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="prisioner_number"
                                    value="{{ old('prisioner_number') ?? $item['prisioner_number'] }}"
                                    id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="birth_address"
                                    value="{{ old('birth_address') ?? $item['birth_address'] }}"
                                    id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" name="birth_days"
                                    value="{{ old('birth_days') ?? $item['birth_days'] }}" id="example-date-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Umur</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="age"
                                    value="{{ old('age') ?? $item['age'] }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <select class="form-control" name="gender">
                                    <option>Select</option>
                                    <option value="MALE">Laki - Laki</option>
                                    <option value="FEMALE">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Kebangsaan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="nasionality"
                                    value="{{ old('nasionality') ?? $item['nasionality'] }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Alamat Lengkap</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="address"
                                    value="{{ old('address') ?? $item['address'] }}" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Agama</label>
                            <div class="col-md-10">
                                <select class="form-control" name="religion">
                                    <option>Select</option>
                                    <option value="ISLAM">Islam</option>
                                    <option value="KRISTEN">Kristen</option>
                                    <option value="BUDHA">Budha</option>
                                    <option value="HINDU">Hindu</option>
                                    <option value="OTHER">Lain Lain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Pekerjaan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="job"
                                    value="{{ old('job') ?? $item['job'] }}" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->

@endsection

@section('js')
<!-- App js -->
<script src="{{url('assets/js/app.js') }}"></script>
@endsection