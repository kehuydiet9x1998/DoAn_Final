<table class="table table-hover m-b-0">
  <thead>
  <tr>
    @foreach($headers as $header)

    <th>{{$header}}</th>
    @endforeach

  </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      @foreach($iem as $key=>$value)
        <td>{{$value}}</td>
      @endforeach
      <td>
        <label class="badge badge-inverse-primary">Sketch</label>
        <label class="badge badge-inverse-primary">Ui</label>
      </td>
      <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
    </tr>
  @endforeach
  </tbody>
</table>
