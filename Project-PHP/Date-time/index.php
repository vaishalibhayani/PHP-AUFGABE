<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>

    <div class="container-fulid">
        <div class="Row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header-bg">
                        <h3>How to date and time Function (get current Date time) & show in different Format in PHP? </h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <h4>Current Date : <?php echo date('Y-m-d');?> </h4>
                        <h5> Current - Year  : <?php echo date('Y'); ?> </h5>
                        <h5> Current - Month : <?php echo date('m'); ?> </h5>
                        <h5> Current - Date  : <?php echo date('d'); ?> </h5>
                    </div>   
                        <hr>
                        <div class="card-body-bg">
                        <h4>Current Time : <?php echo date('h:i:s A');?> </h4>
                        <h5>  Hour   :  <?php echo date('h'); ?> </h5>
                        <h5>  Minute :  <?php echo date('i'); ?> </h5>
                        <h5>  Seconds:  <?php echo date('s'); ?> </h5>
                        <h5>  AM/ PM :  <?php echo date('a'); ?> </h5>
                        </div>
                        <hr>

                        
                        <!--date format -->

                    <div class="card-body-bg-bg">
                        <h4>Date Formate for : <?php echo date('d-m-y');?> </h4>
                        <h5>  <?php echo date('d/m/y'); ?> </h5>
                        <h5>  <?php echo date('d:m:y'); ?> </h5>
                        <h5>  <?php echo date('m-d-y'); ?> </h5>
                        <h5>  <?php echo date('d-m-y'); ?> </h5>
                    </div>   
                        <hr>
                    
                        
                    <div class="card-body-bg-bg-bg">
                        <h4>Time Formate for : <?php echo date('h:i:s A');?> </h4>
                        <h5>  <?php echo date('h:i A'); ?> </h5>
                        <h5>  <?php echo date('h:i'); ?> </h5>
                        
                    </div>
                        <hr>
                        <div class="card-body-bgg">
                        <h4>Time for 12 Hour Format: <?php echo date('h:i');?> </h4>
                        <h5>Time for 24 Hour Format: <?php echo date('H:i '); ?> </h5>
                        
                        
                    </div> 
                    <hr>
                    

                </div>
            </div>
        </div>

    </div>
</body>
</html>