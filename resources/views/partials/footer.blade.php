<footer class="content-info">
  <div class="container d-flex flex-column flex-md-row align-items-center align-items-md-stretch">
    <div class="btn-container">
      <a class="btn btn-primary btn-lg book-a-room" href="{{ get_permalink(get_option('quick_contact_url')) }}">{{ _e('Book A Room', 'keelmans-lodge-theme') }}</a>
    </div>
    <div class="directions">
      <h4>{{ _e('Directions', 'keelmans-lodge-theme') }}</h4>
      <iframe class="keelmans-location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.3418197247875!2d-1.75443568391004!3d54.984640658438444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487dd86538022a65%3A0x90c6d0b53a0f6321!2sThe%20Keelman!5e0!3m2!1sen!2suk!4v1581451993621!5m2!1sen!2suk" width="175" height="110" allowfullscreen="" frameBorder="0"></iframe>
    </div>
    <div class="name-address">
      <h3 class="brand">{!! esc_html__(get_bloginfo('name', 'display')) !!}</h3>
      <p class="keelmans-address">
        @if( !empty( get_option('address') ) )
          @php  echo nl2br( get_option('address') ) @endphp
        @endif
      </p>
    </div>
    <div class="social-networks d-flex justify-content-around align-self-md-stretch align-items-md-center">
      @if ( !empty( get_option('facebook_url') ) )
        <a class="icon facebook-icon red-icon" title="The Keelmans Facebook Page" href="{{ get_option('facebook_url') }}" target="_blank">
          @include('icons.facebook')
        </a>
      @endif
      @if ( !empty( get_option('twitter_url') ) )
        <a class="icon twitter-icon gold-icon" title="The Keelmans Twitter Profile" href="{{ get_option('twitter_url') }}" target="_blank">
          @include('icons.twitter')
        </a>
      @endif
      @if ( !empty( get_option('instagram_url') ) )
        <a class="icon mail-icon green-icon" title="The Keelmans Instagram Page" href="{{ get_option('instagram_url') }}" target="_blank">
          @include('icons.instagram')
        </a>
      @endif
    </div>
    <div class="phone-navmenu">
      <p class="keelmans-phone">{{ _e('Phone', 'keelmans-lodge-theme') }}:
        @if( !empty( get_option('phone1') ) )
          {!! get_option('phone1') !!}
        @endif
      </p>
      <nav class="nav-secondary">
        @if ( has_nav_menu('footer_menu') )
          {!! wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'nav justify-content-md-between']) !!}
        @endif
      </nav>
    </div>
    <div class="btn-container">
      <a class="btn btn-lg btn-primary big-lamp" href="{{ get_option('pub_brewery_url') }}">{{ _e('Big Lamp Brewery', 'keelmans-lodge-theme') }}</a>
    </div>
  </div>
</footer>
<div class="footer-nav clearfix">
  <nav class="nav-primary" id="nav-primary-footer">
    @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</div>
