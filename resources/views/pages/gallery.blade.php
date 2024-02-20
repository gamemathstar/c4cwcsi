@extends("layouts.base")


@section('content')
    <!-- Gallery Grid Area -->
    <section id="gallery_grid_area" class="section_padding">
        <div class="container">
            <div class="row popup-gallery">
                @foreach($imageUrls as $imageUrl)
                <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                    <div class="gallery_item">
                        <img src="{{ $imageUrl }}" alt="img">
                        <div class="gallery_overlay">
                            <a href="{{ $imageUrl }}" title="Gallery">
                                <img src="/assets/img/icon/arrow-round.png" alt="icon"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection