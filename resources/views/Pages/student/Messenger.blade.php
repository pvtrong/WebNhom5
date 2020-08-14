@extends('Pages.layout.menu')
@section('style')
<style>
.content-mes{
    width:50%;
    height: 78%;
}
.send-mes {
    width: 50%;
    display: flex;
}
.send-mes textarea {
    width: 100%;
}
.content .content-body{
    height:auto;
}
.show-more{
    color:blue;
    cursor: pointer;
    margin-bottom: 0px;
    opacity:0.5;

}
.text-mess{
    background:#7c7ce8;
    color: white;
    border-radius: 17px;
    padding: 5px;
    width: fit-content;
    margin-bottom:1px;
}
.text-mess-2{
    background:#989293;
    color: white;;
    border-radius: 17px;
    padding: 5px;
    width: fit-content;
    margin-bottom:1px;
}
.text-name{
    margin-bottom:0px;
    font-size: 10px;
}
</style>
@stop
@section('content')

<div class="content-mes class='dark-mode' ">
@if($messenger)
<div id="show">
<?php $reversed = array_reverse($messenger); ?>
    <p hidden class="item-frist">{{$reversed['0']['id']}}</p>
    <?php 
    if (count($messenger) < 10 ) {
        echo  '<p hidden class="show-more">show more</p>';
    } else {
        echo  '<p class="show-more" onclick="showMore(this)">show more</p>';
    }
    ?>
</div>
@if($reversed != null)
    @foreach($reversed as $mes)
    @if($user_id == $mes['fk_user_id'])
    <div class="mes-right">
    <p class="text-name">{{$mes['name']}}:</p>
    <p class="text-mess">{{$mes['message']}}</p>
    </div>
    @else
    <div class="mes-right">
    <p class="text-name">{{$mes['name']}}:</p>
    <p class="text-mess-2">{{$mes['message']}}</p>
    </div>
    @endif
    @endforeach
@endif
@endif
</div>
<div class="send-mes">
    <p class='nguoinhan' hidden>{{$id}}</p>
    <textarea class="text-mes" name=""></textarea>
    <button type="button" class="btn btn-xs btn-info" onclick="sendMes(this)">send</button>
</div>
@stop
@section('script')
    
<script>
    function sendMes(elemet){
        var id = $($(elemet).parent().children()[0]).text();
        var mes = $($(elemet).parent().children()[1])[0].value;
        $.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
        });
    $.ajax({
        url:'Pages/Student/send-mes',
        type:'post',
        dataType:'json',
        data:{
            id: id,
            mes: mes
        },
        success:function(res){
            $('.content-mes').append('<div class="mes-right"><p class="text-name">'
                + res.name
                +'</p><p class="text-mess">'
                + res.mes['message']+'</p></div>')
            $('.send-mes').load(location.href + ' .send-mes>*');
        }
    });                                                                             
    }


    function showMore(element){
        var itemlast = $('.item-frist').text();
        var nguoinhan = $('.nguoinhan').text();
        $.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
        });
    $.ajax({
        url:'Pages/Student/load-mes',
        type:'post',
        dataType:'json',
        data:{
            nguoinhan: nguoinhan,
            itemlast: itemlast
        },
        success:function(res){
            $.each(res['load_mes'],function(index, value) {
                        if (res['user_id'] == value.fk_user_id) {
                            $('.content-mes').prepend('<div class="mes-right">'
                            +'<p class="text-name">'+value.name+':</p>'
                            +'<p class="text-mess">'+value.message+'</p>'+'</div>'); 
                            // $('.content_messenger').prepend('<div class="mess_body">'+'<h3 class="text_name">'+value.s_name+' '+':'+'</h3>'+'<p class="massage_date">'+value.d_created_date+'</p>'+'</div>')
                        }else{
                            $('.content-mes').prepend('<div class="mes-right">'
                            +'<p class="text-name">'+value.name+':</p>'
                            +'<p class="text-mess-2">'+value.message+'</p>'+'</div>'); 
                           }
                        $('.item-frist').text(value.id);
                });
                if (res['load_mes'].length < 10) {
                    $('.show-more').attr("hidden", true); 
                }
        }
    });  
    }
</script>
@stop

