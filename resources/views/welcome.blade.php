@extends('layouts.front')
@section('content')

<div class="container-fluid">

 <div class="section1">
    <section id="hero" class="d-flex align-items-center">

<div class="container1-fluid">
    <div class="cards">
	<article class="information [ card ]">
		<p class="texttitle">Un etudiant, un stage<br>FORMATION DE STAGE 100% PRATIQUE</p>
		<!-- <h2 class="title">Never miss your important meetings</h2> -->
		<p class="solm mt-4">Possibilite de stage souhaitée,Voici une solution,notre entreprise est là pour vous offrir une expérience optimale aux étudiants du début à la fin.</p>
		<button class="button" data-toggle="modal" data-target="#exampleModalLong">
			<span>Inscrivez-vous</span>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
           </button>
        <div>
           <div>
              <h5 class="modal-title" id="exampleModalLongTitle">FORMATION DE STAGE 100% PRATIQUE</h5>
           </div>
           <div>
           <form action="{{route('store.candidat')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Adresse Email:</label>
                        <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control my-3">
                    </div>

                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="telephone" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Adresse Domicile</label>
                        <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3">
                            {{-- foreach module --}}
                            @foreach ($module as $modules)
                                <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                            @endforeach
                            <!-- <option value="Ressources Humaines">Ressources Humaines</option> -->
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion Projet">Gestion Projet</option>
                            <option value="Informatique Bureautique">Informatique Bureautique</option>
                            <option value="Développement Web">Développement Web</option>
                            <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                            <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Design Graphique">Design Graphique</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="myfile">Télécharger votre CV:</label>
                        <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3"  required>

                    </div>

                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" required>
                    </div>

                    <div class="form-group">
                        <button class="btn mt-3">Envoyer</button>
                        {{-- <button class="btn text-danger float-end mt-2" >Effacer le formumaire</button> --}}
                    </div>
                </form>
                @if (session('success'))
              <script>
               swal("Success","{{ Session::get('success')}}", 'success',{
                 button:true,
                 button:"Ok",
               });
              </script>
              @endif
           </div>
        </div>
      </div>
      </div>
      <div class="modal-body">
      <div class="section2">
    </div>

</section>

</div>     
<!-- : -->
<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class=" col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
        <a href="https://www.youtube.com/watch?v=ja0ZAA84dD0" class="glightbox play-btn mb-4"></a>
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <h3>Programme</h3>
        <p>Bienvenue dans le Programme , une expérience immersive conçue pour vous aider à atteindre votre plein potentiel et à évoluer vers la meilleure version de vous-même. Notre programme combine des enseignements approfondis, un coaching personnalisé et des ressources puissantes pour catalyser votre croissance personnelle.</p>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">projet</a></h4>
          <p class="description"> la partie projet revêt une importance particulière. Elle offre à chaque stagiaire l'opportunité de mettre en pratique les connaissances acquises au cours de la formation, de renforcer ses compétences et d'explorer de nouvelles dimensions dans le domaine. Ces projets sont conçus pour être de réels défis, stimulant la créativité et encourageant l'innovation.</p>
        </div>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-gift"></i></div>
          <h4 class="title"><a href="">Invite du jour</a></h4>
          <p class="description"> la partie 'Invité du Jour', une occasion unique pour chaque stagiaire de bénéficier de l'expérience partagée par des développeurs chevronnés et d'autres professionnels du secteur. Ces sessions invitent des experts renommés à partager leurs parcours, leurs meilleures pratiques et leurs conseils précieux, offrant ainsi aux stagiaires une perspective concrète sur les défis et les opportunités qui les attendent dans le domaine du développement</p>
        </div>

        <div class="icon-box">
          <div class="icon"><i class="bx bx-atom"></i></div>
          <h4 class="title"><a href="">Hackaton</a></h4>
          <p class="description">la partie Hackathon, elle permet à chaque stagiaire de faire valoir son talent grâce à des projets conçus avec créativité en collaboration avec d'autres personnes. C'est un espace dynamique où l'innovation et la collaboration sont encouragées. Les équipes auront l'opportunité de relever des défis stimulants, de partager leurs idées novatrices et d'appliquer leurs compétences techniques dans un environnement qui favorise l'apprentissage et la croissance professionnelle.</p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="text-center title">
      <h3>REALISATIONS</h3>
      <p>Voici quelques realisations qui ont ete faite tout au long de ce parcours.</p>
    </div>

    <div class="row counters position-relative">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Clients</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
        <p>Projects</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hours Of Support</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hard Workers</p>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container">
    

      <div class="section-title">
        <h2>Partenariats</h2>
     </div>

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/volkeno.png" class="img-fluid " alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/xarala.png" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/bakeli.jpeg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/clients/forceN.jpeg" class="img-fluid" alt="">
        </div>
      </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>Notre équipe d'experts chevronnés combine créativité, expertise technique et stratégies novatrices pour offrir des solutions  qui répondent à vos objectifs spécifiques.
        Voici quelques unes de nos services .
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="">Creation de sites web</a></h4>
          <p class="description">Sites Web Professionnels
            <br>Sites E-Commerce Performants
            <br>Portfolio et Sites Personnels
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
          <h4 class="title"><a href="">Creation Design</a></h4>
          <p class="description">Conception de l'Interface Utilisateur (UI)
            <br>Conception de l'Expérience Utilisateur (UX)
            <br>Création de Logo et Identité Visuelle 
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="">Marketing Digital</a></h4>
          <p class="description">Marketing des Médias Sociaux
            <br>Publicité en Ligne
            <br>SEO (Optimisation pour les Moteurs de Recherche)
          </p>
        </div>
      </div>
      
    </div>

  </div>
