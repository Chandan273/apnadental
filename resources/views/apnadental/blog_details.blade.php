@extends('apnadental.master')

@section("content")
<main>
    <div id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- /breadcrumb -->
    
    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-9">
                <div class="bloglist singlepost">
                    <p><img alt="" class="img-fluid" src="{{ asset('public/'.$blog->blog_image) }}"></p>
                    <h1>Medical treatments</h1>
                    <div class="postmeta">
                        <ul>
                            <li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
                            <li><a href="#"><i class="icon_clock_alt"></i> 23/12/2015</a></li>
                            <li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li>
                            <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li>
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content">
                        <div class="dropcaps">
                            {!! $blog->content !!}
                        </div>

                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->

                <div id="comments">
                    <h5>Comments</h5>
                    <ul>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>{{ $blog->created_at->format('d .M Y') }}<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul class="replied-to">
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="comment_right clearfix">
                                        <div class="comment_info">
                                            By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                    <ul class="replied-to">
                                        <li>
                                            <div class="avatar">
                                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="comment_right clearfix">
                                                <div class="comment_info">
                                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                                </div>
                                                <p>
                                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                                </p>
                                                <p>
                                                    Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="http://via.placeholder.com/150x150.jpg" alt="">
                                </a>
                            </div>

                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Cursus tellus quis magna porta adipiscin
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <hr>

                <h5>Leave a Comment</h5>
                <form>
                    <div class="form-group">
                        <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Message Below"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit2" class="btn_1"> Submit</button>
                    </div>
                </form>
            </div>
            <!-- /col -->
            
            <aside class="col-lg-3">
                <div class="widget">
                    <form>
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                        </div>
                        <button type="submit" id="submit" class="btn_1"> Search</button>
                    </form>
                </div>
                <!-- /widget -->
                
                <div class="widget">
                    <div class="widget-title">
                        <h4>Recent Posts</h4>
                    </div>
                    <ul class="comments-list">
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                        <li>
                            <div class="alignleft">
                                <a href="#0"><img src="http://via.placeholder.com/160x160.jpg" alt=""></a>
                            </div>
                            <small>11.08.2016</small>
                            <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                        </li>
                    </ul>
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Blog Categories</h4>
                    </div>
                    <ul class="cats">
                        <li><a href="#">Treatments <span>(12)</span></a></li>
                        <li><a href="#">News <span>(21)</span></a></li>
                        <li><a href="#">Events <span>(44)</span></a></li>
                        <li><a href="#">New treatments <span>(09)</span></a></li>
                        <li><a href="#">Focus in the lab <span>(31)</span></a></li>
                    </ul>
                </div>
                <!-- /widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Popular Tags</h4>
                    </div>
                    <div class="tags">
                        <a href="#">Medicine</a>
                        <a href="#">Treatments</a>
                        <a href="#">Events</a>
                        <a href="#">Specialist</a>
                        <a href="#">Pills</a>
                        <a href="#">Cancer</a>
                    </div>
                </div>
                <!-- /widget -->
                
            </aside>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->
@endsection