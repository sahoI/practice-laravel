@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                商品の新規登録
            </h1>
            <form class="mb-4" method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
                @csrf
                <input
                        name="store_id"
                        type="hidden"
                        value="{{$store->id}}"
                >
                {{--<div class="form-group">--}}
                {{--<label for="store_id">--}}
                {{--店の名前--}}
                {{--</label>--}}
                {{--<select--}}
                {{--id="store_id"--}}
                {{--name="store_id"--}}
                {{--value="{{ old('store_id') }}"--}}
                {{--class="form-control {{$errors->has('store_id') ? 'is-invalid' : ''}}"--}}
                {{-->--}}
                {{--@foreach($stores as $store)--}}
                {{--<option value="store_id">--}}
                {{--{{$store->name}}--}}
                {{--</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
                {{--@if($errors->has('store_id'))--}}
                {{--<div class="invalid-feedback">--}}
                {{--{{$errors->first('store_id')}}--}}
                {{--</div>--}}
                {{--@endif--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="title">
                        名前
                    </label>
                    <input
                            id="title"
                            name="title"
                            value="{{ old('title') }}"
                            class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                    >
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{$errors->first('title')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="info">
                        説明
                    </label>
                    <textarea
                            id="info"
                            name="info"
                            class="form-control {{$errors->has('info') ? 'is-invalid' : ''}}"
                            rows="4"
                    >
                            {{old('info')}}
                        </textarea>
                    @if($errors->has('info'))
                        <div class="invalid-feedback">
                            {{$errors->first('info')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">
                        価格
                    </label>
                    <input
                            id="price"
                            name="price"
                            value="{{ old('price') }}"
                            class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}"
                    >
                    @if($errors->has('price'))
                        <div class="invalid-feedback">
                            {{$errors->first('price')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="image">
                        画像
                    </label>
                    <input
                            id="image"
                            name="image"
                            type="file"
                            value=""
                            class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}"
                    >
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{$errors->first('image')}}
                        </div>
                    @endif
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        登録する
                    </button>
                </div>
            </form>


        </div>
    </div>
@endsection
