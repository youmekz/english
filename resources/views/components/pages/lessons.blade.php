<x-layouts.default>
  <x-layouts.leftnav>
    <a href="#one">{{ __('One') }}</a>
    <a href="#two">{{ __('Two') }}</a>
    <a href="#three">{{ __('Three') }}</a>
    <a href="#four">{{ __('Four') }}</a>
    <a href="#five">{{ __('Five') }}</a>
    <a href="#six">{{ __('Six') }}</a>
    <a href="#seven">{{ __('Seven') }}</a>
    <a href="#eihgt">{{ __('Eight') }}</a>
  </x-layouts.leftnav>

  <section id="content">
    <x-lessons.lesson_1 />
    <hr>
    <x-lessons.lesson_2 />
    <hr>
    <x-lessons.lesson_3 />
    <hr>
    <x-lessons.lesson_4 />
  </section>

</x-layouts.default>