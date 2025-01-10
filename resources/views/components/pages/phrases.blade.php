<x-layouts.default>
<section id="content">
    <h2>{{ __('List phrases') }}</h2>
      <table>
          <thead>
              <tr>
                  <th>{{ __('in Russian') }}</th>
                  <th>{{ __('Translate') }}</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($phrases as $phrase)
                <tr>
                  <td>{{ $phrase->russian }}</td>
                  <td>{{ $phrase->translate }}</td>
                </tr>
              @endforeach
          </tbody>
      </table>
<section>
</x-layouts.default>