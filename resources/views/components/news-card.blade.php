@props(['article'])

<article class="news-card">
    <img src="{{ $article['image'] ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $article['title'] ?? 'News Article' }}">
    <div class="news-content">
        <span class="news-date">{{ $article['date'] ?? date('M d, Y') }}</span>
        <h3>{{ $article['title'] ?? 'News Title' }}</h3>
        <p>{{ $article['excerpt'] ?? 'News excerpt goes here...' }}</p>
    </div>
</article>