@props(['employer', 'width' => 90])

<img src=" {{ asset('storage/'.$employer->logo) }}" class="rounded-xl" alt="" width="{{ $width }}">
