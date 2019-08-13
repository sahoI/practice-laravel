@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{$store->name}}
            </h1>
            <p class="mb-5">
                {!! ! nl2br(e($store->name)) !!}
            </p>
            <section>
                <h2 class="h5 mb-4">
                    商品
                </h2>
                @forelse($store->items as $item)
                    <div class="border-top p-4">
                        <time class="text-secondary">
                            {{$item->created_at->format('Y.m.d H:u')}}
                        </time>
                        <p class="mt-2">
                            {!! nl2br(e($item->title)) !!}
                        </p>
                    </div>
                    @empty
                        <p>商品はまだありません。</p>
                    @endforelse
            </section>
        </div>
    </div>
@endsection
