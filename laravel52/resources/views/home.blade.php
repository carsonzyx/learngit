@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div id="works"  class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Livres</h2>
            <a href="{{route('list')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Outils</h2>
            <a href="homepage/images/portfolio/2.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Joujous</h2>
            <a href="homepage/images/portfolio/3.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Vetements</h2>
            <a href="homepage/images/portfolio/4.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Articles</h2>
            <a href="homepage/images/portfolio/5.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Chaussures</h2>
            <a href="homepage/images/portfolio/6.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/7.jpg" alt="img01"/>
        <figcaption>
            <h2>Portables</h2>
            <a href="homepage/images/portfolio/7.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/8.jpg" alt="img01"/>
        <figcaption>
            <h2>Maquillages</h2>
            <a href="homepage/images/portfolio/8.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="homepage/images/portfolio/9.jpg" alt="img01"/>
        <figcaption>
            <h2>Sacs</h2>
            <a href="homepage/images/portfolio/9.jpg" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
</div>
@endsection
