@extends('layouts.index')
@section('title','Tambah Kategori')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Category</h4>
            </div>
            <div class="card-body">
                <form action="/category" method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nama Kategori</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection