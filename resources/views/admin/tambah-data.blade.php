@extends('layouts.zeis.app')
@section('content')
<style>
    select {
        padding: 5px;
        border: 2px solid #ccc;
        border-radius: 5px; 
        appearance: none; 
        -webkit-appearance: none;
        -moz-appearance: none; 
    }

   
        select::after {
            content: '\25BC'; 
            position: absolute;
            right: 10px; 
            top: 50%;
            transform: translateY(-50%);
            pointer-events: auto; 
        }
</style>
        <div class="mt-3 mb-2 d-md-flex align-items-center col-md-8 ms-3">
            <span class="fw-bold" style="font-size: 24px;">Input  KOL Instagram</span>
        </div>
        <div class="row border mb-4 col-11 ms-3 bg-white shadow rounded-3">
            <a href="{{ route('dashboard')}}" class="col-1 bg-transparent mt-2 text-start" style="">
                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-35.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
            </a>
            <form action="{{ route('tambah-instagram') }}" method="POST">
                @csrf
                <div class="row g-3 mb-2 p-3 col-12">
                    <div class=" col-md-4 "> 
                        <div class="">
                            <label class="fw-bold form-label">Name</label>
                        </div>
                        <select name="name" class="form-control  col-12 ">
                            <option value="" class="border">Pilih Influencer</option>
                            @foreach ($list as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-md-4">
                        <div class="">
                            <label class="fw-bold form-label">Followers</label>
                        </div>
                        <div class="">
                            <input type="text" name="followers" class="form-control col-12" placeholder="Masukan Jumlah Followers">
                        </div>
                    </div> 
                    <div class=" col-md-4">
                        <div class="">
                            <label class="fw-bold form-label">Username</label>
                        </div>
                        <div class="">
                            <input type="text" name="username" class="form-control col-12" placeholder="Masukan Username">
                        </div>
                    </div> 
                    @foreach ($social->RateCard as $item)
                    <div class=" col-md-4">
                        <div class="">
                            <label class="fw-bold form-label">{{ $item->name }}</label>
                        </div>
                        <div class="input-group">
                            <input type="hidden" name="ratecard_id[]" value="{{ $item->id }}">
                            <input type="text" name="ratecard[]" class="form-control col-12">
                            <input type="hidden" name="has_influencer" value="{{ $item->sosial_media_id }}" id="">
                        </div>  
                    </div>  
                    @endforeach          
                    <div class=" col-md-4">
                        <div class="">
                            <label class="fw-bold form-label">Instagram Link</label>
                        </div>
                        <div class="">
                            <input type="text" name="ig_link" class="form-control col-12" placeholder="wwww.tiktok.com/p/CvO8pb8rkm_/">
                        </div>  
                    </div> 
                    <div class=" col-md-4">
                        <div class="">
                            <label class="fw-bold form-label">Notes</label>
                        </div>
                        <div class="">
                            <textarea id="deskripsi" name="notes" class="form-control" name="deskripsi"  cols="48"></textarea>
                        </div> 
                    </div> 
                <div class="d-flex justify-content-end col-md-12" style="">
                    <button  class="bg-transparent border-0">
                        <img src="{{ asset('assets-baru/images/img.svg')}}" alt="">
                    </button>
                    <button  class="bg-transparent border-0">                          
                     <img src="{{ asset('assets-baru/images/img-1.svg')}}" alt="">
                    </button>
                </form>
                 </div>    
                </div>
            </div>
@endsection