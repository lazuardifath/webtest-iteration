<!doctype html>
<html lang="en">
  <head>
    <?php include('layout/header.php'); ?>
  </head>
  <body style="background-color: #F8F0E5">
    <?php include('layout/nav.php'); ?>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-12 m-3">
                <form method="post">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <label for="bilangan" class="col-form-label">Input Bilangan</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" name="bilangan" id="bilangan" class="form-control border border-success" aria-describedby="bilanganoutput" required>
                        </div>
                        <div class="col-auto">
                            <span id="bilanganoutput" class="form-text text-danger">
                                *Harus Angka.
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12 m-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 m-3">
            Statistics : 
                <button type="button" class="btn btn-info m-1" style="font-size: 9pt;">
                    Bilangan <span class="badge text-bg-warning" style="font-size: 9pt;"><?php echo $numIterations ?? 0; ?></span>
                </button>
                <button type="button" class="btn btn-info m-1" style="font-size: 9pt;">
                    Jumlah Bage Concat <span class="badge text-bg-warning" style="font-size: 9pt;"><?php echo $output[1] ?? 0; ?></span>
                </button>
                <button type="button" class="btn btn-info m-1" style="font-size: 9pt;">
                    Switch Status <span class="badge text-bg-warning" style="font-size: 9pt;">
                    <?php 
                       if(isset($output[2]) && $output[2] == 1){
                            echo 'Kondisi Ditukar';
                        }
                        elseif(isset($output[2]) && $output[2] == 0){
                            echo 'Kondisi Belum Ditukar';
                        }
                        else{
                            echo 'No Operation';
                        } 
                    ?>
                    </span>
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 m-6">
            <div class="card">
                <div class="card-header">
                    Iteration
                </div>
                <div class="card-body">
                    <p class="card-text"> <?php echo $output[0] ?? 'Belum Menginput Bilangan'; ?></p>
                </div>
            </div>
               
            </div>
        </div>
    </div>
  </body>
    <?php include('layout/script.php'); ?>
</html>