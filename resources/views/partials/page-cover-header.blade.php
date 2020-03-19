<div class="page-header">
  @if (has_post_thumbnail())
    <div class="hero full-width-section">
      {{ the_post_thumbnail() }}
    </div>
  @endif
  <h1 id="page-title">{!! App::title() !!}</h1>
</div>
