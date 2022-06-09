<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
    <form id="import_form" name="import_form" action="http://localhost/import_csv_project/import_file/read_file" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <h3>Import Your CSV</h3>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" style="margin-top: 20px;" id="" href="<?php echo base_url('logout') ?>">Logout</a>
            </div>
        </div>
        <br>
        <div class="col-md-8">
            <input type="file" accept=".csv" name="upload_file" /> 
        </div>
        <div class="col-md-6" style="padding-top: 5px">
            <input type="submit" name="submit" id="submit" value="Upload" />
        </div>
    </form>
</div> 
</body>
</html>