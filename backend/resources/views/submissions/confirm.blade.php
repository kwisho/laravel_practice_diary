<x-app>
  <form method="post" class="form-group" action="{{ route('submissions.complete') }}">
    @csrf
    <div class="form-control">
      <label>総走行距離</label>
      {{ $inputs['distance'] }}
      <input type="hidden" name="distance" value="{{ $inputs['distance'] }}">
    </div>

    <div class="form-control">
      <label>練習内容</label>
      {{ $inputs['contents'] }}
      <input type="hidden" name="contents" value="{{ $inputs['contents']}}">
    </div>

    <div class="form-control">
      <label>感想</label>
      {{ $inputs['thoughts'] }}
      <input type="hidden" name="thoughts" value="{{ $inputs['thoughts'] }}">
    </div>

    <button type="submit" class="btn-btn-default" name="back">入力内容修正</button>

    <button type="submit" class="btn-btn-default" name="send">送信する</button>
  </form>
</x-app>
