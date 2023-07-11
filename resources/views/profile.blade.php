
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($profiles->isEmpty())
                        <p>No profiles found.</p>
                    @else
                        <div>
                            @foreach ($profiles as $profile)
                                <h3>Carian No Tentera: {{ $profile->no_tentera }}</h3>
      
                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td><strong>Nama: </strong></td>
                                        <td colspan="5">{{ $profile->nama ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>No IC Awam: </strong></td>
                                        <td colspan="2">{{ $profile->no_ic_awam ?? '-' }}</td>
                                        <td><strong>Kompeni: </strong></td>
                                        <td colspan="2">{{ $profile->kompeni ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Tarikh Lahir: </strong></td>
                                        <td colspan="2">{{ $profile->tarikh_lahir->format('d/m/Y') ?? '-' }}</td>
                                        <td><strong>Negeri Kelahiran: </strong></td>
                                        <td colspan="2">{{ $profile->negeri_kelahiran ?? '-' }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Umur: </strong></td>
                                        <td colspan="2">{{ $profile->umur ?? '-' }}</td>
                                        <td><strong>Jantina: </strong></td>
                                        <td colspan="2">{{ $profile->result->JANTINA ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Platun: </strong></td>
                                        <td colspan="2">{{ $profile->result->PLATUN ?? '-' }}</td>
                                        <td><strong>Seksyen: </strong></td>
                                        <td colspan="2">{{ $profile->result->SEKSYEN ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Status Perkahwinan: </strong></td>
                                        <td colspan="2">{{ $profile->status_perkahwinan ?? '-' }}</td>
                                        <td><strong>Jumlah Anak: </strong></td>
                                        <td colspan="2">{{ $profile->jumlah_anak ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Agama: </strong></td>
                                        <td colspan="2">{{ $profile->agama ?? '-' }}</td>
                                        <td><strong>Bangsa: </strong></td>
                                        <td colspan="2">{{ $profile->bangsa ?? '-' }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>Kelayakan Akademik Tertinggi: </strong></td>
                                        <td colspan="2">{{ $profile->kelayakan_akademik_tertinggi ?? '-' }}</td>
                                        <td><strong>Keputusan SPM: </strong></td>
                                        <td colspan="2">{{ $profile->keputusan_SPM ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Bidang Pengajian: </strong></td>
                                        <td>{{ $profile->bidang_pengajian ?? '-' }}</td>
                                        <td><strong>Pusat Pengajian: </strong></td>
                                        <td>{{ $profile->pusat_pengajian ?? '-' }}</td>
                                        <td><strong>CGPA: </strong></td>
                                        <td>{{ $profile->CGPA ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Sukan: </strong></td>
                                        <td colspan="2">{{ $profile->sukan ?? '-' }}</td>
                                        <td><strong>Muzik: </strong></td>
                                        <td colspan="2">{{ $profile->muzik ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Pekerjaan Sebelum Masuk Tentera: </strong></td>
                                        <td colspan="5">{{ $profile->pekerjaan_sebelum_masuk_tentera ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Tinggi: </strong></td>
                                        <td>{{ $profile->tinggi ?? '-' }}</td>
                                        <td><strong>Berat: </strong></td>
                                        <td>{{ $profile->berat ?? '-' }}</td>
                                        <td><strong>BMI: </strong></td>
                                        <td>{{ $profile->BMI ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Bahasa: </strong></td>
                                        <td colspan="2">{{ $profile->bahasa ?? '-' }}</td>
                                        <td><strong>Kemahiran Membaca Al-Quran: </strong></td>
                                        <td colspan="2">{{ $profile->kemahiran_membaca_alquran ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Strength & Weakness: </strong></td>
                                        <td colspan="5">{{ $profile->strength_and_weakness ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Pemilihan KOR Pilihan Pertama: </strong></td>
                                        <td>{{ $profile->pemilihan_KOR_pilihan_pertama ?? '-' }}</td>
                                        <td><strong>Pemilihan KOR Pilihan Kedua: </strong></td>
                                        <td>{{ $profile->pemilihan_KOR_pilihan_kedua ?? '-' }}</td>
                                        <td><strong>Pemilihan KOR Pilihan Ketiga: </strong></td>
                                        <td>{{ $profile->pemilihan_KOR_pilihan_ketiga ?? '-' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Berminat Menyertai Pasukan Khas: </strong></td>
                                        <td colspan="5">{{ $profile->berminat_menyertai_pasukan_khas ?? '-' }}</td>
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
