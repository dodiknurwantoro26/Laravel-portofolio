@extends('template')

@section('content')
    <section id="home" class="container mb-5 position-relative">

        @auth
            <button class="btn btn-danger position-absolute" style="top:1rem; right:1rem" data-bs-toggle="modal"
                data-bs-target="#edit-section-hero">
                <i class="bi bi-pencil"></i>
            </button>

            <x-modal title="Edit Section Hero" id="edit-section-hero">
                <form action="{{ route('contents.update.hero') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-input name="name" label="Nama" placeholder="Masukan Nama Anda"
                        value="{{ $contents['name'] }}"></x-input>
                    <x-input name="profesion" label="Profesion" placeholder="Masukan Profesi Anda"
                        value="{{ $contents['profesion'] }}"></x-input>
                    <x-input name="wa_link" label="Whatsapp" placeholder="Masukan Whatsapp Link Anda"
                        value="{{ $contents['wa_link'] }}"></x-input>
                    <x-input name="hero_text" label="Hero Text" placeholder="Masukan Hero Text"
                        value="{{ $contents['hero_text'] }}"></x-input>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hero Image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </x-modal>
        @endauth

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                <h1>{{ $contents['hero_text'] }}</h1>
                <div class="d-flex">
                    <a href="#tentang" class="me-3">
                        <button class="btn btn-outline-dark">
                            Tentang Saya
                        </button>
                    </a>

                    <a href="{{ $contents['wa_link'] }}">
                        <button class="btn btn-primary">
                            <i class="bi bi-whatsapp me-2"></i>
                            Hubungi Saya
                        </button>
                    </a>
                </div>
                <div class="d-flex">
                    <a href="#" class="mx-2">
                        <ic class="bi bi-instagram fs-3 text-secondary"></ic>
                    </a>
                    <a href="#" class="mx-2">
                        <ic class="bi bi-linkedin fs-3 text-secondary"></ic>
                    </a>
                    <a href="#" class="mx-2">
                        <ic class="bi bi-envelope-at fs-3 text-secondary"></ic>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 p-5 text-center">
                <img src="{{ $contens['hero_image'] ?? asset('images/hero.png') }}" alt="" class="img-fluid w-75">
            </div>
        </div>
    </section>

    <section id="tentang" class="bg-secondary p-lg-5 p-3">
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{ asset('images/about.png') }}" alt="" class="img-fluid w-75">
                                </div>
                                <div class="col-lg-8 d-flex flex-column justify-content-center">
                                    <h2 class="text-primary">Tentang Saya</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem veniam incidunt
                                        aliquam sint voluptates, ad adipisci ex, illum harum, consequatur asperiores
                                        possimus libero nostrum cumque nulla quaerat debitis! Nisi, neque.</p>
                                    <a href="">
                                        <button class="btn btn-primary">
                                            Download CV
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projek" class="bg-secondary py-5">
        <div class="continer">
            <h2 class="text-white text-center mb-2">Dafar Project</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/projects/project-1.jpg') }}" alt=""
                                class="card-img-top img-fluid">
                            <h4 class="text-center fw-semibold">Aplikasi POS</h4>
                            <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Non at
                                sapiente optio.</p>
                            <a href="" class="w-100">
                                <button class="btn btn-outline-dark w-100">Lihat Project</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/projects/project-2.jpg') }}" alt=""
                                class="card-img-top img-fluid">
                            <h4 class="text-center fw-semibold">Aplikasi POS</h4>
                            <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Non at
                                sapiente optio.</p>
                            <a href="" class="w-100">
                                <button class="btn btn-outline-dark w-100">Lihat Project</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('images/projects/project-3.png') }}" alt=""
                                class="card-img-top img-fluid">
                            <h4 class="text-center fw-semibold">Aplikasi POS</h4>
                            <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Non at
                                sapiente optio.</p>
                            <a href="" class="w-100">
                                <button class="btn btn-outline-dark w-100">Lihat Project</button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>
@endsection
