
@foreach($linhvuc as $lv)
  <option value="{{ $lv->hocsinh->id }}">{{ $lv->hocsinh->id. ' - '. $lv->hocsinh->hodem . ' ' . $lv->hocsinh->ten}}</option>
@endforeach

