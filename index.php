<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Genbaneko Image</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<body>
<div class="container" style="margin-bottom: 5%;">
    <form method="POST" action="post.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Foto</label>
        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="textHelp">
        <div id="textHelp" class="form-text">Silakan masukan nama fotonya(bisa apa aja)</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">URL</label>
        <input type="url" name="url" placeholder="https://example.com" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<div class="container">
    <div class="row">
        <?php  
            include_once('connect.php'); 
            $stmt = $db->prepare("SELECT * FROM foto");
            $stmt->execute();
            $foto = $stmt->fetchAll();
            foreach($foto as $gambar) {
        ?>
        <div class="col-md-4 mt-3 col-lg-3">
            <img src=<?php echo $gambar['url'] ?> class="img-fluid" alt=<?php echo $gambar['nama'] ?>>
        </div>
        <?php } ?>
    </div>
    </div>
</body>
</html>