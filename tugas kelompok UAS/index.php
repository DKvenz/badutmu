<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Company Profile UAS</title>

    {% comment %} bootsrap 3 {% endcomment %}

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="badutmu.css" rel="stylesheet" />
  </head>
  <body data-spy="scroll" data-target="#navbar">
    <nav class="navbar navbar-fixed-top navbar-inverse" id="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">BADUTMU</a>
        </div>
        <!-- navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#why-us">Kepoin kami</a></li>
            <li><a href="#team">Team Fakboy</a></li>
            <li><a href="#signup">Hubungi</a></li>
          </ul>
        </div>
      </div>
      <!-- container -->
    </nav>

    <div class="cover" id="home">
      <div class="cover-text">
        <h1>
          Anda mungkin<br />
          belum pernah mendengar<br />
          tentang kami.
        </h1>
        <p class="lead">
          Kami adalah remaja "GABUT" yang "KEREN",<br />
          kami adalah jasa badut penghibur hati yang terluka,<br />
          banyak orang mengira hanya anak kecil yang membutuhkan badut<br/>
          padahal para orang dewasa lebih memerlukan penetralisir stres<br/>
          dan capek hati karena berbagai hal dan keseharian yang melelahkan <br/>
          Maka kami hadir ditengah-tengah keresahan masyarakat tersebut.
        </p>

        <a href="#why-us" role="button" class="btn btn-danger btn-lg">Gass !!!</a>
      </div>
    </div>

    <section class="testimonial">
      <div class="container">
        <blockquote>
          &ldquo; Sering bersamaan tapi tidak pernah satu tujuan. Hadirmu hanya selingan. Sadari sebelum makin menyakitkan &rdquo;
          <cite>&mdash; Badutmu 2021 </cite>
        </blockquote>
      </div>
    </section>

    <section id="why-us">
      <h2>Kenapa harus kami ?</h2>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3>Menyenangkan</h3>
            <p>
              Kamu sering berusaha menyenangkan orang lain atau sedang berfokus menyenangkan dia, Tapi bagaimana denga dirimu
              apakah kamu sudah merasa senang, apakah kamu bahagia ? kami selalu memiliki cara untuk membuatmu bahagia.
            </p>
          </div>
          <div class="col-sm-4">
            <h3>Menyembuhkan</h3>
            <p>
              Sering berpergian dengan alasan "Healing" ?, kali ini biar kami temani habiskan waktu bersama kami hatimu akan
              terobati.
            </p>
          </div>
          <div class="col-sm-4">
            <h3>Privasi Terjaga</h3>
            <p>
              Takut dibully, takut dijauhi teman ? Tenang privasi 100% dijaga kami sedia untuk dipublic maupun privat, prioritas kami kebahagiannmu
              jomblo in public happines ini private.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="team">
      <h2>Tim Fakboy Kami</h2>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <img src="img/dk.jpg" alt="dk" class="img-circle" />
            <h4>Dhika</h4>
            <p>Profil lengkap dikirimkan hanya kepada Pendaftar</p>
          </div>

          <div class="col-sm-3">
            <img src="img/aji.jpg" alt="aji" class="img-circle" />
            <h4>Aji</h4>
            <p>Profil lengkap dikirimkan hanya kepada Pendaftar</p>
          </div>

          <div class="col-sm-3">
            <img src="img/rio.jpg" alt="rio" class="img-circle" />
            <h4>Rio</h4>
            <p>Profil lengkap dikirimkan hanya kepada Pendaftar</p>
          </div>

          <div class="col-sm-3">
            <img src="img/amir2.jpg" alt="amir" class="img-circle" />
            <h4>Amir</h4>
            <p>Profil lengkap dikirimkan hanya kepada Pendaftar</p>
          </div>
        </div>
      </div>
    </section>

    <section id="signup">
      <div class="container">
        <h2>Daftar Sekarang</h2>
        <p class="lead">Daftar menggunakan email, kami akan mengirimkan form konfirmasi kepadamu !</p>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form method="post" action ="input.php">
              <div class="input-group">
                <input type="email" class="form-control input-lg" placeholder="Tuliskan alamat emailmu..." name="email" required/>
                <span class="input-group-btn">
                  <button class="btn btn-warning btn-lg" type="submit" value="submit">Gass !!!</button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer>Dibuat dengan &hearts; di BSI oleh <a href="#">Kelompok 4</a></footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
