<?php
/** @var string $locale */
?>
@extends('base', [
  'contentContainerId' => 'vue_app',
])

@push('js_vendor')
<script>
window.i18nData = JSON.parse('<?= json_encode([
  $locale => array_merge(
    ViewHelper::prependTransKeysForJson('japanese', true)
  )
], JSON_HEX_APOS) ?>')
</script>
@endpush
