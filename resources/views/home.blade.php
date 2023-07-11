
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
                                <button class="close btn btn-transparent" style="position: absolute; top:5px; right:0; font-weight:bolder; font-size:20px" data-dismiss="alert" aria-label="close">&times;</button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button class="close btn btn-transparent" style="position: absolute; top:5px; right:0; font-weight:bolder; font-size:20px" data-dismiss="alert" aria-label="close">&times;</button>
                            </div>
                        @endif
        
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="file" accept=".xlsx, .xls">
                                <button type="submit" class="input-group-append btn btn-secondary">
                                    Import Data User
                                </button>
                            </div>
                        </form>
        
                        <form action="{{ route('importMarkah') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="file" accept=".xlsx, .xls">
                                <button type="submit" class="input-group-append btn btn-secondary">
                                    Import Data Pendorong
                                </button>
                            </div>
                        </form>
                        <p style="font-style: italic; margin-left: 10px; margin-top: -10px; color: grey;">Sila sahkan bahawa fail dan formatnya adalah betul.</p>
                    </div>
                    <div class="mb-5">
                        <h3>Carian Profil</h3>
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="query" value="{{ $query ?? '' }}" placeholder="Carian mengikut No Tentera">
                                <button type="submit" class="input-group-append btn btn-secondary">
                                    Cari
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
                                    @forelse($profiles as $profile)
                                        <tr>
                                            <td>{{ $profile->no_tentera }}</td>
                                            <td>{{ $profile->nama }}</td>
                                            <td>{{ $profile->tarikh_lahir->format('d/m/Y') }}</td>
                                            <td>{{ $profile->no_ic_awam }}</td>
                                            <td>
                                                <a href="{{ route('profile', ['id' => $profile->id]) }}"><i class="bi bi-person-circle" style="font-size: 25px; margin-left: 20px; margin-right: 5px;"></i></a>
                                                <a href="{{ route('result', ['id' => $profile->id]) }}"><i class="bi bi-percent" style="font-size: 25px; color:green;"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" style="text-align: center;">No Tentera tidak ditemui</td>
                                        </tr>
                                    @endforelse
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
