<x-app>
  <div class="containar">
    <div class="img">
      <div class="containar-items">
        <h1 class="text-center mb-5">ー　練習記録　ー</h1>

        <form method="post" class="row g-3" action="{{ route('user.submissions.post') }}">
          @csrf
          <div class="mb-3">
            <h4>
              <label class="form-label">走行距離</label>
            </h4>
            <div class="col-auto">
              <input type="number" name="distance"  class="form-control form-control-lg w-100" value="{{ old('distance') }}" placeholder="km" min="0">
            </div>
          </div>

          <div class="mb-3">
            <h4>
              <label class="form-label">練習内容</label>
            </h4>
            <div class="col-auto">
              <textarea rows="5" name="contents" class="form-control form-control-lg w-100">{{ old('contents') }}</textarea>
            </div>
          </div>

          <div class="mb-3">
            <h4>
              <label class="form-label">感想</label>
            </h4>
            <div class="col-auto">
              <textarea rows="5" name="thoughts" class="form-control form-control-lg w-100">{{ old('thoughts') }}</textarea>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="button">確認する</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-app>
