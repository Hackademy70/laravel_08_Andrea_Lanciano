<x-layout>
    @auth
        <h1 class="bg-primary">hello</h1>

        <div class="container">
            <div class="row">
                <div class="col-8">
                </div>
            </div>
        </div>

    @endauth
    @guest
        {{-- Title page --}}
        <x-slot name="title">FlexFlix - Start with us</x-slot>
        {{-- End title page --}}
        <div class="container-fluid vh-100 my-bg">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-12 col-md-8">
                    <h1>Unlimited movies, TV shows, and more.</h1>
                    <h4>Watch anywhere. Cancel anytime</h4>
                    <p>Ready to watch? Enter your email to create or restart your membership</p>
                    {{-- Indirizzamento alla Register con email --}}
                    <div class="container-fluid">
                        <div class="row">
                            <form action="{{route('start')}}" method="get">
                                <div class="col-10">
                                    <input type="email" class="css-input" name="emailStart" placeholder="Email address" />
                                    <button type="submit" class="my-btn">Get Started<i class="ms-2 fa-solid fa-chevron-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
</x-layout>
