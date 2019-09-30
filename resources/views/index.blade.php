<div class="content">
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog Home
                        </h3>
                        <p class="subtitle-a">
                            We bring you the best from the best living authors.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="#"><img src="{{ $first_post->featured}}" alt="{{ $first_post->title}}"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Category: {{$first_post->category->name}}</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="#">{{ $first_post->title}}</a></h3>
                            <p class="card-description">
                                {{-- {{ $first_post->content}} --}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    {{-- <img src="{{ $profile }}" alt="" width="50px" height="50px" class="avatar rounded-circle"> --}}
                                    {{-- <span class="author"> {{$user}}</span> --}}
                                </a>
                            </div>
                            <div class="post-date">
                                        <span class="ion-ios-clock-outline" datetime="17-04-2019 12:00:00" ></span> 
                                        {{ $first_post->created_at->toFormattedDateString()}}
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="#"><img src="{{ $second_post->featured }}" alt="{{ $second_post->title}}"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Category: {{$second_post->category->name}}</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="#">{{ $second_post->title}}</a></h3>
                            {{-- <p class="card-description">
                                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.
                            </p> --}}
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    {{-- <img src="{{$profile}}" alt="" width="50px" height="50px"  class="avatar rounded-circle"> --}}
                                    {{-- <span class="author">{{$user}}</span> --}}
                                </a>
                            </div>
                            <div class="post-date">
                                        <span class="ion-ios-clock-outline"></span>
                                        {{ $second_post->created_at->toFormattedDateString()}}
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="#"><img src="{{ $third_post->featured }}" alt="{{ $third_post->title}}"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Category: {{$third_post->category->name}}</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="#">{{ $third_post->title}}</a></h3>
                            {{-- <p class="card-description">
                                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus.
                            </p> --}}
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    {{-- <img src="{{$profile}}" alt="" width="50px" height="50px"  class="avatar rounded-circle"> --}}
                                    {{-- <span class="author">{{$user}}</span> --}}
                                </a>
                            </div>
                            <div class="post-date">
                                        <span class="ion-ios-clock-outline"></span>
                                        {{ $third_post->created_at->toFormattedDateString()}}
                                    </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-blog">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Categories</a></h5>
                            <div class="card-category">
                                
                                    @foreach ($categories as $category)
                                        <h6 class="category">
                                            {{$category->name}}
                                        </h6>
                                    @endforeach
                                
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="card card-blog">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Tags</a></h5>
                            @foreach ($tags as $tag)
                            <h6 class="category">
                                {{$tag->tag}}
                            </h6>
                            @endforeach

                            {{-- <div class="card-category">
                                <h6 class="category">Tag name</h6>
                            </div> --}}
                        </div>

                    </div>
                    <hr>
                    <div class="card card-blog">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Slugs</a></h5>
                            @foreach ($slugs as $slug)
                            <h6 class="category">
                                {{$slug ->slug}}
                            </h6>
                            @endforeach
                            {{-- <div class="card-category">
                                <h6 class="category">slug name</h6>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div><hr><br><br><br><br>