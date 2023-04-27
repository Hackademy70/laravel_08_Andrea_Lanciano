<x-layout>
    @auth
    <div class="container mt-5 mb-3">
            <h1 class="my-bold-text">Add your favorite movie!</h1>
            <div class="row mt-3">
                <div class="col-8">
                    {{-- Insert a Movie --}}
                    <form method="post" action="{{ route('add.movie') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="movieTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="movieTitle">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <label for="movieDescription" class="form-label">Description</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="movieDescription" style="height: 100px"></textarea>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 me-3">
                                <label class="form-label" for="movieDuration">Duration</label>
                                <input type="number" class="form-control" name="movieDuration">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="pegi">Pegi</label>
                                <input type="number" class="form-control" name="pegi">
                            </div>
                        </div>
                        <button type="submit" class="my-btn">Add Movie</button>
                    </form>
                </div>
            </div>
        </div>

    @endauth
    @guest
        <h1 class="bg-danger">hello</h1>
    @endguest
</x-layout>