</section><!-- End Services Section -->


<!-- ======= Testimonials Section ======= -->
<div class="text-center title">
  <h3>TEMOIGNAGES</h3>
</div>
<section id="testimonials" class="testimonials">
  
  <div class="container position-relative">
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          
        
          <div class="testimonial-item">
            <img src="assets/img/testimonials/souane.png" class="testimonial-img" alt="">
            <h3>Moustapha souane</h3>
            <h4>Developpeur web</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Au début, j'avais quelques appréhensions, car c'était ma première expérience professionnelle dans le domaine du développement
              Ce stage de formation à DEFARSCI m'a également permis de développer des compétences essentielles en travail d'équipe
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/abibatou.png" class="testimonial-img" alt="">
            <h3>Abibatou Badji</h3>
            <h4>Marketing Digital</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Mon expérience avec le stage de formation en marketing digital à DEFARSCI a été extrêmement enrichissante et transformative
              Le programme a dépassé toutes mes attentes. Les formateurs étaient des experts chevronnés de l'industrie, passionnés par leur domaine et dévoués à partager leurs connaissances.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/solm.jpeg" class="testimonial-img" alt="">
            <h3>Seydina Ousmane Laye</h3>
            <h4>Design</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Je suis ravi de partager mon expérience lors du stage de formation en design à DEFARSCI que j'ai suivi récemment.
               Avant de rejoindre ce programme, j'avais des compétences de base en design, mais je cherchais à approfondir mes connaissances et à perfectionner mes compétences.
               Les travaux pratiques et les projets réels ont été l'un des points forts du stage. 
               <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Team</h2>
      <p>Notre équipe de coachs dédiés est là pour vous accompagner tout au long de votre parcours de développement personnel.
        Venez Découvrir ceux qui se cachent derrière le succès de notre programme.
        Vous avez votre place. Donc l'opportunité est à votre portée!

      </p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach alpha.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Alpha sow</h4>
            <span>Chef Coach</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach moussa.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Moussa Ndoye</h4>
            <span>Coach dev web</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/fatou faye.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Fatou Faye</h4>
            <span>Assistante</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="assets/img/team/coach lamine.jpeg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Lamine Tamba</h4>
            <span> Maintenance</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->
</main>

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #ECEFF1"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #87CEEB"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fa fa-linkedin"></i>
      </a>
      
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold text-dark">DEFARSCI</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p class="text-dark">
          DEFAR Sci signifie Développement par l’Enseignement, la Formation,
l’Application et la Recherche dans les Sciences. C’est un club d’innovation et
de transmission en faveur du progrès humain.
DEFAR c’est « fabriquer », « réparer » en wolof. En d’autres termes, DEFAR
Sci pourrait signifier également « nous sommes venu fabriquer, apporter notre
pierre à l’édifice ». 
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-dark">MODULES</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          
<p>
              <a href="#!" class="text-dark">community manager</a>
              </p>
                  <p>
                    <a href="#!" class="text-dark">Design Graphique</a>
                       </p>
                  <p>
                    <a href="#!" class="text-dark">Arduino & impression 3d</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Ressource humaine</a>
                  </p>
                  <p>
                    <a href="#!" class="text-dark">Developpement web</a></p>
                    <p>
                    <a href="#!" class="text-dark">Maintenance informatique</a></p>
                    <p>
                    <a href="#!" class="text-dark">Gestion de projet</a></p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase  text-dark fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
        
          <div class="form-outline form-white mb-4 text-dark">
            <input type="text-dark" id="formControlLg" class="form-control form-control-lg" />
            <label class="form-label" for="formControlLg">Search</label>
          </div>
          <p><i class="fa fa-home mr-3 text-dark"></i> <span class="text-dark">sacre coeur, rnd pt jvc, SN</span></p>
          <p><i class="fa fa-envelope mr-3 text-dark"></i><span class="text-dark"> rose.dieng.lab@gmail.com</span></p>
          <p><i class="fa fa-phone mr-3 text-dark"></i> <span class="text-dark"> + 01 234 567 88</span></p>
          <p><i class="fa fa-print mr-3 text-dark"></i> <span class="text-dark">+ 01 234 567 89</span></p>
        </div>
