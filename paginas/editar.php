<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <?php 
    
    include("../modelo/conexion.php");
    $id_recibido = $_GET["id"];

    $sql = "SELECT * FROM osb WHERE id = '$id_recibido'";
    $result = mysqli_query($conexion, $sql);
    
    $row = mysqli_fetch_assoc($result);
    $marca = $row['marca']; 
    $descripcion = $row['descripcion']; 
    $sku = $row['sku']; 
    $precio = $row['precio']; 
    
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-flex align-items-start">

                <div class="nav flex-column nav-pills me-3 " id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <img src="../MATERIAL TEST 3\sodimac.png" class="img-fluid" style="width:20vw" alt="Logo sodimac">
                    <div class="bg-light " style="height:90vh">
                        <button class="nav-link active mt-3" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Home</button>
                        <button class="nav-link mt-3" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</button>

                        <button class="nav-link mt-3" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Messages</button>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In magnam delectus quis ad? Libero,
                            molestiae quod! Sit, tempore expedita. Soluta a eos laborum velit, libero dignissimos labore
                            quia officiis eveniet!
                            Earum culpa in itaque cum accusantium. Esse, earum quo, nam sequi animi sit soluta illum
                            molestias illo, odio molestiae! Quas est reiciendis labore sapiente repellendus quisquam
                            quam facilis, vitae accusantium.
                            Assumenda placeat impedit, sed, laboriosam facere sapiente minus similique delectus eum in
                            accusantium ex deserunt aspernatur! Tenetur temporibus modi quae recusandae, obcaecati
                            accusantium beatae laborum dignissimos dolorum iusto maiores voluptates!
                        </p>
                        <hr>
                        <div class=" d-flex justify-content-center">
                            <img src="../MATERIAL TEST 3\osb.jpg" class="img-fluid d-flex justify-content-center"
                                alt="osb">
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <p>Agregando nuevo articulo</p>
                    </div>
                    <form action="actions/update.php" method="POST">

                        <input type="hidden" name="id" id="id"  value="<?php echo $id_recibido?>" class="d-none">

                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $marca?>" >
                        </div>

                         <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion?>" >
                        </div>

                        <div class="mb-3">
                            <label for="sku" class="form-label">Sku:</label>
                            <input type="text" class="form-control" id="sku" name="sku" value="<?php echo $sku?>">
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $precio?>">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>