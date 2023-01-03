@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    cap nhat truyen
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ten truyen</label>
                            <input type="text" class="form-control" value="{{$truyen->tentruyen}}" onkeyup="ChangeToSlug();" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Ten truyen...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">slug truyen</label>
                            <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="slug truyen...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tom tat truyen </label>
                            <textarea name="tomtat" class="form-control"  id="" cols="30" rows="5" style="resize: none;">{{$truyen->tomtat}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">the loai truyen </label>
                            <select name="theloai" class="custom-select" id="">
                                @foreach($theloai as $key => $loai)
                                <option {{ $loai->id == $truyen->theloai_id ? 'selected' : '' }} value="{{$loai->id}}">{{$loai->tentheloai}}</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">hinh anh truyen</label>
                            <input type="file" class="form-control-file"  name="image" >
                            <img src="{{asset('public/uploads/truyen/' .$truyen->image)}}" height="150" width="150" alt="">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kich hoat </label>
                            <select class="form-select" name="kichhoat" aria-label="Default select example">
                            @if($truyen->kichhoat == 0)
                                <option selected value="0">Kich hoat</option>
                                <option value="1">Khong kich hoat</option>
                                @else
                                <option  value="0">Kich hoat</option>
                                <option selected value="1">Khong kich hoat</option>
                                @endif
                            </select>
                            </select>
                        </div>
                       

                        <button type="submit" name="themtruyen" class="btn btn-primary">cap nhat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
