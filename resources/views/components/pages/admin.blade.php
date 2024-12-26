<x-layouts.default>
  <div class="container">
      <h1>Добавить глагол</h1>

      <!-- Выводим сообщение об успешном добавлении -->
      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      <!-- Форма для добавления глагола -->
      <form action="{{ route('admin') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="russian">Russian</label>
            <input type="text" name="russian" id="russian" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="simple">Simple</label>
              <input type="text" name="simple" id="simple" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="complex">Complex</label>
              <input type="text" name="complex" id="complex" class="form-control" required>
          </div>

          <button type="submit">Append</button>
      </form>
  </div>
</x-layouts.default>
