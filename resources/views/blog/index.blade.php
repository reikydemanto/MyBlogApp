@include('templates/header')

<div class="container py-5">

    <h1 class="text-center mb-4 fw-bold">Welcome to My Blog</h1>

    @foreach ($posts as $post)
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">{{ $post['title'] }}</h2>
                <p class="text-muted mb-2">
                    Posted at {{ date('F j, Y') }}
                </p>

                @if (!empty($post['content']))
                    <p class="card-text">{{ $post['content'] }}</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="pertemuan1/{{ $post['id'] }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach

</div>
@include('templates/footer')
