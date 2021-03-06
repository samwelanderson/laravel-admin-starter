<div class="row pb-3">
    @foreach($paginator as $item)
        <div class="col-md-6">
            <div class="news">
                <figure>
                    <a href="/news-and-events/{{ $item->slug }}">
                        <img src="{{ $item->cover_photo->thumbUrl }}">
                    </a>
                </figure>
                <div class="media">
                    <div class="media-left mr-2">
                        <div class="date bg-primary mr-2">
                            {!! $item->active_from->format('\<\s\t\r\o\n\g\>d\</\s\t\r\o\n\g\> M Y') !!}
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading text-primary">{!! $item->title !!}</h4>
                        <div class="text limit">
                            <p>{!! $item->summary !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@include('website.partials.paginator_footer')
