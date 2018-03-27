@extends('layouts.default')

@section('title', 'Supplier')

@section('content')

{{ Form::open() }}


  <div class="form-group">
    <?php var_dump($countries); exit;?>
    <label>Select Country:</label>

    {{ Form::select('id_country',[
    '' => '--- Select Country ---'
    ],$countries,null,['class'=>'form-control']) }}

  </div>


  <div class="form-group">

    <label>Select State:</label>

    {!! Form::select('id_state',[''=>'--- Select State ---'],null,['class'=>'form-control']) !!}

  </div>


  <div class="form-group">

    <button class="btn btn-success" type="submit">Submit</button>

  </div>


{!! Form::close() !!}


</div>


<script type="text/javascript">

$("select[name='id_country']").change(function(){

    var id_country = $(this).val();

    var token = $("input[name='_token']").val();

    $.ajax({

        url: "<?php echo route('select-ajax') ?>",

        method: 'POST',

        data: {id_country:id_country, _token:token},

        success: function(data) {

          $("select[name='id_state'").html('');

          $("select[name='id_state'").html(data.options);

        }

    });

});

</script>

@endsection
