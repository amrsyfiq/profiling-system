
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Pendorong') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($results->isEmpty())
                        <p>No results found.</p>
                    @else
                        <div>
                            @foreach ($results as $result)
                                <h3>Carian No Tentera: {{ $result->user->no_tentera }}</h3>

                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td><strong>UJIAN PENDORONG SENJATA MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SENJATA_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG SENJATA GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SENJATA_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG PERTOLONGAN CEMAS MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG PERTOLONGAN CEMAS GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG IMP MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_IMP_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG IMP GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_IMP_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG BACA PETA MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_BACA_PETA_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG BACA PETA GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_BACA_PETA_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG SEMBOYAN MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SEMBOYAN_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG SEMBOYAN GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SEMBOYAN_GRED ?? '-' }}</td>
                                    </tr>
                                </table>
                                <hr>
                            @endforeach
                        </div>
                    @endif

                    <a href="{{ route('home') }}">Back to Search</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
