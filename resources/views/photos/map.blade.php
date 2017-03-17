@extends('photos.base')

@section('content')
<div id="photos_map" class="trip-city-map" data-container="photos_map" data-lat="52" data-lon="30" style="height: 70vh;"></div>
@endsection

@push('js')
<script>
$(function () {
  $el = $('#photos_map')

  let points = <?php echo json_encode($collection); ?>

  App.map.create($el.data('container'), $el.data('lat'), $el.data('lon'), 4)
    .then(() => {
      let manager = new App.map.ym.ObjectManager({
        clusterize: true,
        gridSize: 64
      })

      manager.objects.options.set('preset', 'islands#nightCircleDotIcon')
      manager.clusters.options.set('preset', 'islands#nightClusterIcons')

      App.map.map.geoObjects.add(manager)

      manager.add(points)
    })
})
</script>
@endpush