<!--  -->
<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold">Opening hours</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <table class="table text-center text-dark">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>wed - thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>friday:</td>
                <td>9am - 6pm</td>
              </tr>
            </tbody>
          </table>
        </div>
       
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: #f55a2b"
       >
    © 2024 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >solm_boy</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->

  <!-- Inclure Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

  <style>
/* .section1{
    display:flex;

} */


@import url("https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap");
*,
*:after,
*:before {
	box-sizing: border-box;
}
.deconnect{
  background-color:#f55a2b;

}
.texttitle{
  color:#ffff;
  background-color:#f55a2b;
  border-radius:10px;
  padding:10px;
}
:root {
	// Basic
	--c-white: #fff;
	--c-black: #000;

	// Greys
	--c-ash: #eaeef6;
	--c-charcoal: #a0a0a0;
	--c-void: #141b22;

	// Beige/Browns
	--c-fair-pink: #FFEDEC;
	--c-apricot: #FBC8BE;
	--c-coffee: #754D42;
	--c-del-rio: #917072;

	// Greens
	--c-java: #1FCAC5;

	// Purples
	--c-titan-white: #f1eeff;
	--c-cold-purple: #a69fd6;
	--c-indigo: #6558d3;
	--c-governor: #4133B7;
}

/* body {
	font-family: "Spline Sans", sans-serif;
	line-height: 1.5;
	min-height: 100vh;
	background-color: var(--c-ash);
} */

.cards {
	display: flex;
	flex-wrap: wrap;
	align-items: flex-start;
	flex-wrap: wrap;
	justify-content: center;
	gap: 2.5rem;
	width: 90%;
	max-width: 1000px;
	margin: 10vh auto;
}

.card {
  margin-top:110px;
	border-radius: 16px;
	box-shadow: 0 30px 30px -25px rgba(#4133B7, .25);
	max-width: 500px;
}


.information {
	background-color: var(--c-white);
	padding: 1.5rem;

	.tag {
		display: inline-block;
		background-color: var(--c-titan-white);
		color: var(--c-indigo);
		font-weight: 600;
		font-size: 1rem;
		padding: 0.5em 0.75em;
		line-height: 1;
		border-radius: 6px;
		& + * {
			margin-top: 1rem;
		}
	}

	.title {
		font-size: 1.5rem;
		color: var(--c-void);
		line-height: 1.25;
		& + * {
			margin-top: 1rem;
		}
	}

	.info {
		color: var(--c-charcoal);
		& + * {
			margin-top: 1.25rem;
		}
	}

	.button {
		font: inherit;
		line-height: 1;
		background-color: var(--c-white);
		border: 1px solid;
		color: #ffff;
		padding: 0.5em 1em;
		border-radius: 6px;
		font-weight: 500;
		display: inline-flex;
		align-items: center;
		justify-content: space-between;
		gap: 0.5rem;
    margin-top:10px;
		&:focus {
			background-color: var(--c-indigo);
			color: var(--c-white);
		}
	}
	.button:hover{
    background-color:#f55a2b;
  }
	.details {
		display: flex;
		gap: 1rem;
		div {
			padding: .75em 1em;
			background-color: var(--c-titan-white);
			border-radius: 8px;
			display: flex;
			flex-direction: column-reverse;
			gap: .125em;
			flex-basis: 50%;
		}
		
		dt {
			font-size: .875rem;
			color: var(--c-cold-purple);
		}
		
		dd {
			color: var(--c-indigo);
			font-weight: 600;
			font-size: 1.25rem;
		}
	}
}
.plan {
	padding: 10px;
	background-color: var(--c-white);
	color: var(--c-del-rio);
	
	strong {
		font-weight: 600;
		color: var(--c-coffee);
	}
	
	.inner {
		padding: 20px;
		padding-top: 40px;
		background-color: var(--c-fair-pink);
		border-radius: 12px;
	position: relative;
		overflow: hidden;
	}
	
	.pricing {
		position: absolute;
		top: 0;
		right: 0;
		background-color: var(--c-apricot);
		border-radius: 99em 0 0 99em;
		display: flex;
		align-items: center;
		padding: .625em .75em;
		font-size: 1.25rem;
		font-weight: 600;
		color: var(--c-coffee);
		small {
			color: var(--c-del-rio);
			font-size: .75em;
			margin-left: .25em;
		}
		
	}
	
	.title {
		font-weight: 600;
		font-size: 1.25rem;
		color: var(--c-coffee);
		& + * {
			margin-top: .75rem;
		}
	}
	
	.info {
		& + * {
			margin-top: 1rem;
		}
	}
	
	.features {
		display: flex;
		flex-direction: column;
		li {
			display: flex;
			align-items: center;
			gap: .5rem;
			& + * {
				margin-top: .75rem;
			}
		}
		
		.icon {
			background-color: var(--c-java);
			display: inline-flex;
			align-items: center;
			justify-content: center;
			color: var(--c-white);
			border-radius: 50%;
			width: 20px;
			height: 20px;
			svg {
				width: 14px;
				height: 14px;
			}
		}
		
		& + * {
			margin-top: 1.25rem;
		}
	}
	
	button {
		font: inherit;
		background-color: var(--c-indigo);
		border-radius: 6px;
		color: var(--c-white);
		font-weight: 500;
		font-size: 1.125rem;
		width: 100%;
		border: 0;
		padding: 1em;
		&:hover,
		&:focus {
			background-color: var(--c-governor);
		}
	}
	
	
}



.textintro{
  display:flex;
  flex-direction:column;
  justify-content:left;
  width: 450px;
  margin-top:300px;
}
.close{
  float:right;
}


.container1-fluid {
  background-image: url('images/defarsci.jpg');
  background-size: cover;
  background-position: center; /* Centre l'image dans la section */
    height: 100vh; 
    padding:20px;
    padding-top: 94px;
    margin-top:10px;
    width: 100%;
  
}

.container1-fluid .solm {
  color: white;
  margin: 10px 0 0 0;
  font-size: 20px;
}

 
@media (max-width: 768px) {
  .container1-fluid .aba{
    font-size: 28px;
    line-height: 36px;
    margin-top:-200px;
  }
  
  .container1-fluid .btn  {

  }
  .container1-fluid h2 {
    font-size: 18px;
    line-height: 24px;
  }

  
}
@media (max-width: 988px) {
  .container1-fluid .aba{
    font-size: 28px;
    line-height: 36px;
    margin-top:-100px;
  }
   }
/* fufuyfu */
.solm{
  color:black;
  
}
.carousel-item img{
    height:185vh;
    width: 500px;
}
.carousel{
    width: 50%;
    
}
.form-group .btn{
    background-color:#f55a2b;
}
.card-header{
    background-color:#f55a2b;
}
.textcontainer{
    width:50%;
    /* display:flex;
    justify-content:center; */

}
.textslider{
    text-align:center;
    position: absolute;
    margin-top:50%;
}
.maincontainer{
    width:500px;
    height:185vh;
    background-color:#f55a2b;

}

.buttoncontainer{
    background-color: rgb(151, 142, 142);
    border-radius: 20px;
    padding: 12px;

}
.buttoncontainer a{
    text-decoration: none;
}
.buttonpostuler{
   float: right;
   margin-top: 30px;
   background-color: rgb(97, 84, 84);
}
</style>

<style>
  .client-logo img{
    width: 200px;
    height: 200px;
  }

</style>
<style>
  body {
font-family: "Open Sans", sans-serif;
color: #444444;
}

a {
text-decoration: none;
color: #49b5e7;
}

a:hover {
color: #76c7ed;
text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
font-family: "Dosis", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
position: fixed;
visibility: hidden;
opacity: 0;
right: 15px;
bottom: 15px;
z-index: 996;
background: #49b5e7;
width: 40px;
height: 40px;
border-radius: 4px;
transition: all 0.4s;
}

.back-to-top i {
font-size: 28px;
color: #fff;
line-height: 0;
}

.back-to-top:hover {
background: #6dc4ec;
color: #fff;
}

.back-to-top.active {
visibility: visible;
opacity: 1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
background: #fff;
transition: all 0.5s;
z-index: 997;
padding: 20px 0;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.05);
}

