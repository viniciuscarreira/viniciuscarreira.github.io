<!-- <?php
   $phone = '(51) 3029-3019';
   $phone_html = 'tel:05130293019';
   $whatsapp = '(51) 99470-9002';
   $whats_html = 'https://api.whatsapp.com/send?phone=5511932351330&text=Olá%2C%20gostaria%20de%20mais%20informações!';
?> -->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Cruzeiro Do Sul</title>
</head>

<body>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="row align-items-center position-relative">
        <div class="site-logo">
          <img src="images/logo.png" style="width: 6rem;" class="" alt="">
        </div>
        <div class="col-8">
          <nav class="site-navigation text-right ml-auto " role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="#sobre" class="nav-link"><strong>Sobre Nós</strong></a></li>
              <li><a href="#cursos" class="nav-link"><strong>Cursos</strong></a></li>

              <!-- <li class="has-children">
                <a href="#about-section" class="nav-link">About Us</a>
                <ul class="dropdown arrow-top">
                  <li><a href="#team-section" class="nav-link">Team</a></li>
                  <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                  <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                  <li class="has-children">
                    <a href="#">More Links</a>
                    <ul class="dropdown">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>
                      <li><a href="#">Menu Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li> -->

              <li><a href="#diferenciais" class="nav-link"><strong>Diferenciais</strong></a></li>
              <li><a href="#contato" class="nav-link"><strong>Contato e Localização</strong></a></li>
            </ul>
          </nav>
        </div>
        <div class="desktop col-4">
          <div class="d-flex whats-right">
            <a href="{{@$whatsapp_html}}" {{@$whatsapp_extra}}="" class="btn-whats"><i class="fab fa-whatsapp"
                aria-hidden="true"></i> {{@$whatsapp}}</a>
            <a href="{{@$phone_html}}" {{@phone_extra}}="" class="btn-phone"><i class="fa fa-rotate-90 fa-phone"
                aria-hidden="true"></i> {{@$phone}}</a>
          </div>

        </div>
        <div class="toggle-button d-inline-block d-lg-none"><a href="#"
            class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
      </div>
    </div>
  </header>

  <!-- BANNER  -->
  <section id="banner-1" class="light">
    <div class="desktop">
      <img src="images/banner-desk.jpg" style="width: 100%" class="">
    </div>
    <div class="mobile">
      <img src="images/banner-mob.jpg" style="width: 100%" class="">
    </div>
  </section>

  <!-- CURSOS -->
  <section id="features-4" class="ptb-50 light">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-10" style="z-index: 10;"><strong class="">
            <h3 style="color: rgb(20, 39, 95);" class="text-center"><strong class="">CONHEÇA NOSSOS
                CURSOS&nbsp;<br>MAIS&nbsp;PROCURADOS&nbsp;</strong></h3>
            <p class="text-center">Explore nossa variedade de Cursos Online, todos projetados para serem
              acessíveis e flexíveis.<br>

              Nossa equipe de especialistas está à disposição para oferecer suporte acadêmico e financeiro durante toda
              sua jornada acadêmica, garantindo uma experiência tranquila para os alunos.&nbsp;</p>
            <div class="row ptb-35">
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/arquitetura.png" class="icon w-100">
                  <p class="" style="font-size: 13px;"><span class="text-uppercase">Arquitetura
                      e<br>&nbsp;EngenhariaS<br></span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/tecnologia.png" class="icon w-100">
                  <p class="" style="font-size: 12px;"><span class="text-uppercase">Tecnologia<br><br></span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/administração.png" class="icon w-100">
                  <p class="" style="font-size: 12px;"><span class="text-uppercase">ADMINISTRAÇÃO</span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/edu-fisica.png" class="icon w-100">
                  <p class=""><span class="text-uppercase">Educação Física<br><br></span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/ads.png" class="icon w-100">
                  <p class="" style="font-size: 12px;"><span class="text-uppercase">Análise e Desenvolvimento de
                      Sistemas<br></span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/fonoaudiologia.png" class="icon w-100">
                  <p class="" style="font-size: 12px;"><span class="text-uppercase">Fonoaudiologia<br><br></span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/educacao.png" class="icon w-100">
                  <p class=""><span class="text-uppercase">Educação</span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/gestao.png" class="icon w-100">
                  <p class="" style="font-size: 13px;"><span class="text-uppercase">Gestão de Negócios </span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/saude.png" class="icon w-100">
                  <p class=""><span class="text-uppercase">Saúde</span></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/pedagogia.png" class="icon w-100">
                  <p class="">PEDAGOGIA</p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/comunicacao.png" class="icon w-100">
                  <p class="" style="font-size: 13px;"><strong class=""><span
                        class="text-uppercase">Comunicação</span></strong></p>
                </div>
              </div>
              <div class="col-md-2 col-6 content-box">
                <div class="segmentos">
                  <img src="images/cursos/rh.png" class="icon w-100">
                  <p class="" style="font-size: 13px;"><span class="text-uppercase">Gestão de recursos humanos</span>
                  </p>
                </div>
              </div>
            </div>
          </strong></div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>

  <!-- SOBRE -->

  <section id="about-1--0" class="ptb-50 light">
    <div class="container col-xxl-8">
      <div class="row align-items-center g-5 py-5">
        <div class="col-12 col-lg-6 content-box" style="z-index: 10;">
          <h2 class="mb-3" style="color: rgb(255, 255, 255); font-size: 40px;"><b class="">PROCURANDO SABER MAIS SOBRE O
              SEU CURSO?</b></h2>
          <p class="" style="border-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: visible;"><br>Clique
            no botão abaixo e conheça nossos Cursos EAD Digital, EAD Semipresencial e EAD com aulas ao
            vivo.<br><br>Garanta descontos e bolsas de até 100% no seu curso, não perca a oportunidade de ingressar em
            uma das melhores instituições do Brasil e uma das mais bem avaliada.<br><br></p>

          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="https://wa.me/5521969804555" onclick="convertWhats()" class="btn-whats"><i class="fab fa-whatsapp"
                aria-hidden="true"></i>&nbsp;Garanta Sua Vaga</a>
          </div>
          <br>
        </div>
        <div class="col-12 col-sm-8 col-lg-6">
          <img src="images/cruzeiro-polo.png" class="rounded d-block mx-lg-auto img-fluid" alt="image">
        </div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>

  <!-- Diferenciais -->

  <section id="features-19" class="ptb-50 light">
    <div class="container">
      <div class="row justify-content-center text-center mb-50">
        <div class="col-md-10">
          <div class="section-title">
            <p class="tagline text-center" style="color: rgb(255, 172, 0); border-color: rgb(255, 172, 0);"><strong
                class=""><span class="text-uppercase">// INSTITUIÇÃO DE ENSINO EAD - GRADUAÇÃO E
                  PÓS-GRADUAÇÃO</span></strong></p>
            <h3 style="color: rgb(20, 39, 95);"><span class="text-uppercase"><strong class="">Conheça os Nossos
                  Diferenciais </strong></span></h3>
            <p class="">Oferecemos cursos online de alta qualidade em diversas áreas. Estamos disponíveis para
              responder às suas dúvidas a qualquer momento. Venha se juntar a nós na Universidade do Grupo Institucional
              Cruzeiro do Sul e aproveitar as oportunidades educacionais.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 content-box text-center mob-top" style="background-color: rgba(0, 0, 0, 0);">
          <div class="single-item shadow"><strong class="">
              <div class="img-feature">
                <img src="images/diferenciais/reconhecimento.png" alt="image" class="">
              </div>
              <h4 style="color: rgb(20, 39, 95);"><strong class=""><span class="text-uppercase">Reconhecimento pelo
                    MEC<br></span></strong></h4>
                <p class=""><strong>A instituição é reconhecida pelo Ministério da Educação, com notas elevadas nas avaliações
                  de
                  qualidade acima de 4.</strong><br></p>
            </strong></div>
        </div>

        <div class="col-lg-3 col-md-6 content-box text-center mob-top">
          <div class="single-item shadow">
            <div class="img-feature">
              <img src="images/diferenciais/qualidade.png" alt="image" class="">
            </div>
            <h4 style="color: rgb(20, 39, 95);"><span class="text-uppercase"><strong class="">Ensino de
                  Qualidade</strong></span></h4>
            <p class=""><strong class=""> Oferece diversos cursos online com conteúdo de alta qualidade, focados na
                eficácia e na experiência de aprendizado do aluno.<br></strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 content-box text-center mob-top">
          <div class="single-item shadow">
            <div class="img-feature">
              <img src="images/diferenciais/estudos.png" alt="image" class="">
            </div>
            <h4 style="color: rgb(20, 39, 95);"><strong class=""><span class="text-uppercase"><strong
                    class="">Flexibilidade<br>de estudos</strong></span></strong></h4>
            <p class=""><strong class="">Proporciona flexibilidade de horários, permitindo que os estudantes adaptem
                seus estudos conforme sua disponibilidade.</strong></p>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 content-box text-center mob-top">
          <div class="single-item shadow">
            <div class="img-feature">
              <img src="images/diferenciais/digital.png" alt="image" class="">
            </div>
            <h4 style="color: rgb(20, 39, 95);"><strong class="">ATENDIMENTO<br>
                DIGITAL</strong></h4>
            <p class=""><strong class="">Fácil acessibilidade, garantindo que a educação esteja ao alcance de
                todos, sem comprometer a qualidade.</strong></p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>

  <!-- CTA -->

  <section id="cta_02" class="mtb-50 light" style="background-image: url('images/cta.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 d-flex align-center">
          <div class="content" style="z-index: 10;">

            <h3 class="text-left" style="color: rgb(254, 244, 0); font-size: 48px; overflow: visible;"><strong
                class=""><span class="text-uppercase">BOLSAS&nbsp;<br>E DESCONTOS&nbsp;<br></span></strong></h3>
            <p class="">Nossa plataforma oferece acesso a conteúdos de alta qualidade, permitindo que o
              estudante ajuste seus horários de estudo conforme sua disponibilidade. Priorizamos a acessibilidade na
              educação e proporcionamos uma experiência online completa e interativa, tornando o aprendizado agradável e
              eficaz. Junte-se a nós e descubra como o conhecimento pode ser acessível a todos, sem comprometer a
              qualidade.</p>
            <h5 class=""></h5>
            <a href="https://wa.me/5521969804555" onclick="convertWhats()" taget="_blank" class="btn-whats"><i
                class="fab fa-whatsapp" aria-hidden="true"></i> Fale Por Whatsapp</a>
          </div>
        </div>
        <div class="col-md-4">
          <br>
          <br>
          <img src="images/cta-2.png" class="w-100 image-service">
        </div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>

  <!-- CRUZEIRO -->

  <section id="features-13" class="ptb-50 light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="content">
            <p class="tagline">// INSTITUIÇÃO DE ENSINO EAD - GRADUAÇÃO E PÓS-GRADUAÇÃO</p>
            <h3 style="color: rgb(21, 92, 149); font-size: 55px;" class="title"><span class="text-uppercase"><strong
                  class="">Cruzeiro do Sul&nbsp;<br>Virtual&nbsp;<br></strong></span></h3>
            <h4 class="title" style="color: rgb(0, 0, 0);"><span class="text-uppercase"><strong class="">Polo Cangaíba -
                  GRADUAÇÃO e pós EAD<br></strong></span></h4>

            <p class="text-2">A Cruzeiro do Sul Virtual possui reconhecimento do Ministério da Educação (MEC),
              a instituição foi avaliada com nota (4) no Índice Geral de Cursos (IGC) do MEC em 2019. A instituição foi
              avaliada com nota máxima (5) no Conceito Institucional EaD (CI-EaD) do MEC em 2019.<br><br>

              Bem-vindo à Cruzeiro do Sul Virtual - Polo Cangaíba
              GRADUAÇÃO EAD
              Oferecemos cursos online de alta qualidade em diversas áreas. Estamos disponíveis para responder às suas
              dúvidas a qualquer momento. Venha se juntar a nós na Universidade do Grupo Institucional Cruzeiro do Sul e
              aproveitar as oportunidades educacionais.</p>
            <ul class="about">
              <li class="">
                <div class="icon">
                  <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <p class="" style="color: rgb(0, 0, 0);">Graduações e Pós Nas Modalidades EAD</p>
                </div>
              </li>
              <li class="">
                <div class="icon">
                  <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <p class="" style="color: rgb(0, 0, 0);">Semipresencial e EAD Com Aulas ao Vivo</p>
                </div>
              </li>
              <li class="">
                <div class="icon">
                  <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </div>
                <div class="text">
                  <p class="" style="color: rgb(0, 0, 0);">Reconhecimento do MEC</p>
                </div>
              </li>
              <li class="">


              </li>
            </ul>
            <div class="">
              <a href="https://wa.me/5521969804555" onclick="convertWhats()" class="btn-whats"><span
                  class="text-uppercase"><i class="fab fa-whatsapp" aria-hidden="true"></i> Conheça nossos
                  cursos</span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <img src="images/sobre.png" class="w-100">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>


  <!-- SOBRE2 -->

  <section id="about-1--0" class="ptb-50 light">
    <div class="container col-xxl-8">
      <div class="row align-items-center g-5 py-5">
        <div class="col-12 col-sm-8 col-lg-6">
          <img src="images/sobre2.png" class="rounded d-block mx-lg-auto img-fluid" alt="image">
        </div>
        <div class="col-12 col-lg-6 content-box">
          <h3 class="mb-3" style="font-size: 40px; color: rgb(255, 255, 255);"><span class="text-uppercase"><strong
                class="">BaixE a Nossa&nbsp;<br>Plataforma&nbsp;</strong></span></h3>
          <p class="" style="border-color: rgb(0, 0, 0); color: rgb(0, 0, 0);"><span class="text-uppercase"><strong
                class="">ACESSO E SUPORTE NA PALMA DA SUA MÃO</strong></span></p>
          <p class="" style="color: rgb(255, 255, 255);">Explore nossa variedade de cursos online, todos projetados para
            serem acessíveis e flexíveis.<br><br>

            Nossa equipe de especialistas está à disposição para oferecer suporte acadêmico e financeiro durante toda
            sua jornada acadêmica, garantindo uma experiência tranquila para os alunos.&nbsp;<br><br>Nossa plataforma
            proporciona acesso a conteúdos de alta qualidade, com o estudante tendo a liberdade de adaptar seus horários
            de estudo de acordo com sua disponibilidade.<br></p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="https://wa.me/5521969804555" onclick="convertWhats()" class="btn-whats"><i class="fab fa-whatsapp"
                aria-hidden="true"></i> Fale com especialista</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>


  <!-- MAPA -->
  <section id="map-1" class="light">
    <div class="">
      <div class="row no-gutters">
        <div class="col-12">
          <div class="map-iframe embed-responsive embed-responsive-16by9 mb-30">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58539.3670176721!2d-46.533075!3d-23.506937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5fc90af25de9%3A0x259fb2a8c5bebb62!2sAv.%20Canga%C3%ADba%2C%202339%20-%20Jardim%20Piratininga%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003711-006%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1724728410162!5m2!1spt-BR!2sus"
              width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-wrap">
      <div class="bg"></div>
    </div>
  </section>


  <footer id="footer_03--1" class="content-box footer-area footer-bg ptb-50 light">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 mob-footer">
          <div class="footer-widget pe-5">
            <div class="footer-logo">
              <a href="index.html" class="">
                <img src="images/logo.png" class="w-100 footer-logo1" alt="">
              </a>
            </div>
            <ul class="social-link">
              <li class="">
                <a href="https://www.facebook.com/FavarettoAraujoAbreuAdvogados/" target="_blank">
                  <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
              </li>
              <li class="">
                <a href="https://www.instagram.com/favaretto_adv/?hl=en" target="_blank">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget pe-2">
            <h3 class=""><strong class="">Contato</strong></h3>
            <div>
              <a class="btn-whats" href="https://wa.me/5521969804555" onclick="convertWhats()" target="_blank"><i
                  class="bi bi-whatsapp"></i> Fale Por Whatsapp</a>
            </div>
            <br>
            <div class="mob-footer">
              <a class="btn-phone" style="background: black !important;" href="tel:02132518995" onclick="convertPhone()"
                target="blank"><i class="bi bi-telephone-forward"></i> Ligue Agora</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget ps-4">
            <h3 class=""><strong class="">FALE CONOSCO</strong></h3>
            <ul class="hours">
              <li class="">
                <div class="content">
                  <h3 class="" style="color: rgb(255, 255, 255);">Caso precise tirar dúvidas sobre sua matrícula entre
                    em contato com nosso setor de atendimento ao ALUNO<br></h3>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget ps-3">
            <h3 class="endereco"><span class="text-uppercase"><strong class="">Endereço</strong></span></h3>
            <ul class="footer-contact">
              <li class="">
                <i class="bi bi-geo-alt"></i>
                <div class="content">
                  <h4 class="" style="color: rgb(255, 255, 255);">Av. Cangaíba, São Paulo- SP</h4>
                  <span class="">Av. Cangaíba, 2339 - Jardim Piratininga, São Paulo - SP, 03711-006, Brasil</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <section id="contact-1" class="light">
    <div class="d-mobile">
      <div class="d-phone content-box">
        <p class=""><a href="tel:02132518995" onclick="convertPhone()"><i class="fas fa-phone-alt"
              aria-hidden="true"></i> Clique para Ligar</a></p>
      </div>
      <div class="d-whats content-box">
        <p class=""><a href="https://wa.me/5521969804555" onclick="convertWhats()"><i class="fab fa-whatsapp"
              aria-hidden="true"></i> Fale por WhatsApp</a></p>
      </div>
    </div>
  </section>

  <section id="contact-2" class="light desktop">
    <div class="whatsapp-desktop">
      <a href="https://wa.me/5521969804555" onclick="convertWhats()">
        <p class="whatsapp-text">Fale por WhatsApp</p>
        <img src="images/whats.png" class="">
      </a>
    </div>
  </section>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
</body>

</html>