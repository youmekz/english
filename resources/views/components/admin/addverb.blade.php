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
          <h3>{{ __('Append verb') }}</h3>
      
          <form action="{{ route('admin.addverb') }}" method="POST">
              @csrf
    
              <div class="form-group">
                <input type="text" name="simple" id="simple" class="form-control" placeholder="Simple form" required>
              </div>
    
              <div class="form-group">
                <input type="text" name="russian" id="russian" class="form-control" placeholder="in Russian" required>
              </div>
      
              <div class="form-group">
                  <input type="text" name="complex" id="complex" class="form-control" placeholder="Complex form">
              </div>

              <input type="text" name="key" style="display: none" value="{{ config('app.admin_key') }}">

              <button type="submit">{{ __('Append') }}</button>
          </form>
        </div>
     </div>
   </section>
 </x-layouts.default>


 <script>
  window.onload = function() {
      document.getElementById('simple').focus();
  }
</script>