#header .logo {
font-size: 28px;
margin: 0;
padding: 0;
line-height: 1;
font-weight: 700;
letter-spacing: 1px;
text-transform: uppercase;
font-family: "Lato", sans-serif;
}

#header .logo a {
color: #0f394c;
}

#header .logo img {
max-height: 40px;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
padding: 0;
}

.navbar ul {
margin: 0;
padding: 0;
display: flex;
list-style: none;
align-items: center;
}

.navbar li {
position: relative;
}

.navbar a,
.navbar a:focus {
display: flex;
align-items: center;
justify-content: space-between;
padding: 10px 0 10px 30px;
font-family: "Dosis", sans-serif;
font-size: 15px;
font-weight: 600;
color: #0f394c;
white-space: nowrap;
transition: 0.3s;
text-transform: uppercase;
}

.navbar a i,
.navbar a:focus i {
font-size: 12px;
line-height: 0;
margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
color: #49b5e7;
}

.navbar .dropdown ul {
display: block;
position: absolute;
left: 14px;
top: calc(100% + 30px);
margin: 0;
padding: 10px 0;
z-index: 99;
opacity: 0;
visibility: hidden;
background: #fff;
box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
transition: 0.3s;
}

.navbar .dropdown ul li {
min-width: 200px;
}

.navbar .dropdown ul a {
padding: 10px 20px;
font-size: 15px;
text-transform: none;
font-weight: 500;
}

.navbar .dropdown ul a i {
font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
color: #49b5e7;
}

.navbar .dropdown:hover>ul {
opacity: 1;
top: 100%;
visibility: visible;
}

.navbar .dropdown .dropdown ul {
top: 0;
left: calc(100% - 30px);
visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
opacity: 1;
top: 0;
left: 100%;
visibility: visible;
}

