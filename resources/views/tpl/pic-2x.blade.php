<div class="pic-container shortcuts-item">
  <div class="pic-centered-container">
    <div class="pic">
      <img class="js-lazy" data-src="https://life.ivacuum.ru/{{ $slug or $trip->slug }}/{{ $pic }}" data-src2x="https://life.ivacuum.ru/{{ $slug or $trip->slug }}/{{ pathinfo($pic)['filename'] }}@2x.{{ pathinfo($pic)['extension'] }}" src="https://life.ivacuum.ru/0.gif">
    </div>
  </div>
</div>
