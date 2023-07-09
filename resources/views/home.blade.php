
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-5">
                        <h3>Import Data</h3>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible" style="width:100%;">
                                <strong>{{ session('success') }}</strong> 
                                <button class="close btn btn-transparent" style="float:right; font-weight:bolder; margin-top:-12px; margin-right:-30px; font-size:20px" data-dismiss="alert" aria-label="close">&times;</button>
                            </div>
                        @endif
        
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="file" accept=".xlsx, .xls">
                                <button type="submit" class="input-group-append btn btn-secondary">
                                    Import
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="mb-5">
                        <h3>Carian Profil</h3>
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="query" value="{{ $query ?? '' }}" placeholder="Search by No Tentera">
                                <button type="submit" class="input-group-append btn btn-secondary">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div style="width: 100%">
                        @if(isset($profiles))
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No Tentera</th>
                                        <th>Nama</th>
                                        <th>Tarikh Lahir</th>
                                        <th>No Ic Awam</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profiles as $profile)
                                        <tr>
                                            <td>{{ $profile->no_tentera }}</td>
                                            <td>{{ $profile->nama }}</td>
                                            <td>{{ $profile->tarikh_lahir->format('d/m/Y') }}</td>
                                            <td>{{ $profile->no_ic_awam }}</td>
                                            <td>
                                                <a href="{{ route('profile', ['id' => $profile->id]) }}"><i class="bi bi-person-circle" style="font-size: 25px;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
