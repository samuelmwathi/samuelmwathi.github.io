<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword'
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search</button>
        </form>
    </aside>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
        <ul class="list cat-list">
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Agriculture</p>
                    <p>(37)</p>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Investment</p>
                    <p>(10)</p>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Modern technology</p>
                    <p>(03)</p>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Products</p>
                    <p>(11)</p>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Inspiration</p>
                    <p>21</p>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="d-flex">
                    <p>Health Care (21)</p>
                    <p>09</p>
                </a>
            </li>
        </ul>
    </aside>
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
        @foreach($recentPosts as $post)
        <div class="media post_item">
            <img style="max-height: 50px" src="{{ $post->featured_image == null ? asset('images/logo.png') : asset($post->featured_image) }}" alt="post">
            <div class="media-body">
                <a href="blog_details.html">
                    <h3 style="color: #2d2d2d;">{{ \Illuminate\Support\Str::limit($post->title,20) }}</h3>
                </a>
                <p>{{ $post->created_at->format('m d, Y') }}</p>
            </div>
        </div>
        @endforeach

    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="javascript:;">agriculture</a>
            </li>
            <li>
                <a href="javascript:;">investment</a>
            </li>
            <li>
                <a href="javascript:;">technology</a>
            </li>
            <li>
                <a href="javascript:;">insurance</a>
            </li>
            <li>
                <a href="javascript:;">food</a>
            </li>
            <li>
                <a href="javascript:;">life style</a>
            </li>
            <li>
                <a href="javascript:;">savings</a>
            </li>
            <li>
                <a href="javascript:;">mortgage</a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_5.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_6.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_7.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_8.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_9.png') }}" alt="">
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img class="img-fluid" src="{{ asset('front/assets/img/post/post_10.png') }}" alt="">
                </a>
            </li>
        </ul>
    </aside>
    <aside class="single_sidebar_widget newsletter_widget d-none">
        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe</button>
        </form>
    </aside>
</div>
