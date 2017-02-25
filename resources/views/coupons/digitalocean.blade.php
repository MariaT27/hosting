@extends('base')

@section('content')
<h1 class="mt-0">{{ $meta_title }}</h1>
<div class="row">
  <div class="col-md-6">
    @ru
      <p>Вы когда-нибудь задумывались можно ли бесплатно попробовать услуги одного из лучших хостинг-провайдеров в мире совершенно бесплатно в течение нескольких месяцев? Да, это возможно с помощью промокодов ниже.</p>
    @en
      <p>Have you ever wondered if you could try one of the best web hosting for free for a few months? Yes, you can, thanks to the promo codes below.</p>
    @endlang
    <div class="flex-table flex-table-bordered mb-3">
      <div class="flex-row flex-row-header">
        <div class="flex-cell">@ru Промокод @en Promo Code @endlang</div>
        <div class="flex-cell">@ru Выгода @en Benefits @endlang</div>
      </div>
      <div class="flex-row-group flex-row-striped">
        <div class="flex-row">
          <div class="flex-cell"><span class="label label-info">DO10</span> / <span class="label label-info">DROPLET10</span></div>
          <div class="flex-cell">@ru $10 для новых пользователей @en $10 credit for new users @endlang</div>
        </div>
        <div class="flex-row">
          <div class="flex-cell"><span class="label label-info">BITNAMI</span></div>
          <div class="flex-cell">@ru $10 на счет при регистрации @en $10 off for a new account @endlang</div>
        </div>
        <div class="flex-row">
          <div class="flex-cell"><span class="label label-info">ACTIVATE10</span></div>
          <div class="flex-cell">@ru $10 на счет для нынешних клиентов @en $10 credit for existing customers @endlang</div>
        </div>
        <div class="flex-row">
          <div class="flex-cell"><span class="label label-info">LOWENDBOX</span> / <span class="label label-info">DOPRODUCT</span></div>
          <div class="flex-cell">@ru $15 на счет @en $15 DigitalOcean credits @endlang</div>
        </div>
      </div>
    </div>
    @ru
      <p>Пожалуйста, учтите, что DigitalOcean разрешает использовать лишь <span class="font-bold">один промокод для каждой учетной записи</span>, поэтому, если вы уже использовали какой-либо промокод ранее, то новый может не сработать.</p>

      <h2>Как получить бесплатные месяцы хостинга</h2>
      <ol>
        <li><a class="link" href="{{ config('cfg.digitalocean_link') }}">Зарегистрируйтесь на сайте DigitalOcean</a>.</li>
        <li>Подтвердите адрес вашей электронной почты.</li>
        <li>Перейдите в «Billing» и примените промокод из списка выше.</li>
        <li>Привяжите банковскую карту или заплатите $5 через PayPal для завершения процесса регистрации на DigitalOcean.</li>
      </ol>
    @en
      <p>Remember that DigitalOcean only allow <span class="font-bold">one promo code per account</span>, so if you have redeemed one in the past you may not be able to add another again.</p>

      <h2>How to get free months of VPS</h2>
      <ol>
        <li><a class="link" href="{{ config('cfg.digitalocean_link') }}">Sign up at DigitalOcean</a>.</li>
        <li>Verify your e-mail.</li>
        <li>Move on to Billing and apply any promo code from the above.</li>
        <li>Link your credit card or pay $5 via PayPal to complete the process.</li>
      </ol>
    @endlang
  </div>
</div>
@endsection
