

@component('mail::message')
# {{ $news->title }}

@if($news->image)
<img src="{{ asset('storage/' . $news->image) }}" alt="News Image" style="max-width: 100%; border-radius: 8px;">
@endif

{{ $news->description }}

@component('mail::button', ['url' => route('news.index')])
View All News
@endcomponent

Thanks,  
**Skylink Technologies**
@endcomponent
