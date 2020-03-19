<div class="page-header">
  @if (has_post_thumbnail())
    <div class="hero full-width-section jarallax" data-jarallax data-speed="0.2">
      {{ the_post_thumbnail(null, ['class' => 'jarallax-img']) }}
      <a href="#page-title">@include('icons.down-chevron')</a>
    </div>
  @endif
  <h1 id="page-title">{!! App::title() !!}</h1>
</div>
