<?php \Breadcrumbs::push(trans('life.japanese')); ?>

@extends('life.base', [
  'meta_title' => trans('life.japanese'),
])

{{--
https://en.wikipedia.org/wiki/List_of_kanji_by_concept
--}}

@section('content')
<h2 class="mt-0">{{ trans('life.japanese') }}</h2>

@ru
  <p>Полезные ресурсы:</p>
  <ul>
    <li><a class="link" href="http://jisho.org/">jisho.org</a> — словарь</li>
    <li><a class="link" href="https://www.wanikani.com/">wanikani.com</a> — онлайн-сервис для изучения ключей, кандзи и иероглифов</li>
  </ul>
@en
  <p>Useful resources:</p>
  <ul>
    <li><a class="link" href="http://jisho.org/">jisho.org</a> — powerful dictionary</li>
    <li><a class="link" href="https://www.wanikani.com/">wanikani.com</a> — web application for learning radicals, kanji and vocabulary</li>
  </ul>
@endru

<div class="row mt-4">
  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
    @ru
      <h3>Азбука катакана</h3>
      <p><a class="link" href="http://www.tofugu.com/japanese/learn-katakana/">Ассоциации</a>.</p>
    @en
      <h3>Katakana syllabary</h3>
      <p><a class="link" href="http://www.tofugu.com/japanese/learn-katakana/">How to learn</a>.</p>
    @endru
    <table class="table-stats text-center">
      <tr>
        <td>
          <div class="f28">ア</div>
          @ru а @en a @endlang
        </td>
        <td>
          <div class="f28">イ</div>
          @ru и @en i @endlang
        </td>
        <td>
          <div class="f28">ウ</div>
          @ru у @en u @endlang
        </td>
        <td>
          <div class="f28">エ</div>
          @ru э @en e @endlang
        </td>
        <td>
          <div class="f28">オ</div>
          @ru о @en o @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">カ</div>
          @ru ка @en ka @endlang
        </td>
        <td>
          <div class="f28">キ</div>
          @ru ки @en ki @endlang
        </td>
        <td>
          <div class="f28">ク</div>
          @ru ку @en ku @endlang
        </td>
        <td>
          <div class="f28">ケ</div>
          @ru кэ @en ke @endlang
        </td>
        <td>
          <div class="f28">コ</div>
          @ru ко @en ko @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">サ</div>
          @ru са @en sa @endlang
        </td>
        <td>
          <div class="f28">シ</div>
          @ru си @en s[h]i @endlang
        </td>
        <td>
          <div class="f28">ス</div>
          @ru су @en su @endlang
        </td>
        <td>
          <div class="f28">セ</div>
          @ru сэ @en se @endlang
        </td>
        <td>
          <div class="f28">ソ</div>
          @ru со @en so @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">タ</div>
          @ru та @en ta @endlang
        </td>
        <td>
          <div class="f28">チ</div>
          @ru ти @en chi @endlang
        </td>
        <td>
          <div class="f28">ツ</div>
          @ru цу @en tsu @endlang
        </td>
        <td>
          <div class="f28">テ</div>
          @ru тэ @en te @endlang
        </td>
        <td>
          <div class="f28">ト</div>
          @ru то @en to @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ナ</div>
          @ru на @en na @endlang
        </td>
        <td>
          <div class="f28">ニ</div>
          @ru ни @en ni @endlang
        </td>
        <td>
          <div class="f28">ヌ</div>
          @ru ну @en nu @endlang
        </td>
        <td>
          <div class="f28">ネ</div>
          @ru нэ @en ne @endlang
        </td>
        <td>
          <div class="f28">ノ</div>
          @ru но @en no @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ハ</div>
          @ru ха @en ha @endlang
        </td>
        <td>
          <div class="f28">ヒ</div>
          @ru хи @en hi @endlang
        </td>
        <td>
          <div class="f28">フ</div>
          @ru фу @en fu @endlang
        </td>
        <td>
          <div class="f28">ヘ</div>
          @ru хэ @en he @endlang
        </td>
        <td>
          <div class="f28">ホ</div>
          @ru хо @en ho @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">マ</div>
          @ru ма @en ma @endlang
        </td>
        <td>
          <div class="f28">ミ</div>
          @ru ми @en mi @endlang
        </td>
        <td>
          <div class="f28">ム</div>
          @ru му @en mu @endlang
        </td>
        <td>
          <div class="f28">メ</div>
          @ru мэ @en me @endlang
        </td>
        <td>
          <div class="f28">モ</div>
          @ru мо @en mo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ヤ</div>
          @ru я @en ya @endlang
        </td>
        <td></td>
        <td>
          <div class="f28">ユ</div>
          @ru ю @en yu @endlang
        </td>
        <td></td>
        <td>
          <div class="f28">ヨ</div>
          @ru ё @en yo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ラ</div>
          @ru ра @en ra @endlang
        </td>
        <td>
          <div class="f28">リ</div>
          @ru ри @en ri @endlang
        </td>
        <td>
          <div class="f28">ル</div>
          @ru ру @en ru @endlang
        </td>
        <td>
          <div class="f28">レ</div>
          @ru рэ @en re @endlang
        </td>
        <td>
          <div class="f28">ロ</div>
          @ru ро @en ro @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ワ</div>
          @ru ва @en wa @endlang
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <div class="f28">ヲ</div>
          @ru [у]о @en wo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ン</div>
          @ru н @en n @endlang
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>
          <div class="f28">ガ</div>
          @ru га @en ga @endlang
        </td>
        <td>
          <div class="f28">ギ</div>
          @ru ги @en gi @endlang
        </td>
        <td>
          <div class="f28">グ</div>
          @ru гу @en gu @endlang
        </td>
        <td>
          <div class="f28">ゲ</div>
          @ru ге @en ge @endlang
        </td>
        <td>
          <div class="f28">ゴ</div>
          @ru го @en go @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ザ</div>
          @ru дза @en za @endlang
        </td>
        <td>
          <div class="f28">ジ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">ズ</div>
          @ru дзу @en zu @endlang
        </td>
        <td>
          <div class="f28">ゼ</div>
          @ru дзэ @en ze @endlang
        </td>
        <td>
          <div class="f28">ゾ</div>
          @ru дзо @en zo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ダ</div>
          @ru да @en da @endlang
        </td>
        <td>
          <div class="f28">ヂ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">ヅ</div>
          @ru дзу @en zu @endlang
        </td>
        <td>
          <div class="f28">デ</div>
          @ru дэ @en de @endlang
        </td>
        <td>
          <div class="f28">ド</div>
          @ru до @en do @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">バ</div>
          @ru ба @en ba @endlang
        </td>
        <td>
          <div class="f28">ビ</div>
          @ru би @en bi @endlang
        </td>
        <td>
          <div class="f28">ブ</div>
          @ru бу @en bu @endlang
        </td>
        <td>
          <div class="f28">ベ</div>
          @ru бэ @en be @endlang
        </td>
        <td>
          <div class="f28">ボ</div>
          @ru бо @en bo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">パ</div>
          @ru па @en pa @endlang
        </td>
        <td>
          <div class="f28">ピ</div>
          @ru пи @en pi @endlang
        </td>
        <td>
          <div class="f28">プ</div>
          @ru пу @en pu @endlang
        </td>
        <td>
          <div class="f28">ペ</div>
          @ru пэ @en pe @endlang
        </td>
        <td>
          <div class="f28">ポ</div>
          @ru по @en po @endlang
        </td>
      </tr>
    </table>
  </div>
  <div class="col-lg-6 mb-4">
    @ru
      <h3>Азбука хирагана</h3>
      <p><a class="link" href="http://www.tofugu.com/japanese/learn-hiragana/">Ассоциации</a>.</p>
    @en
      <h3>Hiragana syllabary</h3>
      <p><a class="link" href="http://www.tofugu.com/japanese/learn-hiragana/">How to learn</a>.</p>
    @endru
    <table class="table-stats text-center">
      <tr>
        <td>
          <div class="f28">あ</div>
          @ru а @en a @endlang
        </td>
        <td>
          <div class="f28">い</div>
          @ru и @en i @endlang
        </td>
        <td>
          <div class="f28">う</div>
          @ru у @en u @endlang
        </td>
        <td>
          <div class="f28">え</div>
          @ru э @en e @endlang
        </td>
        <td>
          <div class="f28">お</div>
          @ru о @en o @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">か</div>
          @ru ка @en ka @endlang
        </td>
        <td>
          <div class="f28">き</div>
          @ru ки @en ki @endlang
        </td>
        <td>
          <div class="f28">く</div>
          @ru ку @en ku @endlang
        </td>
        <td>
          <div class="f28">け</div>
          @ru кэ @en ke @endlang
        </td>
        <td>
          <div class="f28">こ</div>
          @ru ко @en ko @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">さ</div>
          @ru са @en sa @endlang
        </td>
        <td>
          <div class="f28">し</div>
          @ru си @en s[h]i @endlang
        </td>
        <td>
          <div class="f28">す</div>
          @ru су @en su @endlang
        </td>
        <td>
          <div class="f28">せ</div>
          @ru сэ @en se @endlang
        </td>
        <td>
          <div class="f28">そ</div>
          @ru со @en so @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">た</div>
          @ru та @en ta @endlang
        </td>
        <td>
          <div class="f28">ち</div>
          @ru ти @en chi @endlang
        </td>
        <td>
          <div class="f28">つ</div>
          @ru цу @en tsu @endlang
        </td>
        <td>
          <div class="f28">て</div>
          @ru тэ @en te @endlang
        </td>
        <td>
          <div class="f28">と</div>
          @ru то @en to @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">な</div>
          @ru на @en na @endlang
        </td>
        <td>
          <div class="f28">に</div>
          @ru ни @en ni @endlang
        </td>
        <td>
          <div class="f28">ぬ</div>
          @ru ну @en nu @endlang
        </td>
        <td>
          <div class="f28">ね</div>
          @ru нэ @en ne @endlang
        </td>
        <td>
          <div class="f28">の</div>
          @ru но @en no @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">は</div>
          @ru ха @en ha @endlang
        </td>
        <td>
          <div class="f28">ひ</div>
          @ru хи @en hi @endlang
        </td>
        <td>
          <div class="f28">ふ</div>
          @ru фу @en fu @endlang
        </td>
        <td>
          <div class="f28">へ</div>
          @ru хэ @en he @endlang
        </td>
        <td>
          <div class="f28">ほ</div>
          @ru хо @en ho @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ま</div>
          @ru ма @en ma @endlang
        </td>
        <td>
          <div class="f28">み</div>
          @ru ми @en mi @endlang
        </td>
        <td>
          <div class="f28">む</div>
          @ru му @en mu @endlang
        </td>
        <td>
          <div class="f28">め</div>
          @ru мэ @en me @endlang
        </td>
        <td>
          <div class="f28">も</div>
          @ru мо @en mo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">や</div>
          @ru я @en ya @endlang
        </td>
        <td></td>
        <td>
          <div class="f28">ゆ</div>
          @ru ю @en yu @endlang
        </td>
        <td></td>
        <td>
          <div class="f28">よ</div>
          @ru ё @en yo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ら</div>
          @ru ра @en ra @endlang
        </td>
        <td>
          <div class="f28">り</div>
          @ru ри @en ri @endlang
        </td>
        <td>
          <div class="f28">る</div>
          @ru ру @en ru @endlang
        </td>
        <td>
          <div class="f28">れ</div>
          @ru рэ @en re @endlang
        </td>
        <td>
          <div class="f28">ろ</div>
          @ru ро @en ro @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">わ</div>
          @ru ва @en wa @endlang
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <div class="f28">を</div>
          @ru [у]о @en wo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ん</div>
          @ru н @en n @endlang
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>
          <div class="f28">が</div>
          @ru га @en ga @endlang
        </td>
        <td>
          <div class="f28">ぎ</div>
          @ru ги @en gi @endlang
        </td>
        <td>
          <div class="f28">ぐ</div>
          @ru гу @en gu @endlang
        </td>
        <td>
          <div class="f28">げ</div>
          @ru ге @en ge @endlang
        </td>
        <td>
          <div class="f28">ご</div>
          @ru го @en go @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ざ</div>
          @ru дза @en za @endlang
        </td>
        <td>
          <div class="f28">じ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">ず</div>
          @ru дзу @en zu @endlang
        </td>
        <td>
          <div class="f28">ぜ</div>
          @ru дзэ @en ze @endlang
        </td>
        <td>
          <div class="f28">ぞ</div>
          @ru дзо @en zo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">だ</div>
          @ru да @en da @endlang
        </td>
        <td>
          <div class="f28">ぢ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">づ</div>
          @ru дзу @en zu @endlang
        </td>
        <td>
          <div class="f28">で</div>
          @ru дэ @en de @endlang
        </td>
        <td>
          <div class="f28">ど</div>
          @ru до @en do @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ば</div>
          @ru ба @en ba @endlang
        </td>
        <td>
          <div class="f28">び</div>
          @ru би @en bi @endlang
        </td>
        <td>
          <div class="f28">ぶ</div>
          @ru бу @en bu @endlang
        </td>
        <td>
          <div class="f28">べ</div>
          @ru бэ @en be @endlang
        </td>
        <td>
          <div class="f28">ぼ</div>
          @ru бо @en bo @endlang
        </td>
      </tr>
      <tr>
        <td>
          <div class="f28">ぱ</div>
          @ru па @en pa @endlang
        </td>
        <td>
          <div class="f28">ぴ</div>
          @ru пи @en pi @endlang
        </td>
        <td>
          <div class="f28">ぷ</div>
          @ru пу @en pu @endlang
        </td>
        <td>
          <div class="f28">ぺ</div>
          @ru пэ @en pe @endlang
        </td>
        <td>
          <div class="f28">ぽ</div>
          @ru по @en po @endlang
        </td>
      </tr>
    </table>
  </div>
