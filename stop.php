<!doctype html>
<html lang="en">
  <head>
    <?php 
    include('layout/header.php'); 
    $countBageConcat = $_GET['countBageConcat'];
    $numIterations = $_GET['numIterations'];
    ?>
    
  </head>
  <body style="background-color: #F8F0E5">
    <?php include('layout/nav.php'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-12 m-3">
            <div class="card text-center">
                <div class="card-header">
                    Program Berhenti
                </div>
                <div class="card-body">
                    <h5 class="card-title">Bage Concat ditemukan 5 kali</h5>
                    <p class="card-text">"Bage Concat" telah tercetak sebanyak 5 kali. Program telah dihentikan.</p>
                    <a href="index.php" class="btn btn-primary">Try Again</a>
                </div>
                <div class="card-footer text-body-secondary">
                    Bilangan <span class="badge text-bg-warning"><?php echo $numIterations ?? 0; ?></span>
                </div>
                </div>
            </div>
        </div>
    </div>
  </body>
    <?php include('layout/script.php'); ?>
</html>