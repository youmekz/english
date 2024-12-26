<x-layouts.default>
  <x-layouts.leftnav>
    <a href="/admin?key={{ config('app.admin_key') }}">Verbs</a>
    <a href="/admin?key={{ config('app.admin_key') }}">Nouns</a>
  </x-layouts.leftnav>

  <section id="content">
    <div id="verbs">

      <h1>List verbs</h1>
  
      <table>
          <thead>
              <tr>
                  <th>in Russian</th>
                  <th>Simple form</th>
                  <th>Complex form</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($verbs as $verb)
                  <tr>
                      <td>{{ $verb->russian }}</td>
                      <td>{{ $verb->simple }}</td>
                      <td>{{ $verb->complex }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>

    <hr>

    <div id="nouns">

      <h1>List nouns</h1>
  
      <table>
          <thead>
              <tr>
                <th>in Russian</th>
                <th>Translate</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($nouns as $noun)
                  <tr>
                      <td>{{ $noun->russian }}</td>
                      <td>{{ $noun->translate }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </section>
</x-layouts.default>