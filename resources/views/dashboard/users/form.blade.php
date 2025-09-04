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
                    <span class="fw-medium">{{ isset($user) ? 'Edit User' : 'Tambah User' }}</span>
                </li>
            </ol>
        </nav>
    </div>
    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-4">
            <h3 class="mb-4">{{isset($user) ? 'Form Edit User' : 'Form Tambah User'}}</h3>
            <form action="{{ isset($user) ? route('user.update',$user->id) : route('user.store') }}" method="POST">
                @csrf
                @if(isset($user))
                @method('POST')
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? old('name', $user->name)  : ''}}" required>
                    @error('name')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ isset($user) ? old('username', $user->username) : old('username') }}" required>
                    @error('username')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" {{ isset($user) ? '' : 'required' }}>
                    @if(isset($user))
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
                    @endif
                    @error('password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select form-control h-60" id="role" name="role" required>
                        <option value="admin" {{ (isset($user) && $user->role === 'admin') ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ (isset($user) && $user->role === 'user') ? 'selected' : '' }}>User</option>
                    </select>
                    @error('role')
                    <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update User' : 'Tambah User' }}</button>
                <a href="{{ route('user.index') }}" class="btn btn-secondary ms-2">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection