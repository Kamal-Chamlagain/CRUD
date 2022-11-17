@extends('welcome')
@section('content')
<center>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-primary fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Record
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Record</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
              <input type="text" name="pName" class="form-control" placeholder="Product Name">
            </div>
            <div class="mb-2">
              <input type="text" name="pPrice" class="form-control" placeholder="Price">
            </div>
            <div class="mb-2">
              <input type="file" name="image" class="form-control" placeholder="Product Name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <table class="table mt-5">
      <thead class="bg-danger text-white fw-bold">
        <th>Id</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Image</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach($data as $item)
        <tr>
          <form action="updatedelete" method="get">
            <input type="hidden" value="{{$item['Id']}}" name="pId">
            <input type="hidden" value="{{$item['pName']}}" name="pName">
            <input type="hidden" value="{{$item['pPrice']}}" name="pPrice">
            <td class="pt-5">{{$item['Id']}}</td>
            <td class="pt-5">{{$item['pName']}}</td>
            <td class="pt-5">{{$item['pPrice']}}</td>
            <td><img src="images/{{$item['pImage']}}" alt="product_image" width="100px" height="100px"></td>
            <td class="pt-5">
              <input type="Submit" class="btn btn-outline-primary" name="update" value="Update">
              <input type="Submit" class="btn btn-outline-danger" name="delete" value="Delete">
            </td>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</center>
@endsection