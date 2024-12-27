<x-layouts.default>
  <x-layouts.leftnav>
    <a href="#complexVerbs">Complex verbs</a>
    <a href="#simpleVerbs">Simple verbs</a>
    <a href="#nouns">Nouns</a>
  </x-layouts.leftnav>

  <section id="content">
    <div id="complexVerbs">
      <h2>List complex verbs</h2>
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

    <div id="simpleVerbs">
      <h2>List simple verbs</h2>
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
                  @empty($verb->complex)
                    <tr>
                        <td>{{ $verb->russian }}</td>
                        <td>{{ $verb->simple }}</td>
                    </tr>
                  @endempty
              @endforeach
          </tbody>
      </table>
    </div>

    <hr>

    <div id="nouns">
      <h2>List nouns</h2>
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