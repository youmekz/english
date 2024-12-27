<x-layouts.leftnav>
  <a href="/admin?key={{ config('app.admin_key') }}">{{ __('Admin') }}</a>
  <a href="/admin/verbs?key={{ config('app.admin_key') }}">{{ __('Verbs') }}</a>
  <a href="/admin/nouns?key={{ config('app.admin_key') }}">{{ __('Nouns') }}</a>
</x-layouts.leftnav>