@media (max-width: 1366px) {
.navbar .dropdown .dropdown ul {
left: -90%;
}

.navbar .dropdown .dropdown:hover>ul {
left: -100%;
}
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
color: #0f394c;
font-size: 28px;
cursor: pointer;
display: none;
line-height: 0;
transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
color: #fff;
}

/* @media (max-width: 991px) {
.mobile-nav-toggle {
display: block;
}

.navbar ul {
display: none;
}
} */

.navbar-mobile {
position: fixed;
overflow: hidden;
top: 0;
right: 0;
left: 0;
bottom: 0;
background: rgba(7, 25, 33, 0.9);
transition: 0.3s;
z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
position: absolute;
top: 15px;
right: 15px;
}

.navbar-mobile ul {
display: block;
position: absolute;
top: 55px;
right: 15px;
bottom: 15px;
left: 15px;
padding: 10px 0;
background-color: #fff;
overflow-y: auto;
transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
padding: 10px 20px;
font-size: 15px;
color: #0f394c;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
color: #49b5e7;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
margin: 15px;
}

.navbar-mobile .dropdown ul {
position: static;
display: none;
margin: 10px 20px;
padding: 10px 0;
z-index: 99;
opacity: 1;
visibility: visible;
background: #fff;
box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
min-width: 200px;
}

.navbar-mobile .dropdown ul a {
padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
color: #49b5e7;
}

.navbar-mobile .dropdown>.dropdown-active {
display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
width: 100%;
height: 80vh;
background: #f9f9f9;
}

#hero .container {
padding-top: 84px;
}

#hero h1 {
margin: 0;
font-size: 42px;
font-weight: 700;
line-height: 56px;
color: #0f394c;
text-transform: uppercase;
}

#hero h2 {
color: #1c698c;
margin: 10px 0 0 0;
font-size: 20px;
}

#hero .btn-get-started {
font-family: "Dosis", sans-serif;
font-weight: 500;
font-size: 16px;
letter-spacing: 1px;
display: inline-block;
padding: 8px 28px;
border-radius: 3px;
transition: 0.5s;
margin-top: 25px;
color: #fff;
background: #49b5e7;
text-transform: uppercase;
}

#hero .btn-get-started:hover {
background: #76c7ed;
}

@media (max-width: 991px) {
#hero {
height: 100vh;
text-align: center;
}

#hero .hero-img img {
width: 50%;
}
}

@media (max-width: 768px) {
#hero h1 {
font-size: 28px;
line-height: 36px;
}

#hero h2 {
font-size: 18px;
line-height: 24px;
}

#hero .hero-img img {
width: 80%;
}
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
padding: 60px 0;
overflow: hidden;
}

.section-bg {
background-color: #f4fbfe;
}

.section-title {
text-align: center;
padding-bottom: 30px;
}

.section-title h2 {
font-size: 32px;
font-weight: bold;
text-transform: uppercase;
margin-bottom: 20px;
padding-bottom: 0;
color: #0f394c;
}

