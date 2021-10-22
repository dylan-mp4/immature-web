@extends('layouts.app')

@section('content')
<section class="font-mono bg-white container mx-auto px-5">
    <div class="flex flex-col items-center py-8">
      <div class="flex flex-col w-full mb-12 text-left">
        <div class="w-full mx-auto lg:w-1/2">
          <h1 class="mx-auto mb-6 text-2xl font-semibold text-black lg:text-3xl">{{ $post->title }}</h1>
          <img class="rounded-sm" src="{{ asset('images/' . $post->image_path) }}" />
          <h2 class="mx-auto mt-4 mb-4 text-xl font-semibold text-black">{{ date('jS M Y', strtotime($post->created_at))}}</h2>
          <div class="mx-auto text-base font-medium leading-relaxed text-gray-800"> {!! $post->content !!} </div>
        </div>

        <div class="p-4 mt-4 bg-white border rounded-lg w-full mx-auto lg:w-1/2">
          <div class="flex py-2 mb-4 w-full">
            <img src="data:image/png;base64,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" class="object-cover w-12 h-12 mr-2 rounded-full" />
            <div>
              <p class="text-sm font-semibold tracking-tight text-black">{{ $post->user->name }}</p>
              <p class="text-sm font-normal tracking-tight text-gray-600">Creator</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    @endsection
