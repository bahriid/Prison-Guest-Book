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

                    <h4 class="card-title">Pilih Penanggung Jawab</h4>
                    <p class="card-title-desc">Silahkan pilih penanggung jawab di bawah ini.</p>
                    <form action="{{ route('dashboard.document.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-10">
                                <input class="form-control" type="hidden" name="id" value="{{ $document['id'] }}"
                                    id="example-text-input">
                                <select class="form-control" name="officer_id">
                                    <option>Select</option>
                                    @foreach ($officer as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                </select>
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