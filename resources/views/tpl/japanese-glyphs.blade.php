<div class="tw-flex tw-flex-wrap tw-text-center">
  @foreach ($glyphs as $glyph)
    <div class="tw-self-end tw-mb-6 tw-mr-6">
      <div class="tw-text-4xl">
        @if (is_array($glyph['jp']))
          <ruby>
            @foreach ($glyph['jp'] as $kanji => $kana)
              <rb>{{ $kanji }}</rb>
              <rt class="tw-text-2xl text-muted">{{ $kana }}</rt>
            @endforeach
          </ruby>
        @else
          <ruby>
            {{ $glyph['jp'] }}
            <rt class="tw-text-2xl text-muted">{{ $glyph['kana'] ?? '' }}</rt>
          </ruby>
        @endif
      </div>
      <div class="text-muted">
        @ru
          {{ $glyph['ru'] }}
        @en
          {{ $glyph['en'] }}
        @endru
      </div>
    </div>
  @endforeach
</div>
