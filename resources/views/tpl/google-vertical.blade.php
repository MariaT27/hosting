@if (App::environment() === 'production')
  <ins
    class="adsbygoogle tw-block tw-mobile-wide"
    data-ad-client="ca-pub-7802683087624570"
    data-ad-slot="3039258747"
    data-ad-format="auto"
    data-full-width-responsive="true"
  ></ins>
  <script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
@elseif (App::isLocal())
  <div class="tw-bg-teal-600 tw-text-white tw-flex tw-justify-center tw-items-center tw-py-12 tw-rounded">google-vertical</div>
@endif
