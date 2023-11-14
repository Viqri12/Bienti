@extends('layouts.zeis.app')
@section('content')
        <div class="mt-3 mb-2 d-flex align-items-center col-8 ms-3">
            <span class="fw-bold" style="font-size: 24px;">Edit Influencer</span>
        </div>
        <div class="row border mb-4 col-11 ms-3 bg-white shadow rounded-3">
            <a href="{{ route('dashboard')}}" class="border-0 col-1 bg-transparent mt-2 text-start" style="">
                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-35.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                </svg>
            </a>
            <form action="{{ route('edit-data-influencer',$id) }}" method="POST">
                @csrf
                <div class="row g-3 mb-2 p-3 col-12">
                    <div class=" col-3 ">
                        <div class="">
                            <label class="fw-bold form-label">Nama</label> 
                        </div>
                        <div class="">
                            <input required type="text" name="name" value="{{ $influencer->name }}" class=" rounded-2 border form-control bg-transparent p-3 col-12" placeholder="Masukan Jumlah Followers">
                            <input type="hidden" name="influencer_id" value="$id" id="">
                        </div>
                    </div>
                    <div class=" col-3  cursor-pointer">
                        <div class="">
                            <label class="fw-bold form-label">Jenis Kelamin</label>
                        </div>
                        <select required name="jenis_kelamin" class="form-control col-12 ">
                            <option value="" class="border">{{ $influencer->jenis_kelamin }}</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div> 
                    <div class=" col-3 ">
                        <div class="">
                            <label class="fw-bold form-label">Category</label>
                        </div>
                        <select  name="category[]" class="select2_2 form-control" multiple>
                            @foreach ($category as $item)
                                @php
                                    $filter = array_filter($dataIdInfluenser,function($var) use ($item){
                                        return $var == $item->id;
                                    });
                                @endphp
                                <option value="{{ $item->id }}" {{ count($filter) > 0 ? 'selected' : ''}}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>   
                    <div x-data="{
                        tier_id : '{{ $influencer->tier_id }}'
                    }" class=" col-3  cursor-pointer">
                        <div class="">
                            <label class="fw-bold form-label">Tier</label>
                        </div>
                        <select required x-model="tier_id" name="tier" class="form-control  col-12 ">
                            <option value="" class="border">Pilih Tier</option>
                            @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" col-3 ">
                        <div class="">
                            <label class="fw-bold form-label">Domisili</label>
                        </div>
                        <div class="">
                            <input required type="text" value="{{ $influencer->domisili }}" name="domisili" class="form-control rounded-2 border bg-transparent p-3 col-12" placeholder="Masukan Jumlah Followers">
                        </div>
                    </div> 
                    <div class=" col-3 ">
                        <div class="">
                            <label class="fw-bold form-label">Contact person</label>
                        </div>
                        <div class="">
                            <input required type="tel" name="phone" value="{{ $influencer->phone }}" class="form-control rounded-2 border bg-transparent p-3 col-12" placeholder="Masukan Username">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end  text-end col-12" style="">
                    <button  class="bg-transparent border-0">
                        <img src="{{ asset('assets-baru/images/img.svg')}}" alt="">
                    </button>
                    <button  class="bg-transparent border-0">                          
                        <img src="{{ asset('assets-baru/images/img-1.svg')}}" alt="">
                    </button>
                 </div>
                </form>
                 </div>    
                </div>
            </div>
@endsection