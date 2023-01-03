@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    cap nhat the loai
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
                    <form method="POST" action="{{route('theloai.update',[$theloai-<id])}}">
                    @method('PUT')
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ten the loai</label>
                            <input type="text" class="form-control" name="tentheloai" value="{{$theloai->tentheloai}}" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Ten the loai...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">slug the loai</label>
                            <input type="text" class="form-control" value="{{$theloai->slug_theloai}}" name="slug_theloai" id="convert_slug" aria-describedby="emailHelp" placeholder="slug the loai...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mo ta </label>
                            <input type="text" class="form-control" name="mota" value="{{$theloai->mota}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mo ta the loai...">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kich hoat </label>
                            <select class="form-select" name="kichhoat" aria-label="Default select example">
                                @if($theloai->kichhoat == 0)
                                <option selected value="0">Kich hoat</option>
                                <option value="1">Khong kich hoat</option>
                                @else
                                <option  value="0">Kich hoat</option>
                                <option selected value="1">Khong kich hoat</option>
                                @endif
                            </select>
                        </div>
                       

                        <button type="submit" name="themtheloai" class="btn btn-primary">cap nhat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
