@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                店の新規登録
            </h1>

            <form method="POST" action="{{ route('stores.store') }}">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            名前
                        </label>
                        <input
                                id="name"
                                name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ old('name') }}"
                                type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            登録する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection