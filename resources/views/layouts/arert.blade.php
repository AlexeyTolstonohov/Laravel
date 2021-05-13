@if (session('succsess'))

@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ 'error' }}
    </div>
@endif
