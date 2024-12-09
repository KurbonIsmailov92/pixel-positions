@props(['employer', 'width' => 90])

<img src="{{ isset($employer) && $employer->logo ? asset($employer->logo) : asset('default.webp') }}"
     alt="logo"
     class="rounded-xl"
     width="{{ $width }}">
