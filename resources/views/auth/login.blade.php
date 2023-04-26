<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                        <div class="alter text-dander">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <div class="alter text-dander">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>