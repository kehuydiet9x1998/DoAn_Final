@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">
            {{-- <form action="{{route('home-work.store')}}" method="post">
            @csrf
            @method('post') --}}
            <div class="card">
              <div class="card-header">
                <h6 class="col-sm-12" style="font-weight: bold; font-size: 16px">Lớp: Xưởng lắp ráp ROBOT - LP - 001
                </h6>
                <h6 class="col-sm-12">Học viên : {{$hocsinh->hodem. ' '.$hocsinh->ten}}
                </h6>
                <h6 class="col-sm-12">Buổi học :
                  {{(int)($buoihoc->id) - (int)($buoihoc->lophoc->dsbuoihoc()->first()->id) +1}}/{{$buoihoc->lophoc->dsbuoihoc->count()}}</h6>
                <h6 class="col-sm-12">Ngày học : {{$buoihoc->ngayhoc}}</h6>
                @php
                $socau = App\Models\BuoiHoc::sobaitap($hocsinh->id, $buoihoc->id);
                $socaudung = App\Models\BuoiHoc::socaudung($hocsinh->id, $buoihoc->id);
                @endphp
                <h6 class="col-sm-12 text-c-green">Số câu đúng : {{$socaudung}}/{{$socau}}</h6>
                <h6 class="col-sm-12 text-c-green">Số điểm: {{round($socaudung/$socau,2)*10}}/10</h6>
              </div>
              @php
              $cau=1;
              @endphp
              @if(count($btvn)>0)
              @foreach ($btvn as $bt)
              <div class="card-block col-sm-12">
                <h6 class="col-sm-12">Câu hỏi {{"$cau"}}:
                  {{$bt->baitap->noidung}}
                </h6>
                <input type="hidden" name="buoi_hoc_id" value={{$buoihoc->id}}>
                <input type="hidden" name="hoc_sinh_id" value={{$hocsinh->id}}>
                <input type="hidden" name="bai_tap_id[]" value={{$bt->baitap->id}}>
                <img class="img img-fluid" style="margin:40px" width="400px" src="{{asset($bt->baitap->hinhanhminhhoa)}}" alt="">
                <div class="form-radio col-sm-12">
                  <div class="radio radiofill radio-info radio-inline col-sm-12">
                    <label style="font-weight:500;color: {{ $bt->baitap->dapan == 'a' ||($bt->baitap->dapan == $bt->chon && $bt->chon == 'a') ? 'green': ($bt->chon == 'a' ? 'red': 'black' )}}">
                      <input type="radio" {{$bt->chon == 'a'? 'checked': ''}} name="{{$bt->baitap->id}}" value="a">
                      <i class="helper"></i>A) {{$bt->baitap->dapan1}}
                    </label>
                  </div>
                  <div class="radio radiofill radio-info radio-inline col-sm-12">
                    <label style="font-weight:500;color: {{ $bt->baitap->dapan == 'b' ||($bt->baitap->dapan == $bt->chon && $bt->chon == 'b') ? 'green': ($bt->chon == 'b' ? 'red': 'black' )}}">


                      <input type="radio" {{$bt->chon == 'b'? 'checked': ''}} name="{{$bt->baitap->id}}" value="b">

                      <i class="helper"></i>B) {{$bt->baitap->dapan2}}
                    </label>
                  </div>
                  <div class="radio radiofill radio-info radio-inline col-sm-12">
                    <label style="font-weight:500;color: {{ $bt->baitap->dapan == 'c' ||($bt->baitap->dapan == $bt->chon && $bt->chon == 'c') ? 'green': ($bt->chon == 'c' ? 'red': 'black' )}}">
                      <input type="radio" {{$bt->chon == 'c'? 'checked': ''}} name="{{$bt->baitap->id}}" value="c">
                      <i class="helper"></i>C) {{$bt->baitap->dapan3}}
                    </label>
                  </div>
                  <div class="radio radiofill radio-info radio-inline col-sm-12">
                    <label style="font-weight:500;color: {{ $bt->baitap->dapan == 'd' ||($bt->baitap->dapan == $bt->chon && $bt->chon == 'd') ? 'green': ($bt->chon == 'd' ? 'red': 'black' )}}">
                      <input type="radio" {{$bt->chon == 'd'? 'checked': ''}} name="{{$bt->baitap->id}}" value="d">
                      <i class="helper"></i>D) {{$bt->baitap->dapan4}}
                    </label>
                  </div>
                </div>
                @if($bt->baitap->dapan == $bt->chon)
                <div class="alert alert-success">Bạn đã trả lời đúng.</div>
                @else
                <div class="alert alert-danger">Đáp án chưa chính xác. Đáp án là {{strtoupper($bt->baitap->dapan)}}</div>
                @endif
              </div>
              @php
              $cau++;
              @endphp
              @endforeach
              @else
              <span style="text-align:center"><i>Chưa có btvn</i></span>
              @endif
              <div class="card-footer col-sm-12" style="text-align: center">
                {{-- <button type="submit" class="btn btn-info btn-round waves-effect waves-light">Nộp bài</button> --}}
                <button onclick="window.history.back();" type="button" class="btn btn-default btn-round">Trở lại</button>
              </div>
            </div>
            {{-- </form> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
