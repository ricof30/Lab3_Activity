<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                <h2>Admin Login in</h2>               
               
                <form action="/admin" method="post">
                    <div class="form-group mb-3">
                        <input type="username" name="username" placeholder="Username" value="<?= old('username') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" value="<?= old('password') ?>"  class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-success">Signin</button>
                    </div>     
                </form>
                <?php if(session()->getFlashdata('error_msg')): ?>
            <div class="alert alert-danger mt-3">
                <?php echo session()->getFlashdata('error_msg'); ?>
            </div>
        <?php endif; ?>
            </div>
              
        </div>
    </div>
  </body>
</html>