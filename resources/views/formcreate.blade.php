<x-layout>
    @auth
        <h1 class="bg-primary">hello</h1>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    {{-- Insert a Movie --}}
                    <form method="post" action="{{ route('add.movie') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="movieTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="movieTitle">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="movieDescription" style="height: 100px"></textarea>
                            <label for="movieDescription">Description</label>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 me-3">
                                <label class="form-label" for="movieDuration">duration</label>
                                <input type="number" class="form-control" name="movieDuration">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="pegi">pegi</label>
                                <input type="number" class="form-control" name="pegi">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    @endauth
    @guest
        <h1 class="bg-danger">hello</h1>
    @endguest
</x-layout>