.section-title p {
margin-bottom: 0;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .icon-boxes h3 {
font-size: 28px;
font-weight: 700;
color: #0f394c;
margin-bottom: 15px;
}

.about .icon-box {
margin-top: 40px;
}

.about .icon-box .icon {
float: left;
display: flex;
align-items: center;
justify-content: center;
width: 64px;
height: 64px;
border: 2px solid #d0ecf9;
border-radius: 50px;
transition: 0.5s;
}

.about .icon-box .icon i {
color: #49b5e7;
font-size: 32px;
}

.about .icon-box:hover .icon {
background: #49b5e7;
border-color: #49b5e7;
}

.about .icon-box:hover .icon i {
color: #fff;
}

.about .icon-box .title {
margin-left: 85px;
font-weight: 700;
margin-bottom: 10px;
font-size: 18px;
}

.about .icon-box .title a {
color: #343a40;
transition: 0.3s;
}

.about .icon-box .title a:hover {
color: #49b5e7;
}

.about .icon-box .description {
margin-left: 85px;
line-height: 24px;
font-size: 14px;
}

.about .video-box {
background: url("../images/about.jpg") center center no-repeat;
background-size: cover;
min-height: 500px;
}

@media (min-width: 1200px) {
.about .video-box {
margin-left: 15px;
margin-right: -15px;
}
}

.about .play-btn {
width: 94px;
height: 94px;
background: radial-gradient(#49b5e7 50%, rgba(73, 181, 231, 0.4) 52%);
border-radius: 50%;
display: block;
position: absolute;
left: calc(50% - 47px);
top: calc(50% - 47px);
overflow: hidden;
}

.about .play-btn::after {
content: "";
position: absolute;
left: 50%;
top: 50%;
transform: translateX(-40%) translateY(-50%);
width: 0;
height: 0;
border-top: 10px solid transparent;
border-bottom: 10px solid transparent;
border-left: 15px solid #fff;
z-index: 100;
transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn::before {
content: "";
position: absolute;
width: 120px;
height: 120px;
animation-delay: 0s;
animation: pulsate-btn 2s;
animation-direction: forwards;
animation-iteration-count: infinite;
animation-timing-function: steps;
opacity: 1;
border-radius: 50%;
border: 5px solid rgba(73, 181, 231, 0.7);
top: -15%;
left: -15%;
background: rgba(198, 16, 0, 0);
}

.about .play-btn:hover::after {
border-left: 15px solid #49b5e7;
transform: scale(20);
}

.about .play-btn:hover::before {
content: "";
position: absolute;
left: 50%;
top: 50%;
transform: translateX(-40%) translateY(-50%);
width: 0;
height: 0;
border: none;
border-top: 10px solid transparent;
border-bottom: 10px solid transparent;
border-left: 15px solid #fff;
z-index: 200;
animation: none;
border-radius: 0;
}

@keyframes pulsate-btn {
0% {
transform: scale(0.6, 0.6);
opacity: 1;
}

100% {
transform: scale(1, 1);
opacity: 0;
}
}

/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
background: url("../img/counts-bg.jpg") center center no-repeat;
background-size: cover;
padding: 80px 0 60px 0;
position: relative;
}

.counts::before {
content: "";
position: absolute;
background: rgba(255, 255, 255, 0.8);
left: 0;
right: 0;
top: 0;
bottom: 0;
}

.counts .title {
position: relative;
color: #0f394c;
margin-bottom: 40px;
}

.counts .title h3 {
font-size: 36px;
font-weight: 700;
}

.counts .counters span {
font-size: 44px;
font-weight: 700;
display: block;
color: #49b5e7;
font-family: "Dosis", sans-serif;
}

.counts .counters p {
padding: 0;
margin: 0 0 20px 0;
font-size: 15px;
color: #444444;
}

@media (min-width: 1200px) {
.counts {
background-attachment: fixed;
}
}

/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients .clients-wrap {
border-top: 1px solid #eee;
border-left: 1px solid #eee;
}

.clients .client-logo {
padding: 30px;
display: flex;
justify-content: center;
align-items: center;
border-right: 1px solid #eee;
border-bottom: 1px solid #eee;
overflow: hidden;
background: #fff;
height: 120px;
}

.clients .client-logo img {
height: 50%;
filter: grayscale(100%);
transition: 0.3s;
}

.clients .client-logo:hover img {
filter: none;
transform: scale(1.2);
}

.clients img {
transition: all 0.4s ease-in-out;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
padding: 30px;
position: relative;
overflow: hidden;
border-radius: 10px;
margin: 0 10px 40px 10px;
background: #fff;
box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
transition: all 0.3s ease-in-out;
}

.services .icon-box:hover {
transform: translateY(-5px);
}

.services .icon {
position: absolute;
left: -20px;
top: calc(50% - 30px);
}

.services .icon i {
font-size: 64px;
line-height: 1;
transition: 0.5s;
}

.services .title {
margin-left: 40px;
font-weight: 700;
margin-bottom: 15px;
font-size: 18px;
}

.services .title a {
color: #111;
}

.services .icon-box:hover .title a {
color: #49b5e7;
}

.services .description {
font-size: 14px;
margin-left: 40px;
line-height: 24px;
margin-bottom: 0;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
margin-bottom: 30px;
}

.portfolio #portfolio-flters {
padding: 0;
margin: 0 auto 10px auto;
list-style: none;
text-align: center;
border-radius: 50px;
padding: 2px 15px;
}

.portfolio #portfolio-flters li {
cursor: pointer;
display: inline-block;
padding: 10px 15px;
font-size: 14px;
font-weight: 600;
line-height: 1;
text-transform: uppercase;
color: #444444;
margin-bottom: 10px;
transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
color: #49b5e7;
}

.portfolio #portfolio-flters li:last-child {
margin-right: 0;
}

.portfolio .portfolio-wrap {
transition: 0.3s;
position: relative;
overflow: hidden;
z-index: 1;
background: rgba(255, 255, 255, 0.6);
}

