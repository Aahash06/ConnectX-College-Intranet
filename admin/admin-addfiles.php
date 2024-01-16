<?php
    session_start();
    if (!$_SESSION["LoginAdmin"])
    {
        header('location:../login/login.php');
    }
    require_once "../connection/connection.php";
?>

<title>Admin - ICBS</title>
<?php include('../common/common-header.php') ?>
<?php include('../common/admin-sidebar.php') ?>  
    <main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">


        <html>
            <head>
                <title>File Upload</title>
            </head>
            <body>
                <div style="border:1px solid; border-radius: 6px; padding:2em; margin-bottom:2em; width:60%;">
                    <h5>All Files</h5>
                    <button><a href="javascript:location.reload(true)"><i style="color:black">refresh</i></button>
                    <div style="display:flex; flex-direction:column">
                    <?php 
                        // List files in uploads folder
                        $files = glob('../uploads/admin/*');
                        // Loop through files
                        foreach($files as $file){
                            // Get file name
                            $fileName = basename($file);
                            // Print file link
                            echo '<a href="../uploads/admin/'.$fileName.'">'.$fileName.'</a><br>';
                        }
                    ?>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" name="fileToUpload" multiple>
                    </div>
                    <input type="submit" value="submit" name="file-submit-button">
                </form>
            </body>
        </html>

        <?php
        if(isset($_POST['file-submit-button'])){
            $target_dir = "../uploads/admin/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            
            // Check file size
            // if ($_FILES["fileToUpload"]["size"] > 500000) {
            //     echo "Sorry, your file is too large.";
            //     $uploadOk = 0;
            // }
            
            // Restrict .exe files
            if($imageFileType == "exe") {
                echo "Sorry, .exe files are not allowed.";
                $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "The file ".basename( $_FILES["fileToUpload"]["name"])." has been uploaded.";
                    exit();
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            header("location:index.php");
        }
        ?>
    </main>

    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>