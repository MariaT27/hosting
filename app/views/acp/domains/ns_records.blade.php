@if ($domain->domain_control and $domain->ns != 'dns1.yandex.net dns2.yandex.net')
  {{ Form::open(['action' => ["$self@setYandexNs", $domain->domain]]) }}
  <p>
    <button type="submit" class="btn btn-default">
      Установить DNS Яндекса
    </button>
  </p>
  {{ Form::close() }}
@endif

@if (sizeof($records))
<div class="boxed-group flush">
  <div class="boxed-group-inner">
    <table class="table-stats">
      <thead>
        <tr>
          <th>Хост</th>
          <th style="text-align: center;">Тип</th>
          <th>Значение записи</th>
          <th></th>
        </tr>
      </thead>
      <tr class="ns-record-container">
        <td class="text-right">
          <input type="text" name="subdomain" value="@" class="text-right" style="width: 100%;">
        </td>
        <td class="text-center">
          <select name="type">
            <option value="A" selected>A</option>
            <option value="CNAME">CNAME</option>
            <option value="AAAA">AAAA</option>
            <option value="TXT">TXT</option>
            <option value="NS">NS</option>
            <option value="MX">MX</option>
          </select>
        </td>
        <td><input type="text" name="content" style="width: 100%;"></td>
        <td><a class="pseudo js-ns-record-add">добавить днс-запись</a></td>
      </tr>
      @foreach ($records as $record)
        <tr class="ns-record-container">
          <td class="text-right">
            <div class="presentation">
              {{ $record->subdomain }}
            </div>
            <div class="edit hidden">
              <input type="text" name="subdomain" value="{{{ $record->subdomain }}}" class="text-right" style="width: 100%;">
            </div>
          </td>
          <td class="text-center">
            {{ $record->type }}
            <input type="hidden" name="type" value="{{{ $record->type }}}">
          </td>
          <td>
            <div class="presentation">
              @if ($record->priority > 0)
                <span class="text-muted">[{{ $record->priority }}]</span>
              @endif
              {{ str_limit($record->content, 35) }}
            </div>
            <div class="edit hidden">
              <input type="text" name="content" value="{{{ $record->content }}}" style="width: 100%;">
              <input type="hidden" name="record_id" value="{{{ $record->record_id }}}">
              <input type="hidden" name="_method" value="PUT">
            </div>
          </td>
          <td>
            <div class="presentation">
              <a class="pseudo js-ns-record-edit">настроить</a>
              &nbsp;
              <a class="pseudo js-ns-record-delete" data-id="{{{ $record->record_id }}}">удалить</a>
            </div>
            <div class="edit hidden">
              <a class="pseudo js-ns-record-save">сохранить</a>
              &nbsp;
              <a class="pseudo js-ns-record-cancel">отменить</a>
            </div>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
{{ Form::open(['action' => ["$self@setServerNsRecords", $domain->domain]]) }}
<p>
  <select name="server">
    <option value="">-----</option>
    <option>srv1.korden.net</option>
    <option>srv2.korden.net</option>
    <option>srv3.korden.net</option>
    <option>bsd.korden.net</option>
    <option>srv1.ivacuum.ru</option>.
    <option>srv2.ivacuum.ru</option>
  </select>
  <button type="submit" class="btn btn-default">
    Прописать днс-записи сервера
  </button>
</p>
{{ Form::close() }}
@elseif ($domain->yandex_user_id)
  <div class="alert alert-warning">
    ДНС-записи не найдены.
  </div>
@endif

<script>
$(document).ready(function() {
  $('.js-ns-record-add').bind('click', function(e) {
    e.preventDefault();
    
    var form = $(this).closest('.ns-record-container');
    
    $.post('{{ action("$self@addNsRecord", [$domain->domain]) }}', $('input, select', form).serialize(), function(data) {
      if ('ok' === data) {
        $('#ajax_container').each(function() {
          $(this).load($(this).data('deferred-url'));
        });
      } else {
        alert(data);
      }
    });
  });

  $('.js-ns-record-edit').bind('click', function(e) {
    e.preventDefault();
    
    var form = $(this).closest('.ns-record-container');
    
    $('.edit', form).removeClass('hidden');
    $('.presentation', form).addClass('hidden');
  });
  
  $('.js-ns-record-delete').bind('click', function(e) {
    e.preventDefault();
    
    var id = $(this).data('id');
    
    if (confirm('Запись будет удалена. Продолжить?')) {
      $.post('{{ action("$self@deleteNsRecord", [$domain->domain]) }}', { record_id: id, _method: 'DELETE' }, function(data) {
        if ('ok' === data) {
          $('#ajax_container').each(function() {
            $(this).load($(this).data('deferred-url'));
          });
        } else {
          alert(data);
        }
      });
    }
  });
  
  $('.js-ns-record-save').bind('click', function(e) {
    e.preventDefault();
    
    var form = $(this).closest('.ns-record-container');
    
    $.post('{{ action("$self@editNsRecord", [$domain->domain]) }}', $('input', form).serialize(), function(data) {
      if ('ok' === data) {
        $('#ajax_container').each(function() {
          $(this).load($(this).data('deferred-url'));
        });
      } else {
        alert(data);
      }
    });
  });
  
  $('.js-ns-record-cancel').bind('click', function(e) {
    e.preventDefault();
    
    var form = $(this).closest('.ns-record-container');
    
    $('.edit', form).addClass('hidden');
    $('.presentation', form).removeClass('hidden');
  })
});
</script>