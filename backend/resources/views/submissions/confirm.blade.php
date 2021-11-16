<x-app>
  <form method="post" class="form-group" action="{{ route('submissions.send') }}">
    @csrf
    <div class="form-control">
      <label>総走行距離</label>
      {{ $input['distance'] }}
      <input type="hidden" name="distance" value="{{ $input['distance'] }}">
    </div>

    <div class="form-control">
      <label>練習内容</label>
      {{ $input['contents'] }}
      <input type="hidden" name="contents" value="{{ $input['contents']}}">
    </div>

    <div class="form-control">
      <label>感想</label>
      {{ $input['thoughts'] }}
      <input type="hidden" name="thoughts" value="{{ $input['thoughts'] }}">
    </div>

    <button type="submit" class="btn-btn-default" name="back">入力内容修正</button>

    <button type="submit" class="btn-btn-default" name="send">送信する</button>
  </form>
</x-app>
