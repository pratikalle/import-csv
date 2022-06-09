<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <style>
		.sideli {
			position: relative;
			left: 79px;
			font-size: 9px;
		}
        main.page-content {
            padding-top: 14px;
        }

        .main-header {
            max-height: 54px;
        }

        a.text-dark:hover,
        a.text-dark:focus {
            color: #ffffff !important;
        }

        .main-sidebar .logo {
            background-color: #5b7890 !important;
            color: #ffffff !important;
            border-bottom: 0 solid transparent;
        }

        .main-header {
            background-color: #cdd7d9 !important;
        }

        .nav nav-treeview .sidebar-submenu .nav-item .submenuli {
            padding-left: 25px;
            font-size: 13px;
        }
		
		.form-group.control-highlight2 .control-label {
			-webkit-transform: scale(0.9, 0.86) translateY(-27px);
			transform: scale(0.9, 0.86) translateY(-14px);
		}

		label.UploadDocument:hover > small#mouse_over {
		   opacity: 1;
		}

		small#mouse_over {
		   opacity: 0;
		}
		
		.modal-backdrop {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 9999;
			background-color: #000000cf;
		}

		.transparent-modal-box {
		   background-color: transparent;
		   box-shadow: none;
		   border: none;
		}
		
		/*-------- New Modal CSS --------*/
		
		.modal-content {
			background: none !important;
			box-shadow: none;
		}

		.modal .text-muted {
		   color: #fff !important;
		}

		/* SPINNER 13 */

		.ml-loader {
			position: relative;
			width: 70px;
			height: 70px;
		}

		.ml-loader div {
			-webkit-transform-origin: 32px 32px;
			-ms-transform-origin: 32px 32px;
			transform-origin: 32px 32px;
			-webkit-animation: 1.2s opaque ease-in-out infinite both;
			animation: 1.2s opaque ease-in-out infinite both;
		}

		.ml-loader div::after {
			content: "";
			display: block;
			position: absolute;
			top: 0;
			left: 30px;
			width: 5px;
			height: 18px;
			border-radius: 10px;
			background-color: #ffffff;
		}

		.ml-loader div:nth-child(1) {
			-webkit-transform: rotate(0);
			-ms-transform: rotate(0);
			transform: rotate(0);
		}
		
		.ml-loader div:nth-child(2) {
			-webkit-transform: rotate(30deg);
			-ms-transform: rotate(30deg);
			transform: rotate(30deg);
			-webkit-animation-delay: 0.1s;
			animation-delay: 0.1s;
		}

		.ml-loader div:nth-child(3) {
			-webkit-transform: rotate(60deg);
			-ms-transform: rotate(60deg);
			transform: rotate(60deg);
			-webkit-animation-delay: 0.2s;
			animation-delay: 0.2s;
		}
		
		.ml-loader div:nth-child(4) {
			-webkit-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			transform: rotate(90deg);
			-webkit-animation-delay: 0.3s;
			animation-delay: 0.3s;
		}

		.ml-loader div:nth-child(5) {
			-webkit-transform: rotate(120deg);
			-ms-transform: rotate(120deg);
			transform: rotate(120deg);
			-webkit-animation-delay: 0.4s;
			animation-delay: 0.4s;
		}

		.ml-loader div:nth-child(6) {
			-webkit-transform: rotate(150deg);
			-ms-transform: rotate(150deg);
			transform: rotate(150deg);
			-webkit-animation-delay: 0.5s;
			animation-delay: 0.5s;
		}

		.ml-loader div:nth-child(7) {
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg);
			-webkit-animation-delay: 0.6s;
			animation-delay: 0.6s;
		}

		.ml-loader div:nth-child(8) {
			-webkit-transform: rotate(210deg);
			-ms-transform: rotate(210deg);
			transform: rotate(210deg);
			-webkit-animation-delay: 0.7s;
			animation-delay: 0.7s;
		}

		.ml-loader div:nth-child(9) {
			-webkit-transform: rotate(240deg);
			-ms-transform: rotate(240deg);
			transform: rotate(240deg);
			-webkit-animation-delay: 0.8s;
			animation-delay: 0.8s;
		}

		.ml-loader div:nth-child(10) {
			-webkit-transform: rotate(270deg);
			-ms-transform: rotate(270deg);
			transform: rotate(270deg);
			-webkit-animation-delay: 0.9s;
			animation-delay: 0.9s;
		}

		.ml-loader div:nth-child(11) {
			-webkit-transform: rotate(300deg);
			-ms-transform: rotate(300deg);
			transform: rotate(300deg);
			-webkit-animation-delay: 1s;
			animation-delay: 1s;
		}

		.ml-loader div:nth-child(12) {
			-webkit-transform: rotate(330deg);
			-ms-transform: rotate(330deg);
			transform: rotate(330deg);
			-webkit-animation-delay: 1.1s;
			animation-delay: 1.1s;
		}

		.ml-loader div:nth-child(13) {
			-webkit-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			transform: rotate(360deg);
			-webkit-animation-delay: 1.2s;
			animation-delay: 1.2s;
		}

		@-webkit-keyframes rotate {
			100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

		@keyframes rotate {
			100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

		@-webkit-keyframes opaque {
			0% {
				opacity: 0.1;
			}
			40% {
				opacity: 1;
			}
			80% {
				opacity: 0.1;
			}
			100% {
				opacity: 0.1;
			}
		}

		@keyframes opaque {
			0% {
				opacity: 0.1;
			}
			40% {
				opacity: 1;
			}
			80% {
				opacity: 0.1;
			}
			100% {
				opacity: 0.1;
			}
		}
		
		.modal-content {
			background: transparent;
			box-shadow: none;
			border: 0;
		}

		.modal .text-muted {
		   color: #fff !important;
		}
		
		</style>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2 style="font-weight:700;">View Document</h2>
        </div>   
        <div class="col-md-4">
            <a class="btn btn-primary" style="margin-top: 20px;" id="import_csv" href="<?php echo base_url('import_file') ?>">Import CSV</a>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-primary" style="margin-top: 20px;" id="" href="<?php echo base_url('logout') ?>">Logout</a>
        </div>    
    </div>
    </div>

    <div class="row">    
        <div class="col-md-12">
            <table id="doc_data" class="table table-striped table-bordered ">
                <thead>
                <tr>
                    <th style="width: 70px;" colspan="1" rowspan="1">First Name</th>
                    <th style="width: 70px;" colspan="1" rowspan="1">Last Name</th>
                    <th style="width: 50px;" colspan="1" rowspan="1">Age</th>
                    <th style="width:130px;" colspan="1" rowspan="1">Address</th>
                    <th style="width:30px;" colspan="1" rowspan="1">City</th>
                </tr>
                </thead> 
            </table>
        </div>
    </div>

    <!-- <div id="remark_modal" class="modal remark-modal" role="dialog" aria-labelledby="gridSystemModalLabel" style="z-index: 10000;">
            <div class="modal-dialog" role="document" style="background: #fff;">-->
            <!-- Modal content-->
                <!-- <div class="modal-content">
                      <div class="modal-header" style="color:#000;">
                         <h5 class="modal-title">Import Your CSV</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <form id="import_form" name="import_form" action="http://localhost/import_csv_project/import_file/read_file" method="post" enctype="multipart/form-data">
                        
                        <div class="col-md-8">
                            <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="upload_file" /> 
                        </div>
                        <div class="col-md-6" style="padding-top: 5px">
                            <input type="submit" name="submit" id="submit" value="Upload" />
                        </div>
                        </form>
                      </div>
                      
                </div>
            </div> 
        </div> -->



    <script type="text/javascript">
        // function import_csv() {

        //     $('#import_modal').modal('show');  
        // }

    </script>

    <script>
        $(function()
        {
          var doc_data;
          doc_data = $('#doc_data').DataTable({
          fixedHeader: true,
          "pageLength": 10,
          "processing":true,
          "bFilter": true,
          "bLengthChange": false,
          "serverSide": true,
		  "ordering": false,
		  'searching':false,
          "ajax" : 
          {
           url: "<?php echo base_url('home/get_doc_data') ?>",
           type: "post"
          }, 
          });
        });

    </script>
    
</body>
</html>