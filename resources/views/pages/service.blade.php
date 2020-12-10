@extends('welcome')
@section('service')
		<!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-light my-5">Nutrients of Your Land</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div>
                    <form action="" method="post" class="needs-validation text-center" novalidate>
                       @csrf 
                      <div class="form-row text-center text-white my-5">

                        <div class="col-md-2 col-sm-6 mb-3">
                          <label>Nitrogen(N)</label>
                          <input type="number" class="form-control" placeholder="" name="nitrogen" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-3  text-center">
                          <label>Phosphorus(P)</label>
                          <input type="number" class="form-control" placeholder="" name="phosphorus" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-3">
                          <label>Potassium(K)</label>
                          <input type="number" class="form-control" placeholder="" name="potassium" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-3">
                          <label>Sulfur(S)</label>
                          <input type="number" class="form-control" placeholder="" name="sulfur" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-3">
                          <label for="validationCustom01">pH Range</label>
                          <input type="number" class="form-control" placeholder="" name="pH" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-3">
                          <label>Moisture</label>
                          <input type="number" class="form-control" placeholder="" name="moisture" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>

                        

                      </div>

                      <button class="btn btn-primary" type="submit">Submit</button>
                    </form>

                    <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                      'use strict';
                      window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                          form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                              event.preventDefault();
                              event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                          }, false);
                        });
                      }, false);
                    })();
                    </script>
                </div>
            </div>
        </section> 
@endsection

<!-- 

@section('input')        
			<section class="page-section bg-light" id="input">
            <div class="container">

            </div>
        </section> @endsection


                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>  -->