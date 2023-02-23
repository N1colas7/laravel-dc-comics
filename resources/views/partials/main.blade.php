<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-around">
            @foreach($products as $item)
            <div class="card">
                @include('partials.comics')
            </div>
            @endforeach
        </div>
    </div>
</div>