</div>

<h4>@ru Ёон @en Yōon @endlang</h4>
<div class="row">
  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
    <table class="table-stats text-center">
      <tr>
        <td colspan="4">
          @ru катакана @en katakana @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right"></td>
        <td class="thead border-right">
          <div class="f28">ヤ</div>
          @ru я @en ya @endlang
        </td>
        <td class="thead border-right">
          <div class="f28">ユ</div>
          @ru ю @en yu @endlang
        </td>
        <td class="thead">
          <div class="f28">ヨ</div>
          @ru ё @en yo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">キ</div>
          @ru ки @en ki @endlang
        </td>
        <td>
          <div class="f28">キャ</div>
          @ru кя @en kya @endlang
        </td>
        <td>
          <div class="f28">キュ</div>
          @ru кю @en kyu @endlang
        </td>
        <td>
          <div class="f28">キョ</div>
          @ru кё @en kyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">シ</div>
          @ru си @en shi @endlang
        </td>
        <td>
          <div class="f28">シャ</div>
          @ru ся @en sha @endlang
        </td>
        <td>
          <div class="f28">シュ</div>
          @ru сю @en shu @endlang
        </td>
        <td>
          <div class="f28">ショ</div>
          @ru сё @en sho @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">チ</div>
          @ru ти @en chi @endlang
        </td>
        <td>
          <div class="f28">チャ</div>
          @ru тя @en cha @endlang
        </td>
        <td>
          <div class="f28">チュ</div>
          @ru тю @en chu @endlang
        </td>
        <td>
          <div class="f28">チョ</div>
          @ru тё @en cho @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ニ</div>
          @ru ни @en ni @endlang
        </td>
        <td>
          <div class="f28">ニャ</div>
          @ru ня @en nya @endlang
        </td>
        <td>
          <div class="f28">ニュ</div>
          @ru ню @en nyu @endlang
        </td>
        <td>
          <div class="f28">ニョ</div>
          @ru нё @en nyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ヒ</div>
          @ru хи @en hi @endlang
        </td>
        <td>
          <div class="f28">ヒャ</div>
          @ru хя @en hya @endlang
        </td>
        <td>
          <div class="f28">ヒュ</div>
          @ru хю @en hyu @endlang
        </td>
        <td>
          <div class="f28">ヒョ</div>
          @ru хё @en hyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ミ</div>
          @ru ми @en mi @endlang
        </td>
        <td>
          <div class="f28">ミャ</div>
          @ru мя @en mya @endlang
        </td>
        <td>
          <div class="f28">ミュ</div>
          @ru мю @en myu @endlang
        </td>
        <td>
          <div class="f28">ミョ</div>
          @ru мё @en myo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">リ</div>
          @ru ри @en ri @endlang
        </td>
        <td>
          <div class="f28">リャ</div>
          @ru ря @en rya @endlang
        </td>
        <td>
          <div class="f28">リュ</div>
          @ru рю @en ryu @endlang
        </td>
        <td>
          <div class="f28">リョ</div>
          @ru рё @en ryo @endlang
        </td>
      </tr>
      <tr>
        <td colspan="4">
          @ru дакутэн @en dakuten @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ギ</div>
          @ru ги @en gi @endlang
        </td>
        <td>
          <div class="f28">ギャ</div>
          @ru гя @en gya @endlang
        </td>
        <td>
          <div class="f28">ギュ</div>
          @ru гю @en gyu @endlang
        </td>
        <td>
          <div class="f28">ギョ</div>
          @ru гё @en gyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ジ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">ジャ</div>
          @ru дзя @en ja @endlang
        </td>
        <td>
          <div class="f28">ジュ</div>
          @ru дзю @en ju @endlang
        </td>
        <td>
          <div class="f28">ジョ</div>
          @ru дзё @en jo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ビ</div>
          @ru би @en bi @endlang
        </td>
        <td>
          <div class="f28">ビャ</div>
          @ru бя @en bya @endlang
        </td>
        <td>
          <div class="f28">ビュ</div>
          @ru бю @en byu @endlang
        </td>
        <td>
          <div class="f28">ビョ</div>
          @ru бё @en byo @endlang
        </td>
      </tr>
      <tr>
        <td colspan="4">
          @ru хандакутэн @en handakuten @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ピ</div>
          @ru пи @en pi @endlang
        </td>
        <td>
          <div class="f28">ピャ</div>
          @ru пя @en pya @endlang
        </td>
        <td>
          <div class="f28">ピュ</div>
          @ru пю @en pyu @endlang
        </td>
        <td>
          <div class="f28">ピョ</div>
          @ru пё @en pyo @endlang
        </td>
      </tr>
    </table>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
    <table class="table-stats text-center">
      <tr>
        <td colspan="4">
          @ru хирагана @en hiragana @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right"></td>
        <td class="thead border-right">
          <div class="f28">や</div>
          @ru я @en ya @endlang
        </td>
        <td class="thead border-right">
          <div class="f28">ゆ</div>
          @ru ю @en yu @endlang
        </td>
        <td class="thead">
          <div class="f28">よ</div>
          @ru ё @en yo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">き</div>
          @ru ки @en ki @endlang
        </td>
        <td>
          <div class="f28">きゃ</div>
          @ru кя @en kya @endlang
        </td>
        <td>
          <div class="f28">きゅ</div>
          @ru кю @en kyu @endlang
        </td>
        <td>
          <div class="f28">きょ</div>
          @ru кё @en kyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">し</div>
          @ru си @en shi @endlang
        </td>
        <td>
          <div class="f28">しゃ</div>
          @ru ся @en sha @endlang
        </td>
        <td>
          <div class="f28">しゅ</div>
          @ru сю @en shu @endlang
        </td>
        <td>
          <div class="f28">しょ</div>
          @ru сё @en sho @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ち</div>
          @ru ти @en chi @endlang
        </td>
        <td>
          <div class="f28">ちゃ</div>
          @ru тя @en cha @endlang
        </td>
        <td>
          <div class="f28">ちゅ</div>
          @ru тю @en chu @endlang
        </td>
        <td>
          <div class="f28">ちょ</div>
          @ru тё @en cho @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">に</div>
          @ru ни @en ni @endlang
        </td>
        <td>
          <div class="f28">にゃ</div>
          @ru ня @en nya @endlang
        </td>
        <td>
          <div class="f28">にゅ</div>
          @ru ню @en nyu @endlang
        </td>
        <td>
          <div class="f28">にょ</div>
          @ru нё @en nyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ひ</div>
          @ru хи @en hi @endlang
        </td>
        <td>
          <div class="f28">ひゃ</div>
          @ru хя @en hya @endlang
        </td>
        <td>
          <div class="f28">ひゅ</div>
          @ru хю @en hyu @endlang
        </td>
        <td>
          <div class="f28">ひょ</div>
          @ru хё @en hyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">み</div>
          @ru ми @en mi @endlang
        </td>
        <td>
          <div class="f28">みゃ</div>
          @ru мя @en mya @endlang
        </td>
        <td>
          <div class="f28">みゅ</div>
          @ru мю @en myu @endlang
        </td>
        <td>
          <div class="f28">みょ</div>
          @ru мё @en myo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">り</div>
          @ru ри @en ri @endlang
        </td>
        <td>
          <div class="f28">りゃ</div>
          @ru ря @en rya @endlang
        </td>
        <td>
          <div class="f28">りゅ</div>
          @ru рю @en ryu @endlang
        </td>
        <td>
          <div class="f28">りょ</div>
          @ru рё @en ryo @endlang
        </td>
      </tr>
      <tr>
        <td colspan="4">
          @ru дакутэн @en dakuten @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ぎ</div>
          @ru ги @en gi @endlang
        </td>
        <td>
          <div class="f28">ぎゃ</div>
          @ru гя @en gya @endlang
        </td>
        <td>
          <div class="f28">ぎゅ</div>
          @ru гю @en gyu @endlang
        </td>
        <td>
          <div class="f28">ぎょ</div>
          @ru гё @en gyo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">じ</div>
          @ru дзи @en ji @endlang
        </td>
        <td>
          <div class="f28">じゃ</div>
          @ru дзя @en ja @endlang
        </td>
        <td>
          <div class="f28">じゅ</div>
          @ru дзю @en ju @endlang
        </td>
        <td>
          <div class="f28">じょ</div>
          @ru дзё @en jo @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">び</div>
          @ru би @en bi @endlang
        </td>
        <td>
          <div class="f28">びゃ</div>
          @ru бя @en bya @endlang
        </td>
        <td>
          <div class="f28">びゅ</div>
          @ru бю @en byu @endlang
        </td>
        <td>
          <div class="f28">びょ</div>
          @ru бё @en byo @endlang
        </td>
      </tr>
      <tr>
        <td colspan="4">
          @ru хандакутэн @en handakuten @endlang
        </td>
      </tr>
      <tr>
        <td class="thead border-right">
          <div class="f28">ぴ</div>
          @ru пи @en pi @endlang
        </td>
        <td>
          <div class="f28">ぴゃ</div>
          @ru пя @en pya @endlang
        </td>
        <td>
          <div class="f28">ぴゅ</div>
          @ru пю @en pyu @endlang
        </td>
        <td>
          <div class="f28">ぴょ</div>
          @ru пё @en pyo @endlang
        </td>
      </tr>
    </table>
  </div>
