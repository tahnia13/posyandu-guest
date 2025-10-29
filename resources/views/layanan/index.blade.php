@extends('layouts.app')

@section('title', 'Layanan - POSYANDU SEHAT')

@section('content')
<div class="container" style="padding: 4rem 0; min-height: 60vh;">
    <h1 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">Layanan Posyandu</h1>
    <p style="text-align: center; color: var(--gray); margin-bottom: 3rem;">Berbagai layanan kesehatan yang tersedia di posyandu</p>
    
    <div style="display: grid; gap: 2rem; max-width: 800px; margin: 0 auto;">
        @foreach($layanan as $item)
        <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <h3 style="color: var(--primary); margin-bottom: 1rem;">{{ $item->nama }}</h3>
            <p style="color: var(--gray);">{{ $item->deskripsi }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection