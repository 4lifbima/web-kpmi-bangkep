<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kontak</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/kpmi-icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/styleee.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
      <div class="container">
          <div class="row">
              <div class="col-xs-6 col-sm-8 col-md-9">
                  <div class="header-top_address">
                  <div class="header-top_list">
                          <span class="icon-phone"></span>+62 822 9138 3797
                      </div>
                      <div class="header-top_list">
                          <span class="icon-envelope-open"></span>kpmibangkepprovgtlo@gmail.com
                      </div> 
                  </div>
                  <div class="header-top_login2">
                      <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                  <div class="header-top_login mr-sm-3">
                      <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                          <span class="icon-menu"></span>
                      </button>
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="180px;" src="<?php echo base_url().'theme/images/KPMI-BANGKEP.png'?>"></a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profil
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('daftar');?>">Pendaftaran</a>
                                        <a class="dropdown-item" href="<?php echo site_url('about');?>">Tentang</a>                                       
                                    </div>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pengurus
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo site_url('siswa');?>">Anggota</a>
                                        <a class="dropdown-item" href="<?php echo site_url('kabid');?>">Kabid</a>
                                    </div>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="<?php echo site_url('contact');?>">Kontak</a>
                            </li>
                        </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default3 btn-submit">SUBMIT</button>
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Jl. M. Husni Thamrin No.17
                                        <br> Limba U Dua, Kota Sel., Kota Gorontalo
                                        <br> Gorontalo 96138</p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>kpmibangkepprovgtlo@gmail.com
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>+62 822 9138 3797</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->
    <!--============================= FOOTER =============================-->
    <footer>
    <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="<?php echo site_url();?>">
                            <img width="180" src="<?php echo base_url().'theme/images/icon-putih.png'?>" class="img-fluid" alt="footer_logo">
                        </a>
                        <p><?php echo date('Y');?> © copyright  <a href="https://kpmi-bangkep.000webhostapp.com/" target="_blank">KPMI-BANGKEP</a>. <br>Developer by Bima</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sitemap">
                            <h3>Menu Utama</h3>
                            <ul>
                                <li><a href="<?php echo site_url();?>">Beranda</a></li>
                                <li><a href="<?php echo site_url('about');?>">Tentang</a></li>
                                <li><a href="<?php echo site_url('artikel');?>">Berita</a></li>
                                <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Personalia</h3>
                        <ul>
                            <li><a href="<?php echo site_url('siswa');?>">Anggota</a></li>
                            <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                            <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                            <li><a href="<?php echo site_url('download');?>">Download</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address">
                            <h3>Hubungi Kami</h3>
                            <p><span>Alamat : </span>Jl. M. Husni Thamrin No.17, Limba U Dua, Kota Sel., Kota Gorontalo, Gorontalo 96138</p>
                            <p>Email : kpmibangkkeppprovgtlo@gmail.com
                                <br> Phone : +62 822 9138 3797</p>
                                <ul class="footer-social-icons">
                                    <li><a href="https://web.facebook.com/kpmibangkep"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/kpmi_bangkep"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                                    <li><a href="mailto:kpmibangkkeppprovgtlo@gmail.com"><i class="fa fa-envelope-o fa-tw" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>