</div>

@ru
  <div class="h2">Ключи (радикалы)</div>
  <div class="h3">1 черта</div>
@en
  <div class="h2">Radicals</div>
  <div class="h3">1 stroke</div>
@endru
<?php
$glyphs = [[
  'ru' => 'один',
  'en' => 'one',
  'jp' => '一',
], [
  'ru' => 'линия',
  'en' => 'line',
  'jp' => '丨',
], [
  'ru' => 'точка',
  'en' => 'dot',
  'jp' => '丶',
], [
  'ru' => 'откидная влево',
  'en' => 'slash',
  'jp' => 'ノ',
], [
  'ru' => 'второй',
  'en' => 'second',
  'jp' => '乙',
], [
  'ru' => 'крюк',
  'en' => 'hook',
  'jp' => '亅',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h3">2 черты</div>
@en
  <div class="h3">2 strokes</div>
@endru
<?php
$glyphs = [[
  'ru' => 'два',
  'en' => 'two',
  'jp' => '二',
], [
  'ru' => 'верхушка',
  'en' => 'lid',
  'jp' => '亠',
], [
  'ru' => 'человек',
  'en' => 'man',
  'jp' => '人',
], [
  'ru' => 'ноги',
  'en' => 'legs',
  'jp' => '儿',
], [
  'ru' => 'входить',
  'en' => 'enter',
  'jp' => '乙',
], [
  'ru' => 'восемь',
  'en' => 'eight',
  'jp' => '亅',
], [
  'ru' => 'рамка',
  'en' => 'inverted box',
  'jp' => '冂',
], [
  'ru' => 'обложка',
  'en' => 'cover',
  'jp' => '冖',
], [
  'ru' => 'лед',
  'en' => 'ice',
  'jp' => '⼎',
], [
  'ru' => 'стол',
  'en' => 'desk',
  'jp' => '⼏',
], [
  'ru' => 'контейнер',
  'en' => 'container',
  'jp' => '⼐',
], [
  'ru' => 'меч',
  'en' => 'sword',
  'jp' => '⼑',
], [
  'ru' => 'сила',
  'en' => 'power',
  'jp' => '⼒',
], [
  'ru' => 'охватывать',
  'en' => 'embrace',
  'jp' => '⼓',
], [
  'ru' => 'ложка',
  'en' => 'spoon',
  'jp' => '⼔',
], [
  'ru' => 'ящик',
  'en' => 'box frame',
  'jp' => '⼕',
], [
  'ru' => 'десять',
  'en' => 'ten',
  'jp' => '⼗',
], [
  'ru' => 'гадать',
  'en' => 'divination',
  'jp' => '⼘',
], [
  'ru' => 'печать',
  'en' => 'seal',
  'jp' => '⼙',
], [
  'ru' => 'обрыв',
  'en' => 'cliff',
  'jp' => '⼚',
], [
  'ru' => 'личный',
  'en' => 'private',
  'jp' => '⼛',
], [
  'ru' => 'еще',
  'en' => 'again',
  'jp' => '⼜',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h3">3 черты</div>
@en
  <div class="h3">3 strokes</div>
@endru
<?php
$glyphs = [[
  'ru' => 'прятать',
  'en' => 'dead',
  'jp' => '⼖',
], [
  'ru' => 'рот',
  'en' => 'mouth',
  'jp' => '⼝',
], [
  'ru' => 'граница',
  'en' => 'enclosure',
  'jp' => '⼞',
], [
  'ru' => 'земля',
  'en' => 'earth',
  'jp' => '⼟',
], [
  'ru' => 'ученый',
  'en' => 'scholar',
  'jp' => '⼠',
], [
  'ru' => 'следовать',
  'en' => 'winter',
  'jp' => '⼡',
], [
  'ru' => 'медленно идти',
  'en' => 'winter variant',
  'jp' => '⼢',
], [
  'ru' => 'вечер',
  'en' => 'evening',
  'jp' => '⼣',
], [
  'ru' => 'большой',
  'en' => 'big',
  'jp' => '⼤',
], [
  'ru' => 'женщина',
  'en' => 'woman',
  'jp' => '⼥',
], [
  'ru' => 'ребенок',
  'en' => 'child',
  'jp' => '⼦',
], [
  'ru' => 'крыша',
  'en' => 'roof',
  'jp' => '⼧',
], [
  'ru' => 'дюйм',
  'en' => 'inch',
  'jp' => '⼨',
], [
  'ru' => 'маленький',
  'en' => 'small',
  'jp' => '⼩',
], [
  'ru' => 'хромой',
  'en' => 'lame',
  'jp' => '⼪',
], [
  'ru' => 'труп',
  'en' => 'corpse',
  'jp' => '⼫',
], [
  'ru' => 'росток',
  'en' => 'sprout',
  'jp' => '⼬',
], [
  'ru' => 'гора',
  'en' => 'mountain',
  'jp' => '⼭',
], [
  'ru' => 'река',
  'en' => 'river',
  'jp' => '川',
], [
  'ru' => 'труд',
  'en' => 'work',
  'jp' => '⼯',
], [
  'ru' => 'свой',
  'en' => 'oneself',
  'jp' => '⼰',
], [
  'ru' => 'платок',
  'en' => 'turban',
  'jp' => '⼱',
], [
  'ru' => 'сухой',
  'en' => 'dry',
  'jp' => '⼲',
], [
  'ru' => 'крохотный',
  'en' => 'short thread',
  'jp' => '⼳',
], [
  'ru' => 'кров',
  'en' => 'dotted cliff',
  'jp' => '⼴',
], [
  'ru' => 'тянуть',
  'en' => 'long stride',
  'jp' => '⼵',
], [
  'ru' => 'две руки',
  'en' => 'two hands',
  'jp' => '⼶',
], [
  'ru' => 'стрелять',
  'en' => 'shoot',
  'jp' => '⼷',
], [
  'ru' => 'лук',
  'en' => 'bow',
  'jp' => '⼸',
], [
  'ru' => 'свиная голова',
  'en' => "pig's head",
  'jp' => '⼹',
], [
  'ru' => 'борода',
  'en' => 'hair',
  'jp' => '⼺',
], [
  'ru' => 'шаг',
  'en' => 'step',
  'jp' => '⼻',
], [
  'ru' => 'трава',
  'en' => 'grass',
  'jp' => '⾋',
], [
  'ru' => 'гулять',
  'en' => 'walk',
  'jp' => '⾡',
], [
  'ru' => 'город',
  'en' => 'town',
  'jp' => '⾢',
], [
  'ru' => 'курган',
  'en' => 'mound',
  'jp' => '⾩',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h3">13 черт</div>
@en
  <div class="h3">13 strokes</div>
@endru
<?php
$glyphs = [[
  'ru' => 'лягушка',
  'en' => 'frog',
  'jp' => '⿌',
], [
  'ru' => 'треножник',
  'en' => 'tripod',
  'jp' => '⿍',
], [
  'ru' => 'барабан',
  'en' => 'drum',
  'jp' => '⿎',
], [
  'ru' => 'крыса',
  'en' => 'rat',
  'jp' => '⿏',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h3">14 черт</div>
@en
  <div class="h3">14 strokes</div>
@endru
<?php
$glyphs = [[
  'ru' => 'нос',
  'en' => 'nose',
  'jp' => '⿐',
], [
  'ru' => 'равномерный',
  'en' => 'even',
  'jp' => '⿑',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h3">17 черт</div>
@en
  <div class="h3">17 strokes</div>
@endru
<?php
$glyphs = [[
  'ru' => 'флейта',
  'en' => 'flute',
  'jp' => '⿕',
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <p><a class="link" href="https://en.wikipedia.org/wiki/List_of_kanji_radicals_by_stroke_count">Полный список ключей</a>.</p>
@en
  <p><a class="link" href="https://en.wikipedia.org/wiki/List_of_kanji_radicals_by_stroke_count">Full list of radicals</a>.</p>
@endru

@ru
  <div class="h2">Словарь</div>
@en
  <div class="h2">Dictionary</div>
@endru
<?php
$glyphs = [[
  'ru' => 'да',
  'en' => 'yes',
  'jp' => 'はい',
], [
  'ru' => 'иена',
  'en' => 'yen',
  'jp' => ['円' => 'えん'],
], [
  'ru' => 'лево',
  'en' => 'left',
  'jp' => ['左' => 'ひがり'],
], [
  'ru' => 'право',
  'en' => 'right',
  'jp' => ['右' => 'みぎ'],
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h2">Поезд</div>
@en
  <div class="h2">Train</div>
@endru
<?php
$glyphs = [[
  'ru' => 'вокзал',
  'en' => 'railway station',
  'jp' => ['駅' => 'えき'],
], [
  'ru' => 'камера хранения',
  'en' => 'baggage room',
  'jp' => ['預' => 'あず', 'かり' => '', '所' => 'しょ'],
], [
  'ru' => 'платформа',
  'en' => 'platform',
  'jp' => 'ホーム',
], [
  'ru' => 'электропоезд',
  'en' => 'electric train',
  'jp' => ['電車' => 'でんしゃ'],
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h2">Числа</div>
@en
  <div class="h2">Numbers</div>
@endru
<?php
$glyphs = [[
  'ru' => 'ноль',
  'en' => 'zero',
  'jp' => ['〇' => 'れい'],
], [
  'ru' => 'один',
  'en' => 'one',
  'jp' => ['一' => 'いち'],
], [
  'ru' => 'два',
  'en' => 'two',
  'jp' => ['二' => 'に'],
], [
  'ru' => 'три',
  'en' => 'three',
  'jp' => ['三' => 'さん'],
], [
  'ru' => 'четыре',
  'en' => 'four',
  'jp' => ['四' => 'よん'],
], [
  'ru' => 'пять',
  'en' => 'five',
  'jp' => ['五' => 'ご'],
], [
  'ru' => 'шесть',
  'en' => 'six',
  'jp' => ['六' => 'ろく'],
], [
  'ru' => 'семь',
  'en' => 'seven',
  'jp' => ['七' => 'なな'],
], [
  'ru' => 'восемь',
  'en' => 'eight',
  'jp' => ['八' => 'はち'],
], [
  'ru' => 'девять',
  'en' => 'nine',
  'jp' => ['九' => 'きゅう'],
], [
  'ru' => 'десять',
  'en' => 'ten',
  'jp' => ['十' => 'じゅう'],
], [
  'ru' => 'одиннадцать',
  'en' => 'eleven',
  'jp' => ['十一' => 'じゅういち'],
], [
  'ru' => 'двадцать',
  'en' => 'twenty',
  'jp' => ['二十' => 'にじゅう'],
], [
  'ru' => 'сто',
  'en' => 'hundred',
  'jp' => ['百' => 'ひゃく'],
], [
  'ru' => 'тысяча',
  'en' => 'thousand',
  'jp' => ['千' => 'せん'],
], [
  'ru' => '10 тысяч',
  'en' => 'ten thousand',
  'jp' => ['万' => 'まん'],
], [
  'ru' => 'миллион',
  'en' => 'million',
  'jp' => ['百万' => 'ひゃくまん'],
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h2">Цвета</div>
@en
  <div class="h2">Colors</div>
@endru
<?php
$glyphs = [[
  'ru' => 'белый',
  'en' => 'white',
  'jp' => ['白' => 'しろ'],
], [
  'ru' => 'синий',
  'en' => 'blue',
  'jp' => ['青' => 'あお'],
]];
?>
@include('tpl.japanese-glyphs')

@ru
  <div class="h2">Приветствия и другие выражения</div>
@en
  <div class="h2">Greetings and other expressions</div>
@endru
<?php
$glyphs = [[
  'ru' => 'извините (обращение)',
  'en' => 'excuse me',
  'jp' => 'すみません',
],[
  'ru' => 'доброе утро',
  'en' => 'good morning',
  'jp' => 'おはようございます',
], [
  'ru' => 'добрый день',
  'en' => 'good afternoon',
  'jp' => 'こんにちは',
], [
  'ru' => 'добрый вечер',
  'en' => 'good afternoon',
  'jp' => 'こんばんは',
], [
  'ru' => 'как поживаете?',
  'en' => 'how are you?',
  'jp' => ['お' => '', '元気' => 'げんき', 'ですか' => ''],
], [
  'ru' => 'привет',
  'en' => 'hello',
  'jp' => 'やあ',
], [
  'ru' => 'до свидания',
  'en' => 'goodbye',
  'jp' => 'さようなら',
], [
  'ru' => 'пока',
  'en' => 'bye',
  'jp' => 'またね',
], [
  'ru' => 'счастливо',
  'en' => 'good luck',
  'jp' => ['お' => '', '元気' => 'げんき', 'で' => ''],
], [
  'ru' => 'удачи',
  'en' => 'good luck',
  'jp' => ['成功' => 'せいこう'],
]];
?>
@include('tpl.japanese-glyphs')
@endsection
