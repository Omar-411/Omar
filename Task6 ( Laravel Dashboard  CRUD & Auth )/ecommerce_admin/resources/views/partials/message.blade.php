@if (session('success'))
    <div class="alert text-center alert-success">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert text-center alert-danger">
        {{ session('error') }}
    </div>
@endif
