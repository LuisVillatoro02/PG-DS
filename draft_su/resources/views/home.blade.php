@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset('img/fondo1.jpg') }}" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Solid Bulks Cargos</h5>
                                      <p>30,000 tons are loaded per vessel.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('img/fondo4.jpg') }}" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>About Us</h5>
                                      <p>We are located in more than 100 countries.</p>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{ asset('img/fondo.jpg') }}" class="d-block w-100 h-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Certified Cargo Inspectors</h5>
                                      <p>All cargo inspectors have an IFIA certification.</p>
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
