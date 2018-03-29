@extends('layouts.default')

@section('js')
<script type="text/javascript">
$(document).ready(function() {
  $("select[name='country']").change(function(){
    var country_id = $(this).val();
    var token = $("input[name='_token']").val();
    var html = "";

    $.ajax({
      url: "<?php echo route('select-state') ?>",
      method: 'POST',
      data: {country_id:country_id, _token:token},

      success: function(data) {
        $.each(data,function(state_id,state_name){
           html +="<option value='"+state_id+"'>"+state_name+"</option>";
        });

        $("select[name='states']").html(html);

      }
    });
});
</script>
@endsection

@section('title', 'Supplier')

@section('content')
<div class="content row">
  <div class="col-lg-5">

  {{ Form::open() }}

  <div class="form-group">
    <label>Select Country :</label>
    <select class="form-control" name="country">
      <option value="">--- Select Country ---</option>
      @foreach($countries as $country)
      <option value="{{$country->id}}">{{ $country->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Select State :</label>
    {!! Form::select('states',[''=>'--- Select State ---'],null,['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    <label>Select City :</label>
    {!! Form::select('city',[''=>'--- Select City ---'],null,['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    <button class="btn btn-success" type="submit">Submit</button>
  </div>

  {!! Form::close() !!}

  </div>
</div>

@endsection
