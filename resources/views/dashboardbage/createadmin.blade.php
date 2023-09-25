@extends('dashlayouts.master')
@section('title')
    table
@endsection


@section('title-bage1')
    Dashboard
@endsection


@section('title-bage2')
    Admins
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->


    <!-- DataTables -->


    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
@endsection

@section('content')
    <div class="card" style="margin: 20px">
        <div class="card-header">
            Add new Admin
        </div>
        <div class="card-body">
            <form action="{{ url('/admin') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control">
                <span>
                    @error('name')
                        {{ $message }}
                    @enderror
                </span><br>
                <label>Email</label><br>
                <input type="email" name="email" id="email" class="form-control">
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password" class="form-control">
                <span>
                    @error('password')
                        {{ $message }}
                    @enderror
                </span><br><br>
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*" width="100" height="100"><br>
                <span>
                    @error('image')
                        {{ $message }}
                    @enderror
                </span><br><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->


    <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->


    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>



    <script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>



    <script src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


    <script src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


    <!-- AdminLTE App -->

    <script src="{{ URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->

    <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script>
    <!-- page script -->
    <script>
        $(function() {
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
@endsection
