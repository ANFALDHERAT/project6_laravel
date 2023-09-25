@extends('dashlayouts.master')
@section('title')
table
@endsection


@section('title-bage1')

Dashboard

@endsection


@section('title-bage2')
User
@endsection


@section('css')

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->


  <!-- DataTables -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->

  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

@endsection

@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">
        User Profile
    </div>
    <div class="card" style="margin: 20px">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="current_image">Current Profile Image</label>
                        @if ($data->image)
                            <div>
                                <img src="{{ $data->image }}" width="100">
                            </div>
                        @else
                            <p>No image available.</p>
                        @endif
                    </div>

                </div>
                <div class="col-md-8">
                    <form action="{{ url('admin/' .$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                        <input type="hidden" name="id" value="{{ $data->id }}" id="id">
                        <input type="hidden" name="id" value="{{ $data->id }}" id="id">
                        <div class="form-group">
                        @if ($data->image)
                        <img src="{{ asset('assets/img/' . $data->image) }}" alt="Existing Image" width="100"><br>
                        @endif

                    <!-- Allow uploading a new image -->
                        <input type="file" name="image" id="image" accept="image/*" class="form-control"><br>
                    </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{ $data->email }}" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password"  value="{{ $data->password }}" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone"  value="{{ $data->phone }}" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')


<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->


<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->


<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>



<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>



<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<!-- AdminLTE App -->

<script src="{{URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->

<script src="{{URL::asset('assets/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
