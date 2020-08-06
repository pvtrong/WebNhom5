@extends('Pages.layout.menu')
@section('content')

<style>
    .content .content-body{
        position: relative;
        width: 100%;
    }
    .sendmessage{
	margin-top: 10px;
    }
    .sendmess{
        height: 60px;
        width: 50%;
        border-radius: 5px;
        padding-top: 10px;
    }
    button.submitsend {
        text-align: center;
        padding: 7px;
        margin-bottom: 30px;
    }
    .messenger-show {
        width: 50%;
        height: 89%;
    }
</style>
<h1>CHAT NOW</h1>

<div class="messenger-show">

</div>
<div class="sendmessage">
    <p hidden>{{$id}}</p>
    <textarea class="sendmess"></textarea>
    <button type="button" class="btn btn-success submitsend" onclick="sendMess(this)"> send </button>
</div>
<script>
    function sendMess(element){
        var user_id = $($(element).parent().children()[0]).text();
        console.log(user_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
            url:'Post-Messenger/' + user_id,
            type:'post',
            dataType:'json',
            data:{
                name: user_id,
            },
            success:function(res){
                console.log(res);
            }
        });
    }
</script>
@endsection
