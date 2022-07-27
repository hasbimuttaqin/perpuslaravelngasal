

<x-log title="Registrations">

    <h1 class="text-center p-3" style="color: #fffade">Registrations To Start Your Account</h1>

    <section class="vh-100">
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center ">
            <div class="col-md-8 col-lg-7 col-xl-6 ">
              <img src="{{ asset('image/book1.svg') }}"  style="height:550px">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

              <form action="/registration" method="POST">
                  @csrf
                <div class="form-outline mb-4">
                    <input type="text" id="form1Text" name="name" class="form-control form-control-lg" style="color: #D9D9D9"/>
                    <label class="form-label"  for="form1Text" style="color: #fffade">Nama</label>
                  </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" style="color: #D9D9D9"/>
                  <label class="form-label" for="form1Example13" style="color: #fffade">Email</label>
                </div>


                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" style="color: #D9D9D9"/>
                  <label class="form-label" for="form1Example23" style="color: #fffade">Password</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">


                    <button type="submit" class="btn btn-info btn-lg btn-block">Sign in</button>

                </div>

              </form>
            </div>
          </div>
        </div>
      </section>

</x-log>


