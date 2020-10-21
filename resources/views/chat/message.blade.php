@php setlocale(LC_TIME, 'vi_VN'); Carbon\Carbon::setLocale('vi');@endphp
<div class="message-wrapper">
  <ul class="messages">
    @foreach($messages as $message)
    <li class="message clearfix">
      <div class="{{$message->from == auth()->user()->id ? 'sent' : 'received'}}">
        <p>{{$message->message}}</p>
        <p class="date">{{$message->created_at->diffForHumans()}}</p>
      </div>
    </li>
    @endforeach

  </ul>
</div>

<div class="input-text">
  <input type="text" name="message" class="submit">
</div>
