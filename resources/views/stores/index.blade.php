@extends('layout')

@section('content')
    <div class="container mt-4">
        @foreach ($stores as $store)
            <div class="card mb-4">
                <a class="card-link" href="{{route('stores.show',['store' => $store])}}">
                <div class="card-header">
                    {{ $store->name }}
                    @if ($store->items->count())
                        <span class="badge badge-primary">
                            商品数 {{ $store->items->count() }}件
                        </span>
                    @endif
                </div>
                    {{--商品を見る--}}
                </a>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(str_limit($item->body, 200))) !!}
                    </p>
                </div>
                {{--<div class="card-footer">--}}
                    {{--<span class="mr-2">--}}
                        {{--登録日時 {{ $store->created_at->format('Y.m.d') }}--}}
                    {{--</span>--}}

                    {{--@if ($store->items->count())--}}
                        {{--<div class="card-footer">--}}
                        {{--<span class="badge badge-primary">--}}
                            {{--商品数 {{ $store->items->count() }}件--}}
                        {{--</span>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</div>--}}
            </div>
        @endforeach
    </div>
@endsection
