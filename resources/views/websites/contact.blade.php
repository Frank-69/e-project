@extends('layouts.main')
@section('main-section')

<section id="contact" class="p_3 bg-light">
    <div class="container">
      <div class="row contact1">
         <div class="col-md-8">
          <div class="contact1l">
            <h3>CONTACT US</h3>
            <hr class="line">
            <div class="blog1ld3 row mt-4">
            <div class="col-md-6">
             <div class="blog1ld3l">
               <input class="form-control" placeholder="Name" type="text">
             </div>
            </div>
            <div class="col-md-6">
             <div class="blog1ld3l">
               <input class="form-control" placeholder="Email" type="text">
             </div>
            </div>
           </div>
           <div class="blog1ld3 row">
            <div class="col-md-6">
             <div class="blog1ld3l">
               <input class="form-control mt-3" placeholder="Subject" type="text">
             </div>
            </div>
            <div class="col-md-6">
             <div class="blog1ld3l">
               <input class="form-control mt-3" placeholder="Website" type="text">
             </div>
            </div>
           </div>
           <div class="blog1ld3 row">
            <div class="col-md-12">
             <div class="blog1ld3l">
               <textarea placeholder="Message" class="form-control form_text mt-3"></textarea>
               <h6 class="mb-0 mt-3"><a class="button_1" href="#">Submit </a></h6>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="col-md-4">
          <div class="contact1r bg_red p-4 rounded-3 pt-5 pb-5 mt-4">
            <h6 class="text-white"> <i class="fa fa-facebook me-1 align-middle"></i>  Facebook Account</h6>
            <h6 class="text-white mt-3"> <i class="fa fa-twitter me-1 align-middle"></i>  Twitter Account</h6>
            <h6 class="text-white mt-3"> <i class="fa fa-vimeo me-1 align-middle"></i>  Vimeo Account</h6>
            <h6 class="text-white mt-3"> <i class="fa fa-instagram me-1 align-middle"></i>  Instagram Account</h6>
            <h6 class="text-white mt-3 mb-0"> <i class="fa fa-youtube-play me-1 align-middle"></i>  Youtube Account</h6>
            <h6 class="text-white mt-3"> <i class="fa fa-linkedin me-1 align-middle"></i>  Linkedin Account</h6>
            <h6 class="text-white mt-3 mb-0"> <i class="fa fa-google me-1 align-middle"></i>  Google Account</h6>
          </div>
         </div>
      </div>
      <div class="row contact2 mt-4">
       <div class="col-md-4">
        <div class="contact2i text-center bg-white shadow_box p-4">
          <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-phone"></i></span>
          <h4 class="mt-3">Contact</h4>
           <h6 class="text-muted">+(000) 345 67 89</h6>
          <h6 class="mb-0 text-muted">+(000) 345 67 89</h6>
        </div>
       </div>
       <div class="col-md-4">
        <div class="contact2i text-center bg-white shadow_box p-4">
          <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-map"></i></span>
          <h4 class="mt-3">Location</h4>
           <h6 class="text-muted">302 - Sem Nagar , India</h6>
          <h6 class="mb-0 text-muted">Omez City 125 , India</h6>
        </div>
       </div>
       <div class="col-md-4">
        <div class="contact2i text-center bg-white shadow_box p-4">
          <span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-envelope"></i></span>
          <h4 class="mt-3">Email</h4>
           <h6 class="text-muted">info@gmail.com</h6>
          <h6 class="mb-0 text-muted">info@gmail.com</h6>
        </div>
       </div>
      </div>
      <div class="contact3 row mt-4">
       <div class="col-md-12">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788" height="450" style="border:0; width:100%;" allowfullscreen=""></iframe>
       </div>
      </div>
     </div>
   </section>

   <section id="subs" class="pt-5 pb-5 bg_red">
    <div class="container-xl">
      <div class="row subs_1">
       <div class="col-md-4">
        <div class="subs_1l">
         <h4 class="text-white mb-0 mt-2">GET UPDATE SIGN UP NOW !</h4>
        </div>
       </div>
       <div class="col-md-8">
        <div class="subs_1r">
          <div class="input-group">
                   <input type="text" class="form-control bg-transparent" placeholder="Enter Your Email">
                   <span class="input-group-btn">
                       <button class="btn btn-primary bg-white col_red" type="button">
                           Submit </button>
                   </span>
           </div>
        </div>
       </div>
      </div>
    </div>
   </section>
@endsection
