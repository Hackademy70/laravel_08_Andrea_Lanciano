<x-layout>
    @auth
        <h1 class="bg-primary">hello</h1>

        <div class="container">
            <div class="row">
                <div class="col-8">
                    {{-- Insert a Movie --}}
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="movieTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" name="movieTitle">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <div class="mb-3">
                            <label for="movieDescription" class="form-label"></label>
                            <textarea name="movieDescription" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="number" name="movieDuration">
                            <label class="form-check-label" for="movieDuration">duration</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="number" name="pegi">
                            <label class="form-check-label" for="pegi">pegi</label>
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