.portfolio .portfolio-wrap::before {
content: "";
background: rgba(255, 255, 255, 0.6);
position: absolute;
left: 30px;
right: 30px;
top: 30px;
bottom: 30px;
transition: all ease-in-out 0.3s;
z-index: 2;
opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-info {
opacity: 0;
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
text-align: center;
z-index: 3;
transition: all ease-in-out 0.3s;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}

.portfolio .portfolio-wrap .portfolio-info::before {
display: block;
content: "";
width: 48px;
height: 48px;
position: absolute;
top: 35px;
left: 35px;
border-top: 3px solid #bdc6ca;
border-left: 3px solid #bdc6ca;
transition: all 0.5s ease 0s;
z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info::after {
display: block;
content: "";
width: 48px;
height: 48px;
position: absolute;
bottom: 35px;
right: 35px;
border-bottom: 3px solid #bdc6ca;
border-right: 3px solid #bdc6ca;
transition: all 0.5s ease 0s;
z-index: 9994;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
font-size: 20px;
color: #0f394c;
font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
color: #0f394c;
font-size: 14px;
text-transform: uppercase;
padding: 0;
margin: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
text-align: center;
z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
color: #49b5e7;
margin: 0 2px;
font-size: 28px;
display: inline-block;
transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
color: #8dd0f0;
}

.portfolio .portfolio-wrap:hover::before {
top: 0;
left: 0;
right: 0;
bottom: 0;
opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info {
opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-info::before {
top: 15px;
left: 15px;
}

.portfolio .portfolio-wrap:hover .portfolio-info::after {
bottom: 15px;
right: 15px;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
margin-top: 20px;
position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
width: 12px;
height: 12px;
background-color: #fff;
opacity: 1;
border: 1px solid #49b5e7;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
background-color: #49b5e7;
}

.portfolio-details .portfolio-info {
padding: 30px;
box-shadow: 0px 0 30px rgba(15, 57, 76, 0.08);
}

.portfolio-details .portfolio-info h3 {
font-size: 22px;
font-weight: 700;
margin-bottom: 20px;
padding-bottom: 20px;
border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
list-style: none;
padding: 0;
font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
margin-top: 10px;
}

.portfolio-details .portfolio-description {
padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
font-size: 26px;
font-weight: 700;
margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
padding: 0;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials {
padding: 80px 0;
background: url("../img/cta-bg.jpg") no-repeat;
background-position: center center;
background-size: cover;
position: relative;
}

.testimonials::before {
content: "";
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
background: rgba(11, 41, 55, 0.9);
}

.testimonials .section-header {
margin-bottom: 40px;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
overflow: hidden;
}

.testimonials .testimonial-item {
text-align: center;
color: #fff;
}

.testimonials .testimonial-item .testimonial-img {
width: 100px;
border-radius: 50%;
border: 6px solid rgba(255, 255, 255, 0.15);
margin: 0 auto;
}

.testimonials .testimonial-item h3 {
font-size: 20px;
font-weight: bold;
margin: 10px 0 5px 0;
color: #fff;
}

.testimonials .testimonial-item h4 {
font-size: 14px;
color: #ddd;
margin: 0 0 15px 0;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
color: rgba(255, 255, 255, 0.4);
font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
display: inline-block;
left: -5px;
position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
display: inline-block;
right: -5px;
position: relative;
top: 10px;
}

.testimonials .testimonial-item p {
font-style: italic;
margin: 0 auto 15px auto;
color: #eee;
}

.testimonials .swiper-pagination {
margin-top: 20px;
position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
width: 12px;
height: 12px;
opacity: 1;
background-color: rgba(255, 255, 255, 0.4);
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
background-color: #49b5e7;
}

@media (min-width: 992px) {
.testimonials .testimonial-item p {
width: 80%;
}
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
margin-bottom: 20px;
overflow: hidden;
border-radius: 5px;
background: #fff;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
position: relative;
overflow: hidden;
}

.team .member .social {
position: absolute;
left: 0;
bottom: 30px;
right: 0;
opacity: 0;
transition: ease-in-out 0.3s;
text-align: center;
}

.team .member .social a {
transition: color 0.3s;
color: #0f394c;
margin: 0 3px;
border-radius: 50px;
width: 36px;
height: 36px;
background: rgba(73, 181, 231, 0.8);
display: inline-flex;
align-items: center;
justify-content: center;
transition: ease-in-out 0.3s;
color: #fff;
}

.team .member .social a:hover {
background: #76c7ed;
}

.team .member .social i {
font-size: 18px;
line-height: 0;
}

.team .member .member-info {
padding: 25px 15px;
}

.team .member .member-info h4 {
font-weight: 700;
margin-bottom: 5px;
font-size: 18px;
color: #0f394c;
}

.team .member .member-info span {
display: block;
font-size: 13px;
font-weight: 400;
color: #aaaaaa;
}

.team .member .member-info p {
font-style: italic;
font-size: 14px;
line-height: 26px;
color: #777777;
}

.team .member:hover .social {
opacity: 1;
bottom: 15px;
}

/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/
.gallery .gallery-item {
overflow: hidden;
border-right: 3px solid #fff;
border-bottom: 3px solid #fff;
}

.gallery .gallery-item img {
transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
transform: scale(1.1);
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
width: 100%;
background: #fff;
}

.contact .info i {
font-size: 20px;
color: #49b5e7;
float: left;
width: 44px;
height: 44px;
background: #ebf7fc;
display: flex;
justify-content: center;
align-items: center;
border-radius: 50px;
transition: all 0.3s ease-in-out;
}

.contact .info h4 {
padding: 0 0 0 60px;
font-size: 22px;
font-weight: 600;
margin-bottom: 5px;
color: #0f394c;
}

.contact .info p {
padding: 0 0 0 60px;
margin-bottom: 0;
font-size: 14px;
color: #2079a1;
}

.contact .info .email,
.contact .info .phone {
margin-top: 40px;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
background: #49b5e7;
color: #fff;
}

.contact .php-email-form {
width: 100%;
background: #fff;
}

.contact .php-email-form .form-group {
padding-bottom: 8px;
}

.contact .php-email-form .error-message {
display: none;
color: #fff;
background: #ed3c0d;
text-align: left;
padding: 15px;
font-weight: 600;
}

.contact .php-email-form .error-message br+br {
margin-top: 25px;
}

.contact .php-email-form .sent-message {
display: none;
color: #fff;
background: #18d26e;
text-align: center;
padding: 15px;
font-weight: 600;
}

.contact .php-email-form .loading {
display: none;
background: #fff;
text-align: center;
padding: 15px;
}

.contact .php-email-form .loading:before {
content: "";
display: inline-block;
border-radius: 50%;
width: 24px;
height: 24px;
margin: 0 10px -6px 0;
border: 3px solid #18d26e;
border-top-color: #eee;
animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
border-radius: 0;
box-shadow: none;
font-size: 14px;
border-radius: 4px;
}

.contact .php-email-form input {
height: 44px;
}

.contact .php-email-form textarea {
padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
background: #49b5e7;
border: 0;
padding: 10px 24px;
color: #fff;
transition: 0.4s;
border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
background: #1da2e0;
}

@keyframes animate-loading {
0% {
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
}
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
padding: 15px 0;
background: #f0f9fd;
margin-top: 84px;
}

@media (max-width: 992px) {
.breadcrumbs {
margin-top: 74px;
}
}

.breadcrumbs h2 {
font-size: 28px;
font-weight: 400;
font-family: "Lato", sans-serif;
}

.breadcrumbs ol {
display: flex;
flex-wrap: wrap;
list-style: none;
padding: 0;
margin: 0;
font-size: 15px;
}

.breadcrumbs ol li+li {
padding-left: 10px;
}

.breadcrumbs ol li+li::before {
display: inline-block;
padding-right: 10px;
color: #175977;
content: "/";
}

@media (max-width: 768px) {
.breadcrumbs .d-flex {
display: block !important;
}

.breadcrumbs ol {
display: block;
}

.breadcrumbs ol li {
display: inline-block;
}
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
background: #fff;
padding: 0 0 30px 0;
color: #444444;
font-size: 14px;
background: #ebf7fc;
}

#footer .footer-newsletter {
padding: 50px 0;
background: #f0f9fd;
text-align: center;
font-size: 15px;
}

#footer .footer-newsletter h4 {
font-size: 24px;
margin: 0 0 20px 0;
padding: 0;
line-height: 1;
font-weight: 600;
color: #0f394c;
}

#footer .footer-newsletter form {
margin-top: 30px;
background: #fff;
padding: 6px 10px;
position: relative;
border-radius: 4px;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
text-align: left;
}

#footer .footer-newsletter form input[type=email] {
border: 0;
padding: 4px 8px;
width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type=submit] {
position: absolute;
top: 0;
right: -2px;
bottom: 0;
border: 0;
background: none;
font-size: 16px;
padding: 0 20px;
background: #49b5e7;
color: #fff;
transition: 0.3s;
border-radius: 0 4px 4px 0;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type=submit]:hover {
background: #1da2e0;
}

#footer .footer-top {
padding: 60px 0 30px 0;
background: #fff;
}

