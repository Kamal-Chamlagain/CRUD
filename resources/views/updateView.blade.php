@extends('welcome')
@section('content')
<center>
    <div class="col-md-4 mt-5 m-auto border p-2">
        <h2 class="text-center text-warning">Update View</h2>
        <form action="updatedata" method="get">
            <div class="mb-2 ">
                <label for="">Product Name</label>
                <input type="text" name="pName" value="{{$pname}}" class="form-control">
            </div>
            <div class="mb-2 ">

                <label for="">Product Price</label>
                <input type="text" name="pPrice" value="{{$pprice}}" class="form-control">
            </div> 
            <br>
            <input type="hidden" name="id" value ="{{$pid}}">
            <button type="Submit" class="btn btn-outline-primary">Update</button>
        </form>
    </div>
</center>

@endsection