
@extends('master')


@section('content')

<br><br><br>
<section class="content-block default-bg">

    <!-- Container -->
    <div class="container cont-pad-t-sm">

        <!-- Row -->
        <div class="row">

            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">

                <!-- Blog Entry -->
                @if($content)

                @foreach($content as $contents)
                <article class="blog-entry">

                    <img src="images/slides/slide4.jpg" alt="pic">
                    <h4><a href="blog-post.html">{{ $contents['title'] }}</a></h4>
                    <div class="meta">
                        <span class="date"><i class="fa fa-calendar"></i><a href="#">{{ $contents['created_at'] }}</a></span>
                        <span class="author"><i class="fa fa-user"></i><a href="#">By admin</a></span>
                        <span class="tag"><i class="fa fa-tags"></i><a href="#">Design </a>, <a href="#">Web</a></span>
                        <span class="comments"><i class="fa fa-comments"></i><a href="#">4 Comments</a></span>
                    </div>
                    <p>{!! $contents['article'] !!}</p>
                    <a href="#" class="continue btn btn-primary">read more</a>

                </article>
                @endforeach

                <!-- /Blog Entry -->



                <!-- Pagination -->
                <ul class="pagination no-margin-y">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>

                    <li><a href="#">»</a></li>
                </ul>
                <!-- /Pagination -->
                @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                           
                <h4>this page is empty</h4>
           
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- /Main Col -->

            <!-- Side Col -->
            <div class="side-col side-col-padded col-sm-4 col-md-4">

                <!-- Side Widget -->
                <div class="side-widget">

                    <h5 class="boxed-title">page topics</h5>

                    <ul class="ul-toggle">
                        <li><a href="#"><i class="icon fa fa-angle-right"></i>About our company</a><i class="toggler ti ti-plus"></i>
                            <ul>
                                <li><a href="#"><i class="icon fa fa-angle-right"></i>First Topic Link</a></li>
                                <li><a href="#"><i class="icon fa fa-angle-right"></i>Second Topic Link</a></li>
                                <li><a href="#"><i class="icon fa fa-angle-right"></i>Third Topic Link</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon fa fa-angle-right"></i>Our Mission &amp; Vision</a><i class="toggler ti ti-plus"></i>
                            <ul>
                                <li><a href="#">First Topic Link</a></li>
                                <li><a href="#">Second Topic Link</a></li>
                                <li><a href="#">Third Topic Link</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon fa fa-angle-right"></i>Clients and case studies</a><i class="toggler ti ti-plus"></i>
                            <ul>
                                <li><a href="#">First Topic Link</a></li>
                                <li><a href="#">Second Topic Link</a></li>
                                <li><a href="#">Third Topic Link</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon fa fa-angle-right"></i>Our portfolio</a></li>
                        <li><a href="#"><i class="icon fa fa-angle-right"></i>Price Plans</a></li>
                    </ul>

                </div>
                <!-- /Side Widget -->

                <!-- Side Widget -->
                <div class="side-widget">

                    <h5 class="boxed-title">recent posts</h5>

                    <ul class="vlinks vlinks-iconed vlinks-ruled-dots vlinks-lg">
                        <li><img src="images/thumb1.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>5 comments</span></li>
                        <li><img src="images/thumb2.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>10 comments</span></li>
                        <li><img src="images/thumb3.jpg" alt="" class="img"><a class="title" href="blog-post.html">New blog post</a><span class="meta"><i class="icon-left fa fa-comments"></i>22 comments</span></li>
                    </ul>

                </div>
                <!-- /Side Widget -->

            </div>
            <!-- /Side Col -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</section>



@endsection