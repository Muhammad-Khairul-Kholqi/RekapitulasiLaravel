@extends('layouts.template')

@section('content')
<div class="title-user ml-[300px] mt-[50px]">
    <h1 class="text-[50px] font-bold">Tambah Data Siswa</h1>
    <p>Home | Data Master | Data Siswa | <span style="font-weight: bold">Tambah Data Siswa</span></p>
</div>
    <form action="{{ route('students.store') }}" method="post" class="card mt-5 p-5 ml-[300px]">
         @if(Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
        @csrf
        {{-- Display validation errors --}}
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">Nis :</label>
            <div class="col-sm-10">
                <input type="text" name="nis" id="nis" class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name :</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="rombel_id" class="col-sm-2 col-form-label">Rombel :</label>
            <div class="col-sm-10">
               <select class="form-select" name="rombel_id" id="rombel_id">
                    <option selected disabled hidden>Pilih</option>
                    @foreach($rombels as $rom)
                        <option value="{{ $rom['rombel'] }}">
                        {{ $rom['rombel'] }}
                        </option>
                    @endforeach
                </select>
           </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Rayon :</label>
            <div class="col-sm-10">
               <select class="form-select" name="rayon_id" id="rayon_id">
                   <option selected disabled hidden>Pilih</option>
                @foreach($rayons as $ray)
                    <option value="{{ $ray['rayon'] }}">
                        {{ $ray['rayon'] }}
                    </option>
                @endforeach 
               </select>
           </div>
        </div>
        <button class="btn btn-primary bg-blue-700" type="submit">Tambah data</button>
    </form>
    <br>
@endsection