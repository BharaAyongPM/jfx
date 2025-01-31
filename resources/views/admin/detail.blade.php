@extends('dashboard.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
        <h2>Detail Pendaftaran</h2>

        <div class="row">
            <div class="col-md-6">
                <p><strong>Nama:</strong> {{ $applicant->name }}</p>
                <p><strong>Alamat:</strong> {{ $applicant->address }}</p>
                <p><strong>Tournament:</strong> {{ $applicant->tournament }}</p>
                <p><strong>Contact Nama:</strong> {{ $applicant->contact_name}}</p>
                <p><strong>Contact WhatsApp:</strong> {{ $applicant->contact_phone }}</p>
                <p><strong>Status Verifikasi:</strong>
                    @if(!$applicant->verified)
                    <form action="{{ route('admin.verify', ['id' => $applicant->id]) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success mt-3">Verifikasi</button>
                    </form>
                @else
                    <span class="badge badge-success mt-3">Terverifikasi</span>
                @endif
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
