<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @foreach ($submissions as $submission)
    <div class="card text-center border-primary mt-6 mx-auto">
      <div class="card-header">
        <p class="card-text">{{ $submission->created_at->diffForHumans() }}</p>
      </div>
      <div class="card-body">
        <label><名前></label>
        <h4 class="card-title">{{ $submission->user->name }}</h5>
        <div class="text-wrap">
          <label><練習内容></label>
            <p class="card-text">{{ $submission->contents }}</p>
          <label><感想></label>
            <p class="card-text">{{ $submission->thoughts }}</p>
        </div>
      </div>
      <div class="card-footer text-muted">
        <label><走行距離></label>
        <p class="card-text">{{ $submission->distance }}km</p>
      </div>
    </div>
    @endforeach
</x-app-layout>
