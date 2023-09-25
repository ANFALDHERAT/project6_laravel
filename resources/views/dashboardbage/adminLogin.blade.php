
<!doctype html>
<html lang="en">
  <head>
    <title>Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100" style="background-color: #DFDFDF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem; height: 80vh;">
          <div class="text-center mb-0 mt-4"> 
            <img src="{{ asset('assets/img/furnishareblack.png') }}" alt="Your Image" style="max-width: 100%; max-height: 150px;">
          </div>
          <div class="card-body p-4 text-center">
            <h3 class="mb-4">Sign in</h3>
            @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
              {{ Session::get('error') }}
            </div>
            @endif
            <form action="{{ route('adminLogin') }}" method="POST">
              @csrf
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control form-control-lg" id="email"
                  placeholder="name@example.com" required />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" id="password"
                  placeholder="Password" required />
              </div>
              <button class="btn btn-lg btn-block text-white" type="submit" style="background-color: #ffc107;">Login</button>
            </form>
            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>
