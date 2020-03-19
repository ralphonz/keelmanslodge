<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-md align-items-md-stretch" id="nav-primary">
      <div class="navbar-brand">
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        <div class="brand-description">
          {{ get_bloginfo('description', 'display')}}
        </div>
      </div>
      @if (is_front_page())
        <a class="btn btn-header-cover book-a-room" href="{{ get_permalink(get_option('quick_contact_url')) }}">{{ _e('Check Availibility', 'keelmans-lodge-theme') }}</a>
      @endif
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
        <span class="sr-only">{{ _e('Toggle navigation', 'keelmans-lodge-theme') }}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-between" id="navbarSupportedContent">
        @if (!is_front_page())
          <a class="btn btn-header book-a-room" href="{{ get_permalink(get_option('quick_contact_url')) }}">{{ _e('Book A Room', 'keelmans-lodge-theme') }}</a>
        @endif
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav nav mr-auto']) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
