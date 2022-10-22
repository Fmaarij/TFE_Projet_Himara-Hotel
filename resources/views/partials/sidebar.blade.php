<div class="col-lg-3 col-12">
    <div class="sidebar">
        <aside class="widget noborder">
            <div class="search">
                <form class="widget-search" action="{{ route('rooms') }}" method="GET">
                    <input type="search" placeholder="Search" name="search" value="{{ request()->query('search') }}">
                    <button class="btn-search" id="searchsubmit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </aside>
        <!-- WIDGET -->
        <aside class="widget">
            <h4 class="widget-title">CATEGORIES</h4>
            <ul class="categories">
                {{-- {{dd($catagor)}} --}}
                @foreach ($catagor as $cat)
                    <li>
                        <a href="{{ route('room.catagor', $cat->id) }}">{{ $cat->catgorname }}</a>
                    </li>
                @endforeach
                {{-- <li>
                    <a href="{{ url('double') }}">Double Room<span class="posts-num">24</span></a>
                </li> --}}
            </ul>
        </aside>
        <!-- WIDGET -->
        <aside class="widget">
            <h4 class="widget-title">Tags</h4>
            <div class="tagcloud">
                @foreach ($tag as $tag)
                    <a href="{{route('room.tag',$tag->id)}}">
                        <span class="tag">{{$tag->tagname}}</span></a>
                @endforeach
            </div>
        </aside>
    </div>
</div>
