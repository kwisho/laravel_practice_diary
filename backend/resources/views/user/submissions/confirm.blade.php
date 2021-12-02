<x-app>
  <div class="containar">
    <div class="img">
      <div class="containar-items">
        <h1 class="text-center mb-5">ー　練習記録入力確認　ー</h1>
        <form method="post" class="row g-3 mt-1" action="{{ route('user.submissions.send') }}">
          @csrf

          <div class="mb-3 mt-3">
            <h4>
              <label for="input" class="form-label">走行距離</label>
            </h4>
            <div class="col-auto text">
              {{ $submission['distance'] }}
              <input type="hidden" name="distance" value="{{ $submission['distance'] }}">
            </div>
          </div>

          <div class="mb-3 mt-3">
            <h4>
              <label for="input2" class="form-label">練習内容</label>
            </h4>
            <div class="col-auto text-break">
              {{ $submission['contents'] }}
              <input type="hidden" name="contents" value="{{ $submission['contents']}}">
            </div>
          </div>


          <div class="mb-3 mt-3">
            <h4>
              <label for="input3" class="form-label">感想</label>
            </h4>
            <div class="col-auto text-break">
              {{ $submission['thoughts'] }}
              <input type="hidden" name="thoughts" value="{{ $submission['thoughts'] }}">
            </div>
          </div>

          <div class="button-items">

          </div>
          <button type="submit" class="btn btn-dark mt-3" name="back">入力内容修正</button>
          <button type="submit" class="btn btn-primary mt-3" name="send">送信する</button>
        </form>
      </div>
    </div>
  </div>
</x-app>
