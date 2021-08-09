@extends('partials.html')

@section('body')
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <div class="col-6 m-auto">
                            <img src="/storage/map.png" alt="Wayfair Map" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-6 m-auto">
                        <img src="/storage/staff.png" alt="Augment Staff" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-6 m-auto">
                        <img src="/storage/money.png" alt="Save Money" />
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="/storage/map.png" alt="Wayfair Map" />
        </div>
        <div class="col-9">
            <ul>
                <li>Bullet</li>
                <li>Points</li>
                <li>Here</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <ul>
                <li>Bullet</li>
                <li>Points</li>
                <li>Here</li>
            </ul>
        </div>
        <div class="col-3">
            <img src="/storage/staff.png" alt="Augment Staff" />
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <img src="/storage/money.png" alt="Save Money" />
        </div>
        <div class="col-9">
            <ul>
                <li>Bullet</li>
                <li>Points</li>
                <li>Here</li>
            </ul>
        </div>
    </div>
@endsection
