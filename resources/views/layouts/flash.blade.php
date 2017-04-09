@if(session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        <p>{{ session('message') }}</p>
    </div>
@endif
