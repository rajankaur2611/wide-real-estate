<div>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p class="mb-0">{{ Session::get('success') }}</p>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            <p class="text-white mb-0">{{ Session::get('error') }}</p>
        </div>
    @endif
</div>
