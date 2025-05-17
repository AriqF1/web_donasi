@extends('master')
@section('content')
    {{-- hero --}}
    <div class="row justify-content-between py-4 my-5">
        <div class="col-12 col-md-6 align-self-center">
            <h1 class="display-4 inter-bold">Bersama, Kita<span class="d-block text-secondary inter-bold">Terus Berbagi
                    Kebaikan</span></h1>
            <p class="lead">Mari Bantu mereka yang membutuhkan dengan sedekah terbaikmu.<br>Salurkan zakat, dukung
                pembangunan
                masjid, bantu korban bencana dan bahagiakan anak-anak panti asuhan. Setiap donasi berarti untuk sebuah
                kehidupan.
            </p>
        </div>
        <div class="d-none d-md-block col-5">
            <img src="/assets/images/hero.png" class="img-fluid" alt="Hero Image">
        </div>
    </div>
    {{-- end hero --}}

    {{-- kategori --}}
    <section class="kategori py-4 my-5" id="kategori">
        <h2 class="text-center h4 inter-bold mb-4">Kategori</h2>
        <div class="row justify-content-center g-3">
            @foreach ($categories as $category)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow text-center">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $category->icon) }}" height="80" alt="{{ $category->name }}">
                            <h3 class="h6 inter-medium text-primary mt-2">{{ $category->name }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- end kategori --}}

    {{-- terbaru --}}
    <section class="terbaru py-4 my-5" id="terbaru">
        <h2 class="text-center h4 inter-bold mb-4">Terbaru</h2>

        <div class="row justify-content-center g-3">
            @foreach ($donations as $donation)
                <div class="col-12 col-md-6">
                    <div class="card shadow border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $donation->image) }}" class="img-fluid rounded-start"
                                    alt="{{ $donation->title }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $donation->title }}</h5>
                                        <span
                                            class="badge bg-secondary d-flex align-self-start text-white inter-regular me-2">{{ $donation->category->name }}</span>
                                    </div>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::words($donation->description, 10, '...') }}
                                    </p>
                                    <a href="/ngamal/{{ $donation->id }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <a href="/ngamal" class="btn btn-secondary mt-4">Mari Beramal</a>
        </div>
    </section>
    {{-- end terbaru --}}

    {{-- galeri --}}
    <section class ="galeri py-4 my-5" id="galeri">
        <div class ="container">
            <h2 class="text-center h4 inter-bold mb-4">Galeri</h2>
            <p class="text-center">Berikut adalah beberapa dokumentasi kegiatan yang telah kami lakukan.</p>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/assets/images/galeri-1.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/galeri-2.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/galeri-3.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/galeri-4.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/galeri-5.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/assets/images/galeri-6.png" class="w-100 rounded img-fluid"
                            style="object-fit: cover; height: 600px; width: 600px;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    {{-- end galeri --}}
@endsection
