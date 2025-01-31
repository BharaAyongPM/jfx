@extends('dashboard.app')

@section('content')
    <div class="container">
        <h2>Verifikasi Pendaftaran</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>WhatsApp</th>
                    <th>Sekolah</th>
                    <th>Jumlah Peserta</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unverifiedApplicants as $applicant)
                    <tr>
                        <td>{{ $applicant->name }}</td>
                        <td>{{ $applicant->whatsapp }}</td>
                        <td>{{ $applicant->school }}</td>
                        <td>{{ $applicant->participants }}</td>
                        <td>
                            <a href="{{ route('admin.verify', ['id' => $applicant->id]) }}" class="btn btn-primary btn-sm">Verifikasi</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
