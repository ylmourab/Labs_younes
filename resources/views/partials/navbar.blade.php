<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @foreach ($nav as $item)
        <li class=""><a href="">{{$item->link}}</a></li>
                
            @endforeach
            
            
        </ul>
    </nav>
</header>
<!-- Header section end -->