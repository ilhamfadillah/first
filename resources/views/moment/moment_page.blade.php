@extends('layouts.default')
@section('moment')
<script>
$(document).ready(function() {
  $('.moments').html(
    moment().format('D MMMM YYYY H:mm:ss')
  );
});
////////////////////////////////////////////////////////////////////////////////
var today = moment().toDate();
$('.pickerdate').datepicker({
   startDate: today,
   format: 'dd-M-yyyy',
   orientation: 'bottom',
   autoclose: true,
   endDate: "+1y"
});

$('#btn1').click(function(){
  var date = $('.pickerdate').datepicker('getDate');
  if( !date ) return;
  var $returnDate = moment(date).format('YYYY-MM-DD');
  var get_data = document.getElementById('get_data');
  get_data.value = $returnDate;
});
$('#btn2').click(function(){
  var val = $('.pickerdate').val();
  if( !val ) return;
  var $returnDate = moment(val, 'DD-MMM-YYYY').format('YYYYMMDDhhmm');
  console.log($returnDate);
});
</script>
@endsection
@section('title','Moment Page')
@section('content')
<section class="content-header">
  <h3>DatePicker</h3>
</section>

<section class="content">
  <input type="text" class="form-control pickerdate">
  <button id="btn1" type="button" class="btn btn-primary">Get date picker</button>
  <button id="btn2" type="button" class="btn btn-primary">Get date moment</button>
  <input type="text" name="get_date" id="get_data" value="">
</section>
@endsection
