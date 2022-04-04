<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    include_once 'includes/header.php';
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "banthucphamsach";
    $index = 1;
    $db = new mysqli($host, $username, $password, $database);
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM news WHERE id_new ='$id'";
        $result = $db->query($sql);
        $r = mysqli_fetch_assoc($result);
    }
    else {
        header("location: news.php");
    }
    if(isset($_POST['cmd'])) {
        $id1 = $_POST['txtid'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql2 = "UPDATE news SET title ='$title', content = '$content' WHERE id_new ='$id1'";
        $db->query($sql2);
        header("location: news.php");
    }
    ?>
    <div id="layoutSidenav">
        <?php
        include_once 'includes/sidebar.php';
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="txtid" value="<?= $id ?>">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title" name="title" value="<?= $r["title"] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Nội dung</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="content" name="content" value="<?= $r["content"] ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="cmd" value="save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            include_once 'includes/footer.php';
            ?>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
      CKEDITOR.replace( 'description' );
    </script>
</body>

</html>