#footer .footer-top .footer-contact {
margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
font-size: 22px;
margin: 0 0 30px 0;
padding: 2px 0 2px 0;
line-height: 1;
font-weight: 700;
}

#footer .footer-top .footer-contact p {
font-size: 14px;
line-height: 24px;
margin-bottom: 0;
font-family: "Lato", sans-serif;
color: #777777;
}

#footer .footer-top h4 {
font-size: 16px;
font-weight: bold;
color: #0f394c;
position: relative;
padding-bottom: 12px;
}

#footer .footer-top .footer-links {
margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
list-style: none;
padding: 0;
margin: 0;
}

#footer .footer-top .footer-links ul i {
padding-right: 2px;
color: #49b5e7;
font-size: 18px;
line-height: 1;
}

#footer .footer-top .footer-links ul li {
padding: 10px 0;
display: flex;
align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
padding-top: 0;
}

#footer .footer-top .footer-links ul a {
color: #777777;
transition: 0.3s;
display: inline-block;
line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
text-decoration: none;
color: #49b5e7;
}

#footer .footer-top .social-links a {
font-size: 18px;
display: inline-block;
background: #49b5e7;
color: #fff;
line-height: 1;
padding: 8px 0;
margin-right: 4px;
border-radius: 4px;
text-align: center;
width: 36px;
height: 36px;
transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
background: #1da2e0;
color: #fff;
text-decoration: none;
}

#footer .copyright {
float: left;
color: #0f394c;
}

#footer .credits {
float: right;
font-size: 13px;
color: #0f394c;
}

@media (max-width: 575px) {

#footer .copyright,
#footer .credits {
float: none;
text-align: center;
}
}
</style>


@endsection