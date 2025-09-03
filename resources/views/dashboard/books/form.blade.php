@extends('layouts.app')
@section('content')


<div class="main-content-container overflow-hidden ">
    <div class="d-flex justift-content-between align-item-center flex-wrap gap-2 mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Tambah Dokumen</span>
                </li>
            </ol>
        </nav>
    </div>
    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-4">
            <h3 class="mb-4">Form Tambah Dokumen</h3>
            <form action="{{ route('books.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file" accept="application/pdf" required>
                </div>
                <div class="mb-3">
                    <label for="is_available" class="form-label">Status</label>
                    <select class="form-select form-control h-60" id="is_active" name="is_active" required>
                        <option value="yes" selected class="text-dark">Aktif</option>
                        <option value="no" class="text-dark">Tidak Aktif</option>
                    </select>
                </div>
                <a href="{{ route('books.index') }}" class="btn btn-secondary"><i class="ri-arrow-left-line"></i> Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="ri-save-line"></i> Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection