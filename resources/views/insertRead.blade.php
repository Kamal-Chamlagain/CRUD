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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="">
            <div class="mb-2">
              <input type="text" name="name" class="form-control" placeholder="Product Name">
            </div>
            <div class="mb-2">
              <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="mb-2">
              <input type="file" name="name" class="form-control" placeholder="Product Name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</center>
@endsection