
<x-log>

    <h1 class="text-center p-3" style="color: #fffade">Library Management System</h1>
    <section class="vh-100">
        <div class="container py-3">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="{{ asset('image/adm.svg')}}"  style="height: 550px" >
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

              <form action="/loginers" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" style="color: #D9D9D9"/>
                  <label class="form-label" for="form1Example13" style="color: #fffade">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" style="color: #D9D9D9"/>
                  <label class="form-label" for="form1Example23" style="color: #fffade">Password</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">

                <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0" style="color: #fffade">OR</p>
                </div>

                <a href="/register" type="submit" class="btn btn-danger btn-lg btn-block">Registrations</a>

                  </div>

              </form>

            </div>
          </div>
        </div>
      </section>

</x-log>
