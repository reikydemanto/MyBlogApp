@include('templates/header')
<div class="container py-5">
    <!-- Back Button -->
    <a href="{{ url('/pertemuan1') }}" class="btn btn-secondary mb-4">&larr; Back to Blog</a>

    <!-- Post Detail Card -->
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title mb-3">{{ $post['title'] }}</h1>
            <p class="text-muted mb-4">Posted at {{ date('F j, Y', strtotime($post['posted_at'] ?? now())) }}</p>

            <p class="card-text">{{ $post['content'] }}</p>
        </div>
    </div>
</div>
@include('templates/footer')
