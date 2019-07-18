<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>

    @if (has_nav_menu('primary_navigation'))
       {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto']) !!}
    @endif

  </div>
</header>




{{-- 
  https://github.com/MWDelaney/sage-bootstrap4-navwalker 
--}}

