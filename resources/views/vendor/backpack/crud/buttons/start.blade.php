@if ($crud->hasAccess('update'))
  <a href="{{ Request::url().'/'.$entry->getKey() }}/start" class="btn btn-xs btn-success"><i class="fa fa-clock-o"></i> Start Time</a>
@endif
