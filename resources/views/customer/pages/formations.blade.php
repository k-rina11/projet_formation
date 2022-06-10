@extends('customer.layout.master')

@section('content')

   <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
  
              <!-- Close -->
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
  
           
  
              <!-- Text -->
              <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
                We can help you solve company communication.
              </p>
  
  
            </div>
          </div>
        </div>
      </div>
  
      <div class="modal modal-sidebar left fade-left fade" id="accountModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Signin -->
                  <div class="collapse show" id="collapseSignin" data-bs-parent="#accountModal">
                      <div class="modal-header">

                              <!-- Titre du menu  -->
                          <h5 class="modal-title"> Mon espace </h5>
                              <!-- Titre du menu -->
 
                          <button type="button" class="close text-primary" data-bs-dismiss="modal" aria-label="Close">
                              <!-- Icon -->
                              <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                                  <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                              </svg>
  
                          </button>
                      </div>
  
                      <div class="modal-body">
                          <!-- Form Signin -->
                          <a href="#"></a>
                          <button class="btn btn-block btn-primary" type="submit">
                                Dashboard
                          </button>
                          <br><br>
                          <form  id="logout-form" class="mb-5" method="POST" action=" {{route('logout')}} " >
                            @csrf
                              <!-- Submit -->
                              <button class="btn btn-block btn-primary" type="submit">
                                  Déconnexion
                              </button>

                          </form>
  
                      </div>
                  </div>              
              </div>
          </div>
      </div>
  
   
  
  
      <!-- NAVBAR
      ================================================== -->
      <header class="navbar navbar-expand-xl navbar-light bg-white  py-2 py-xl-4">
          <div class="container-fluid">
  
              <!-- Brand -->
              <a class="navbar-brand me-0" href="./index.html">
                  <img src="{{asset('customer/img/brand.svg')}}" class="navbar-brand-img" alt="...">
              </a>
           
              <!-- Search -->
              <form class="d-none d-wd-flex ms-5 w-xl-450p">
                  <div class="input-group border rounded">
                      <div class="input-group-prepend">
                          <button class="btn btn-sm my-2 my-sm-0 text-secondary icon-xs d-flex align-items-center" type="submit">
                              <!-- Icon -->
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                  <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                              </svg>
  
                          </button>
                      </div>
                      <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="What do you want to learn ?" aria-label="Search">
                  </div>
              </form>
  
              <!-- Collapse -->
              <div class="collapse navbar-collapse z-index-lg" id="navbarCollapse">
  
                  <!-- Toggler -->
                  <button class="navbar-toggler outline-0 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <!-- Icon -->
                      <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                          <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                      </svg>
  
                  </button>
  
                  <!-- Navigation -->
                 
              </div>
  
              <!-- Search, Account & Cart -->
              <ul class="navbar-nav flex-row ms-auto ms-xl-0 me-n2 me-md-n4">
                  <li class="nav-item border-0 px-0 d-none d-370-block d-xl-none">
                      <a class="nav-link d-flex px-3 px-md-4 search-mobile text-secondary icon-xs" data-bs-toggle="collapse" href="#collapseSearchMobile" role="button" aria-expanded="false" aria-controls="collapseSearchMobile">
                       
  
  
                          <!-- Icon -->
                          <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                              <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                          </svg>
  
                      </a>
  
                      <div class="collapse position-absolute right-0 left-0" id="collapseSearchMobile">
                          <div class="card card-body p-4 mt-7 shadow-dark">
                              <!-- Search -->
                              <form class="w-100">
                                  <div class="input-group border rounded">
                                      <div class="input-group-prepend">
                                          <button class="btn btn-sm text-secondary icon-xs d-flex align-items-center" type="submit">
                                              <!-- Icon -->
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"/>
                                                  <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"/>
                                              </svg>
  
                                          </button>
                                      </div>
                                      <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="What do you want to learn ?" aria-label="Search">
                                  </div>
                              </form>
                          </div>
                      </div>
                  </li>
  
                  <li class="nav-item border-0 px-0">
                      <!-- Button trigger account modal -->
                      <a href="#" class="nav-link d-flex px-3 px-md-4 text-secondary icon-xs" data-bs-toggle="modal" data-bs-target="#accountModal">
                          <!-- Icon -->
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.2252 3.0777C15.3376 1.10738 12.7258 -0.0045765 9.99712 0.000444175C4.48284 -0.00650109 0.00695317 4.45809 7.91636e-06 9.97242C-0.00342287 12.6991 1.1084 15.3085 3.07726 17.1948C3.08299 17.2005 3.08512 17.209 3.09082 17.2141C3.14864 17.2698 3.21148 17.3169 3.27005 17.3705C3.43071 17.5133 3.59138 17.6611 3.76061 17.7989C3.85128 17.8703 3.94554 17.9417 4.03838 18.0074C4.19833 18.1266 4.35828 18.2459 4.52535 18.3558C4.6389 18.4273 4.756 18.4986 4.87236 18.5701C5.02658 18.6629 5.18012 18.7564 5.33936 18.8414C5.47434 18.9128 5.61211 18.9742 5.74922 19.0392C5.89917 19.1106 6.04698 19.182 6.20049 19.2462C6.354 19.3105 6.50826 19.3605 6.6639 19.4162C6.81954 19.4719 6.9538 19.5233 7.10304 19.569C7.27157 19.6197 7.44436 19.6589 7.61573 19.7011C7.75853 19.736 7.89706 19.776 8.04416 19.8046C8.24123 19.8439 8.44117 19.8689 8.64112 19.896C8.76467 19.9132 8.88534 19.9374 9.01027 19.9496C9.33732 19.9817 9.66718 19.9996 9.99992 19.9996C10.3327 19.9996 10.6626 19.9817 10.9896 19.9496C11.1146 19.9374 11.2352 19.9132 11.3587 19.896C11.5587 19.8689 11.7586 19.8439 11.9557 19.8046C12.0985 19.776 12.2413 19.7332 12.3841 19.7011C12.5555 19.6589 12.7283 19.6196 12.8968 19.569C13.046 19.5233 13.1903 19.4676 13.3359 19.4162C13.4816 19.3648 13.6473 19.3091 13.7994 19.2462C13.9514 19.1834 14.1007 19.1098 14.2506 19.0392C14.3877 18.9742 14.5256 18.9128 14.6605 18.8414C14.8197 18.7564 14.9732 18.6629 15.1275 18.5701C15.2439 18.4986 15.361 18.4337 15.4745 18.3558C15.6416 18.2459 15.8016 18.1267 15.9615 18.0074C16.0543 17.936 16.1485 17.8717 16.2392 17.7989C16.4085 17.6632 16.5691 17.519 16.7298 17.3705C16.7883 17.3169 16.8512 17.2698 16.909 17.2141C16.9147 17.2091 16.9169 17.2005 16.9226 17.1948C20.9046 13.38 21.04 7.05955 17.2252 3.0777ZM15.6203 16.4472C15.4904 16.5614 15.3561 16.6699 15.2205 16.7749C15.1405 16.8363 15.0605 16.897 14.9784 16.9556C14.8491 17.0491 14.7178 17.1377 14.5842 17.2226C14.4871 17.2848 14.3879 17.3447 14.2879 17.4033C14.1622 17.4747 14.0344 17.5461 13.9051 17.6175C13.7909 17.676 13.6745 17.7311 13.5574 17.7853C13.4403 17.8396 13.3111 17.8974 13.1847 17.9481C13.0583 17.9988 12.924 18.0467 12.7919 18.0909C12.6713 18.1323 12.5506 18.1752 12.4285 18.2116C12.2857 18.2544 12.1364 18.2894 11.9886 18.3251C11.8729 18.3522 11.7587 18.383 11.6416 18.4058C11.4724 18.4387 11.2996 18.4615 11.1261 18.4851C11.0275 18.4979 10.9297 18.5158 10.8304 18.5258C10.5562 18.5522 10.2784 18.5679 9.99783 18.5679C9.71722 18.5679 9.43945 18.5522 9.16524 18.5258C9.066 18.5158 8.96818 18.4979 8.8696 18.4851C8.6961 18.4615 8.5233 18.4387 8.35406 18.4058C8.23696 18.383 8.1227 18.3523 8.00705 18.3251C7.85924 18.2894 7.71213 18.2537 7.5672 18.2116C7.44512 18.1752 7.32441 18.1323 7.20375 18.0909C7.07166 18.0452 6.93953 17.9988 6.811 17.9481C6.68248 17.8974 6.5611 17.8417 6.43826 17.7853C6.31542 17.7289 6.20476 17.6761 6.09054 17.6175C5.9613 17.5504 5.83348 17.4797 5.7078 17.4033C5.60784 17.3448 5.50856 17.2848 5.41145 17.2226C5.27794 17.1377 5.14653 17.0491 5.01729 16.9556C4.93516 16.897 4.8552 16.8363 4.77521 16.7749C4.63952 16.6699 4.5053 16.5607 4.37535 16.4472C4.34393 16.4236 4.31536 16.3936 4.28469 16.3664C4.31661 13.9374 5.87708 11.7926 8.17843 11.0146C9.32912 11.562 10.6651 11.562 11.8158 11.0146C14.1171 11.7926 15.6776 13.9374 15.7096 16.3664C15.6796 16.3936 15.651 16.4208 15.6203 16.4472ZM7.50716 5.7256C8.2803 4.3506 10.0217 3.86272 11.3967 4.63586C12.7717 5.409 13.2596 7.15038 12.4864 8.52538C12.2299 8.98159 11.8529 9.35856 11.3967 9.61511C11.3931 9.61511 11.3888 9.61511 11.3845 9.61938C11.1952 9.72477 10.9951 9.80954 10.7876 9.87217C10.7505 9.88288 10.7162 9.89715 10.6769 9.90644C10.6055 9.92501 10.5305 9.93786 10.457 9.9507C10.3185 9.97493 10.1784 9.98898 10.0378 9.99283H9.95641C9.81588 9.98898 9.67576 9.97493 9.53727 9.9507C9.46585 9.93786 9.39016 9.92501 9.31736 9.90644C9.2795 9.89715 9.24594 9.88288 9.2067 9.87217C8.99922 9.80954 8.79911 9.72481 8.60974 9.61938L8.5969 9.61511C7.2219 8.84197 6.73402 7.10059 7.50716 5.7256ZM16.9763 14.9505C16.518 12.8133 15.1107 11.0014 13.1532 10.0286C14.7534 8.28555 14.6375 5.57535 12.8944 3.97522C11.1514 2.3751 8.44117 2.49099 6.84104 4.23404C5.33677 5.8727 5.33677 8.38998 6.84104 10.0286C4.88361 11.0014 3.47624 12.8133 3.01802 14.9505C0.27991 11.0937 1.18681 5.74744 5.04365 3.00933C8.90048 0.271226 14.2467 1.17813 16.9848 5.03496C18.0141 6.48481 18.5666 8.21907 18.5658 9.99714C18.5658 11.7737 18.01 13.5057 16.9763 14.9505Z" fill="currentColor"/>
                          </svg>
  
                      </a>
                  </li>
              </ul>
  
              <!-- Toggler -->
              <button class="navbar-toggler ms-4 ms-md-5 shadow-none bg-teal text-white icon-xs p-0 outline-0 h-40p w-40p d-flex d-xl-none place-flex-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <!-- Icon -->
                  <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                      <rect width="25" height="1" fill="currentColor"/>
                      <rect y="8" width="15" height="1" fill="currentColor"/>
                      <rect y="16" width="20" height="1" fill="currentColor"/>
                  </svg>
  
              </button>
          </div>
      </header>
  
  
      <!-- PAGE TITLE
      ================================================== -->
  
      <!-- COURSE
      ================================================== -->
      <section class="pt-5 pb-9 py-md-11 bg-white mb-8 border-bottom">
          <div class="container">
              <div class="text-center mb-4 mb-md-7 text-capitalize" data-aos="fade-up">
                  <h1 class="mb-1">Mes Formations</h1>
                  <p class="font-size-lg mb-0">Bienvenue <strong>{{auth()->user()->name}}</strong>, apprenez de nouvelles compétences aujourd'hui  .</p>
              </div>
             
  
              <div class="mx-n3 mx-md-n4" data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                @if($formations->count()> 0)

                @foreach ($Mesformations as $Maformation)
                  <div class="col-md-6 col-lg-4 col-xl-3 py-5 px-3 px-md-4" data-aos="fade-up" data-aos-delay="50">

                   
                        <!-- Card -->
                      <div class="card border shadow p-2 lift sk-fade">
                          <!-- Image -->
                          <div class="card-zoom position-relative">
                              <a href="./course-single-v5.html" class="card-img sk-thumbnail img-ratio-3 d-block">
                                  <img class="rounded shadow-light-lg" src="{{asset('customer/img/products/product-15.jpg')}}" alt="...">
                              </a>
  
                              <span class="sk-fade-right badge-float bottom-0 right-0 mb-2 me-2">
                                  <ins class="h5 mb-0 text-white">{{$Maformation->categorie->titre}} </ins>
                              </span>
                          </div>
  
                          <!-- Footer -->
                          <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                              <!-- Preheading -->
                              <a href="{{ route('cours', ['id' => $Maformation->id]) }}"><span class="mb-1 d-inline-block text-gray-800">{{$Maformation->modules}} &nbsp; Modules</span></a>
  
                              <!-- Heading -->
                              <div class="position-relative">
                                  <a href="{{ route('cours', ['id' => $Maformation->id]) }}" class="d-block stretched-link"><h5 class="line-clamp-2 h-md-48 h-lg-58 me-md-8 me-lg-10 me-xl-4 mb-2">{{$Maformation->titre}}</h5></a>
  
                                  <div class="row mx-n2 align-items-end">
                                      <div class="col px-2">
                                          <ul class="nav mx-n3">
                                              <li class="nav-item px-3">
                                                  <div class="d-flex align-items-center">
                                                      <div class="me-2 d-flex text-secondary icon-uxs">
                                                          <!-- Icon -->
                                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                              <path d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z" fill="currentColor"/>
                                                          </svg>
  
                                                      </div>
                                                      <div class="font-size-sm">{{$Maformation->duree}} heures</div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
  
                                      <div class="col-auto px-2 text-right">
                                          <div class="star-rating mb-2 mb-lg-0">
                                              <div class="rating" style="width:100%;"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                     
    
                      
                  </div>
                   @endforeach
                      @else 
                      <div class="alert alert-warning" role="alert">
                        <p class="font-size-lg mb-0" style="text-align: center">
                         Bizarre aucune formation, veuillez contacter l'administrateur !
                        </p> 
                         </div> 
                      @endif
    
                  
              </div>
 
                      
                   
          </div>
      </section>
  
     
  

@endsection

  


