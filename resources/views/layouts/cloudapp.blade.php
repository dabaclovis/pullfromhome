@include('layouts.includes.navbar')
    <main class=" container py-4">
        <div class="row">
            <div class="col-md-4 w3-card">
               @include('layouts.includes.leftcloud')
            </div>
            <div class="col-md-8" id="cloud">
                @yield('content')
            </div>
        </div>
    </main>
@include('layouts.includes.footer')
