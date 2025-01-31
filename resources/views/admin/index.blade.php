@extends('dashboard.app')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
        <h2>Data Pendaftaran</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kota/Kabupaten</th>
                <th>Provinsi</th>
                <th>Tournament</th>
                <th>Contact Nama</th>
                <th>Status Verifikasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applicants as $applicant)
                <tr>
                    <td>{{ $applicant->name }}</td>
                    <td>{{ $applicant->city }}</td>
                    <td>{{ $applicant->province->name }}</td>
                    <td>{{ $applicant->tournament }}</td>
                    <td>{{ $applicant->contact_name }}</td>
                    <td>
                        @if($applicant->verified)
                            <span class="badge badge-success">Terverifikasi</span>
                        @else
                            <span class="badge badge-warning">Belum diverifikasi</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.detail', ['id' => $applicant->id]) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>
</div>
</div>
</div>
</div>
@endsection
