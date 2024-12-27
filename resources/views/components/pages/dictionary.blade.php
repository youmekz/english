<x-layouts.default>
  <x-layouts.leftnav>
    <a href="#pronouns">{{ __('Pronouns') }}</a>
    <a href="#questions">{{ __('Questions') }}</a>
    <a href="#prepositions">{{ __('Prepositions') }}</a>
    <a href="#complexVerbs">{{ __('Complex verbs') }}</a>
    <a href="#simpleVerbs">{{ __('Simple verbs') }}</a>
    <a href="#nouns">{{ __('Nouns') }}</a>
  </x-layouts.leftnav>

  <section id="content">

    <x-dictionary.pronouns />
    <hr>
    <x-dictionary.questions />
    <hr>
    <x-dictionary.prepositions />
    <hr>

    <div id="complexVerbs">
      <h2>{{ __('List complex verbs') }}</h2>
      <table>
          <thead>
              <tr>
                  <th>{{ __('in Russian') }}</th>
                  <th>{{ __('Simple form') }}</th>
                  <th>{{ __('Complex form') }}</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($verbs as $verb)
                  @isset($verb->complex)
                    <tr>
                      <td>{{ $verb->russian }}</td>
                      <td>{{ $verb->simple }}</td>
                      <td>{{ $verb->complex }}</td>
                    </tr>
                  @endisset
              @endforeach
          </tbody>
      </table>
    </div>

    <hr>

    <div id="simpleVerbs">
      <h2>{{ __('List simple verbs') }}</h2>
      <table>
          <thead>
              <tr>
                  <th>{{ __('in Russian') }}</th>
                  <th>{{ __('Translate') }}</th>
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
      <h2>{{ __('List nouns') }}</h2>
      <table>
          <thead>
              <tr>
                <th>{{ __('in Russian') }}</th>
                <th>{{ __('Translate') }}</th>
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

    <hr>

  </section>
</x-layouts.default>