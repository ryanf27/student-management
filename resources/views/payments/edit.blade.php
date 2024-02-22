@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-header">Edit Page</div>
      <div class="card-body">      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")

              <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />

              <label>Enrollment</label></br>
              <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach ($enrollments as $id => $name)
                  <option value="{{$id}}">{{$name}}</option>          
                @endforeach
              </select>

              <label>Paid Date</label></br>
              <input type="date" name="paid_date" id="paid_date" value="{{$payments->name}}" class="form-control"></br>                        

              <label>Amount</label></br>
              <input type="text" name="amount" id="amount" value="{{$payments->start_date}}" class="form-control"></br>
              
              <input type="submit" value="Update" class="btn btn-success"></br>
        </form>      
    </div>
</div>

 
@stop