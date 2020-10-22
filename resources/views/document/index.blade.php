@extends('layouts.navigation')
@section('title', 'Document')
@section('css')
<!-- Responsive Table css -->
<link href="{{url('assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <li class="breadcrumb-item active">Document</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="card-title">
                        {{-- <a type="button" href="{{ route('prisioner.create') }}"
                        class="btn btn-primary waves-effect waves-light">Tambah Tahanan</a> --}}
                    </div>
                    <p class="card-title-desc"></p>

                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-priority="1">Nama Tahanan</th>
                                        <th data-priority="1">Penanggung Jawab</th>
                                        <th data-priority="3">Nama</th>
                                        <th data-priority="3">Alamat</th>
                                        <th data-priority="3">Pekerjaan</th>
                                        <th data-priority="4">Tujuan</th>
                                        <th data-priority="2">Hubungan</th>
                                        <th data-priority="2">Tanggal Berakhir</th>
                                        <th data-priority="6">Status</th>
                                        <th data-priority="6">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($document as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['prisioner']['name']}}</td>
                                        <td>{{$item['officer']['name']}}</td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['address']}}</td>
                                        <td>{{$item['job']}}</td>
                                        <td>{{$item['purpose']}}</td>
                                        <td>{{$item['relationship']}}</td>
                                        <td>{{$item['expired']}}</td>
                                        <td>{{$item['status']}}</td>
                                        <td class="row button-items">
                                            @if($item['status'] == 'PENDING')
                                            <a href="{{ route('dashboard.document.show', $item['id']) }}"
                                                class="btn btn-success waves-effect waves-light">
                                                Setujui
                                            </a>
                                            @else
                                            <a href="{{ route('document.pdf', $item['user_id']) }}"
                                                class="btn btn-success waves-effect waves-light">
                                                Kirim PDF
                                            </a>
                                            <a href="{{ route('document.pdf', $item['user_id']) }}"
                                                class="btn btn-info waves-effect waves-light">
                                                Lihat PDF
                                            </a>
                                            @endif
                                            <form action="{{ route('dashboard.document.destroy', $item['id']) }}"
                                                method="POST" class="inline-block">
                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="12" class="border text-center p-5">
                                            Data Tidak Ditemukan
                                        </td>
                                    </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->

@endsection

@section('js')
<!-- Responsive Table js -->
<script src="{{url('assets/libs/admin-resources/rwd-table/rwd-table.min.js') }}"></script>
<!-- Init js -->
<script src="{{url('assets/js/pages/table-responsive.init.js') }}"></script>
<!-- App js -->
<script src="{{url('assets/js/app.js') }}"></script>
@endsection