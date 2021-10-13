@extends('master.home')

@section('title',$data->tittle)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keyword)
@section('main')

<div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog Details</h2>
                <ul>
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>Blog</li>
                    <li class="active">Blog Details</li>
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
                                    <li><span>Posted On:</span> <a href="#">May 19, 2020</a></li>
                                    <li><span>Posted By:</span> <a href="#">John Anderson</a></li>
                                </ul>
                            </div>
                            <h3>DHS Issues Emergency Directive To Prevent Hacking Attack</h3>
                            <div class="article-image">
                                <img src="{{url('public/site')}}/assets/img/blog-details/blog-details.jpg" alt="image">
                            </div>
                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non
                                numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit, consectetur qui
                                ratione voluptatem sequi.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat labore et dolore magna aliqua.</p>
                            <blockquote class="flaticon-quote">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus aliquid
                                    praesentium eveniet illum asperiores, quidem, ipsum voluptatum numquam ducimus nisi
                                    exercitationem dolorum facilis Repellendus aliquid praesentium eveniet illum
                                    asperiores.</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi
                                tempora incidunt ut labore et dolore magnam aliquam quaerat consectetur adipisicing
                                Lorem ipsum dolor sit amet numquam.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et
                                dolore magnam aliquam quaerat ullamco laboris nisi ut aliquip ex ea.</p>
                            <h3 class="related-posts">Related Post</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item">
                                        <a href="blog-details.html">
                                            <img src="{{url('public/site')}}/assets/img/blog/4.jpg" alt="Image">
                                            <span class="s-date">
                                                08 <br> jun
                                            </span>
                                            <h3>DHS issues emergency directive to prevent hacking attack</h3>
                                        </a>
                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi
                                            pariatur quos.</p>
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="b-d-s-item mb-0">
                                        <a href="blog-details.html">
                                            <img src="{{url('public/site')}}/assets/img/blog/5.jpg" alt="Image">
                                            <span class="s-date">
                                                09 <br> jun
                                            </span>
                                            <h3>Drughydrus Add Google Drive To Roughrobin Torjan</h3>
                                        </a>
                                        <p>Lorem ipsum, dolor sit amet consectetur sit adipisicing Consectetur nisi
                                            pariatur quos.</p>
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
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
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
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
                            <h3 class="widget-title">Search Now</h3>
                            <div class="post-wrap">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <section class="widget widget-peru-posts-thumb">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">April 20, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Drughydrus Add Google Drive To Roughrobin Torjan
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 21, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                DHS Issues Emergency Directive To Prevent Hacking Attack
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 22, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Security In A Fragment World Of Workload
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg4" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2020-06-30">Jun 23, 2020</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Secure Managed IT Cloud Security
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            </div>
                        </section>
                        <section class="widget widget_categories">
                            <h3 class="widget-title">Archives</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">January <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">February <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">March <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">April <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">May <span>2020</span></a>
                                    </li>
                                    <li>
                                        <a href="#">June <span>2020</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li>
                                        <a href="#">Blockchain <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Cyber security <span>(20)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Cybercrime <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Global news <span>(12)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Ransomware <span>(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Whitepapers <span>(17)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_meta">
                            <h3 class="widget-title">Meta</h3>
                            <div class="post-wrap">
                                <ul>
                                    <li><a href="log-in.html">Log in</a></li>
                                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="post-wrap">
                                <div class="tagcloud">
                                    <a href="#">Blockchain (3)</a>
                                    <a href="#">Cyber security (3)</a>
                                    <a href="#">Cybercrime (2)</a>
                                    <a href="#">Global news (2)</a>
                                    <a href="#">Ransomware (1)</a>
                                    <a href="#">Whitepapers (2) </a>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@stop()