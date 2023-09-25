
@extends('dashlayouts.master')
@section('title')
table
@endsection


@section('title-bage1')

Dashboard

@endsection


@section('title-bage2')
Donations
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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Donations</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href=" {{ url('/donatione/create') }}" > <button class="btn btn-primary mb-2">Add Donations</button></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>

                  <th>Name</th>
                  <th>description</th>
                  <th>Image</th>
                  <th>Amount</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ( $data as $item )
                <tr>

                  <td>{{ $item->DonationName }}</td>

                  <td>
                    <div class="description-wrapper">
                        <span class="short-description">{{ Str::limit($item->description, 100) }}</span>
                        <span class="full-description" style="display: none;">{{ $item->description }}</span>
                    </div>
                    <a href="#" class="read-more">Read More</a>
                </td>



                  <td>
                    @if ($item->image)
                    <img src="{{ $item->image }}" alt="Image" width="100" height="100">

                    @else
                    No Image
                    @endif
                  </td>
                  <td>{{ $item->amount_needed }}</td>


                <td>

               <a href="{{ url('/donatione/' . $item->id  . '/edit' ) }}" > <button class="btn btn-warning btn-sm">Edit</button></a>

                <!-- Delete Admin form (you can use a modal for confirmation) -->
                <form method="POST" action="{{ url('/donatione' . '/' . $item->id  ) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">Delete</button>
                </form>
                </td>


                </tr>

                @endforeach
                </tbody>
                {{-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const readMoreLinks = document.querySelectorAll('.read-more');

        readMoreLinks.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                const descriptionWrapper = this.previousElementSibling;
                const shortDescription = descriptionWrapper.querySelector('.short-description');
                const fullDescription = descriptionWrapper.querySelector('.full-description');

                if (shortDescription.style.display === 'none') {
                    shortDescription.style.display = 'inline';
                    fullDescription.style.display = 'none';
                    this.innerText = 'Read More';
                } else {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'inline';
                    this.innerText = 'Read Less';
                }
            });
        });
    });
</script>
@endsection
