@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tat ca truyen
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên truyen</th>
                            <th scope="col">slug truyen</th>
                            <th scope="col">image</th>
                            <th scope="col">tom tat</th>
                            <th scope="col">the loai</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lí</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_truyen as $key => truyen)
                            <tr>
                            <th scope="row">{{$key}}</th>
                            <td>{{$truyen->tentruyen}}</td>
                            <td>{{$truyen->slug_truyen}}</td>
                            <td><img src="{{asset('public/uploads/truyen/' .$truyen->image)}}" height="150" width="150" alt=""></td>
                            <td>{{$truyen->tomtat}}</td>
                            <td>{{$truyen->theloaitruyen->tentheloai}}</td>
                            <td>
                                @if($truyen->kichhoat == 0)
                                <span class="text-success">kich hoat</span>
                                @else
                                <span class="text-danger">Khong kich hoat</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('truyen.edit',[$truyen->id]) }}" class="btn btn-primary">Edit</a>
                                <form action="{{route('truyen.destroy',['truyen' => $truyen->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('ban co muon xoa truyen nay?');">Delete</button>
                                </form>
                            </td>
                          
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
