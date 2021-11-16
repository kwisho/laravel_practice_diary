<x-app>
  @if ($errors->any())
  <div class="error-validatioon">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form method="post" class="form-group" action="{{ route('submissions.post') }}">
    @csrf
    <div class="form-control">
      <label>総走行距離</label>
      <input type="number" name="distance" value="{{ old('distance') }}"  min="0"style="width: 50%">
    </div>

    <div class="form-control">
      <label>練習内容</label>
      <input type="text" name="contents" value="{{ old('contents') }}" style="width: 50%">
    </div>

    <div class="form-control">
      <label>感想</label>
      <input type="text" name="thoughts" value="{{ old('thoughts') }}" style="width: 50%">
    </div>

    <button type="submit" class="btn-btn-default" name="button">確認する</button>
  </form>
</x-app>
