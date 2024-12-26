<x-layouts.default>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"">
 
    @if(session('success'))
      <x-layouts.alert>
        {{ session('success') }}
      </x-layouts.alert>                
    @endif

    <x-admin.leftnav />
    <section id="content">
     <div class="admin-container">
        <div>
          <h3>Добавить глагол</h3>
      
          <form action="{{ route('admin.addverb') }}" method="POST">
              @csrf
      
              <div class="form-group">
                <input type="text" name="russian" id="russian" class="form-control" placeholder="in Russian" required>
              </div>
      
              <div class="form-group">
                  <input type="text" name="simple" id="simple" class="form-control" placeholder="Simple form" required>
              </div>
      
              <div class="form-group">
                  <input type="text" name="complex" id="complex" class="form-control" placeholder="Complex form">
              </div>
      
              <button type="submit">Append</button>
          </form>
        </div>
     </div>
   </section>
 </x-layouts.default>
