@extends('master.home')

@section('title',$data->tittle)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keyword)
@foreach($recentData as $dt)
<style type="text/css">
.post-wrap .item .bg{{$dt->id}} {
    background-image: url({{url($dt->images)}});

};
</style>
@endforeach
@section('main')

<div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>Chi tiết {{$data->get_cat->name}}</h2>
                <ul>
                    <li>
                    <a href="{{route('home.index')}}">Trang chủ</a>

                    </li>
                    <li>{{$data->get_cat->name}}</li>
                    <li class="active">{{$data->tittle}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Ngày đăng bài: </span> <a href="#">{{date('d-m-Y',strtotime($data->created_at))}}</a></li>
                                </ul>
                            </div>
                            <h3>{{$data->tittle}}k</h3>
                            <div class="article-image">
                                <img src="{{url($data->images)}}" style="width:100%;height:480px" alt="image">
                            </div>
                            {!!$data->description!!}
                          
                           
                        </div>
                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class='bx bx-share-alt'></i></span>
                                <a href="#">Share</a>
                            </div>
                            <div class="article-share">
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook pt-2'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter pt-2'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin pt-2'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt pt-2'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#"><i class='bx bx-left-arrow-alt'></i> Prev Post</a>
                                </div>
                                <div class="nav-next">
                                    <a href="#">Next Post <i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h3 class="comments-title">3 Comments:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{url('public/site')}}/assets/img/blog-details/comment-img-1.jpg" class="avatar"
                                                    alt="image">
                                                <b class="fn">Jimy Pearson</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="{{url('public/site')}}/assets/img/blog-details/comment-img-2.jpg"
                                                            class="avatar" alt="image">
                                                        <b class="fn">Karl Mekar</b>
                                                        <span class="says">says:</span>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <span>Jun 24, 2020 at 10:59 am</span>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt explicabo. Nemo enim</p>
                                                </div>
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <div class="comment-body border-none">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="{{url('public/site')}}/assets/img/blog-details/comment-img-3.jpg" class="avatar"
                                                    alt="image">
                                                <b class="fn">Tesa Jack</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Jun 24, 2020 at 10:59 am</span>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                            required="required"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit"
                                            value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <div class="widget widget_search">
                            <h3 class="widget-title">Tìm kiếm</h3>
                            <div class="post-wrap">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Từ khóa:</span>
                                        <input type="search" class="search-field" placeholder="Từ khoá...">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">Bài viết nổi bật</h3>
                            <div class="post-wrap">
                            @foreach($recentData as $dt)

                                <article class="item">
                                    <a href="{{route('home.blogDetail',['slug'=>$dt->slug])}}" class="thumb">
                                        <span class="fullimage cover bg{{$dt->id}}" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="{{date('d-m-Y',strtotime($data->created_at))}}">{{date('d-m-Y',strtotime($data->created_at))}}</time>
                                        <h4 class="title usmall">
                                            <a href="{{route('home.blogDetail',['slug'=>$dt->slug])}}">
                                                {{$dt->tittle}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            @endforeach
                            </div>
                        </section>
                      
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="post-wrap">
                                <div class="tagcloud">
                                @foreach($tag as $t)
                                    <a href="#">{{$t}}</a>
                                @endforeach
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@stop()