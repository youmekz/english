<x-layouts.default>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"">
 
    <x-admin.leftnav />
    <section id="content">
      <div class="admin-container">
        <div>
            <h3>Добавить существительное</h3>
  
            @if(session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif
  
            <form action="{{ route('admin.addnoun') }}" method="POST">
                @csrf
  
                <div class="form-group">
                  <input type="text" name="russian" id="russian" class="form-control" placeholder="Russian" required>
                </div>
  
                <div class="form-group">
                    <input type="text" name="translate" id="translate" class="form-control" placeholder="Translate" required>
                </div>
  
                <button type="submit">Append</button>
            </form>
        </div>
      </div>
  </section>
</x-layouts.default>