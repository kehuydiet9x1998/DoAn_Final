@extends('backend.layout.index')

@section('css')
<style>
  ul {
    margin: 0;
    padding: 0;
  }

  .user-wrapper,
  .message-wrapper {
    border: 1px solid #dddddd;
    overflow-y: auto;
  }

  .user-wrapper {
    height: 90vh;
  }

  .user {
    cursor: pointer;
    padding: 5px 0;
    position: relative;
  }

  .user:hover {
    background: #eeeeee;
  }

  .user:last-child {
    margin-bottom: 0;
  }

  .pending {
    position: absolute;
    left: 10px;
    top: 10px;
    background: #ff5370;
    margin: 0;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    line-height: 18px;
    padding-left: 5px;
    color: #ffffff;
    font-size: 12px;
  }

  .media-left {
    margin: 0 10px;

  }

  .media-left img {
    width: 64px;
    border-radius: 64px;
  }

  .media-body p {
    margin: 10px 0;
  }

  .message-wrapper {
    padding: 10px;
    height: 82vh;
    background: #cccccc;


  }

  .messages .message {
    margin-bottom: 15px
  }

  .messages .message:last-child {
    margin-bottom: 0;
  }

  .received,
  .sent {
    width: 45%;
    padding: 3px 10px;
    border-radius: 10px;
  }

  .received {
    background: #ffffff;
  }

  .sent {
    background: #3bebff;
    text-align: right;
    float: right;
  }

  .message p {
    margin: 5px 0;
  }

  .date {
    color: #777777;
    font-size: 12px;
  }

  .active {
    background: #eeeeee;

  }

  input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 15px 0 0 0;
    display: inline-block;
    border-radius: 4px;
    box-sizing: border-box;
    outline: none;
    border: 1px solid #cccccc;
  }

  input[type=text]:focus {
    border: 1px solid #aaaaaa;
  }

</style>
@endsection

@section('content')
<div class="main-body">
  <div class="page-wrapper">
    <div class="page-body">
      <div class="row">
        <div class="col-md-4">
          <div class="user-wrapper">
            <ul class="users">
              @foreach($users as $user)
              <li class="user" id={{$user->id}}>
                @if($user->unread)
                <span class="pending">{{$user->unread}}</span>
                @endif
                <div class="media">
                  <div class="media-left">
                    <img class="media-object" src="{{asset($user->anhdaidien)}}" alt="">
                  </div>

                  <div class="media-body">
                    <p class="name">
                      {{$user->name}}
                    </p>
                    <p class="email">cuong1998pro@gmail.com</p>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="col-md-8" id="messages">


        </div>


      </div>
    </div>
  </div>
</div>

@endsection
@section('script')

<script src="https://js.pusher.com/7.0/pusher.min.js">

</script>
<script>
  // Enable pusher logging - don't include this in production

</script>


<script>
  var receiver_id = '';
  var my_id = '{{auth()->user()->id}}';

  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    Pusher.logToConsole = true;

    var pusher = new Pusher('faa3370ff5d4efae2033', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      // console.log(data.message)
      if (my_id == data.message.from) {
        $('#' + data.message.to).click();
      } else if (my_id == data.message.to) {
        if (receiver_id == data.message.from) {
          $('#' + data.message.from).click();
        } else {
          var pending = parseInt($('#' + data.message.from).find('.pending').html());
          if (pending) {
            $('#' + data.message.from).find('.pending').html(pending + 1);
          } else {
            $('#' + data.message.from).append('<span class="pending">1</span>')
          }
        }
      }
    });

    $('.user').click(function() {
      $('.user').removeClass('active');
      $(this).addClass('active');
      $(this).find('.pending').remove();
      receiver_id = $(this).attr('id');
      $.ajax({
        type: 'get'
        , url: '/messages/' + receiver_id
        , data: ''
        , cache: false
        , success: function(data) {
          $('#messages').html(data);
          scrollToBottomFunc();
        }
      });
    });



    $(document).on('keyup', '.input-text input', function(e) {
      var message = $(this).val();

      if (e.keyCode == 13 && message != '' && receiver_id != '') {
        $(this).val('');

        var datastr = 'receiver_id=' + receiver_id + '&message=' + message;

        $.ajax({
          type: 'post'
          , url: "messages"
          , data: datastr
          , cache: false
          , success: function(data) {

          }
          , complete: function() {
            scrollToBottomFunc();
          }
        });
      }
    });
  });

  function scrollToBottomFunc() {
    $('.message-wrapper').animate({
      scrollTop: $('.message-wrapper').get(0).scrollHeight
    }, 50);
  }

</script>

@endsection
