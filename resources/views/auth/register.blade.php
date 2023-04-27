<x-layout>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 col-md-8">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome utente</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                            <div class="alter text-dander">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $emailStart ?? '' }}">
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="alter text-dander">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="my-btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>