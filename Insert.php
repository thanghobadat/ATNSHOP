<html lang="en">

<head>
    <title>ATN shop </title>
    <link rel="stylesheet" type="text/css" href="CSS/insert.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".navbar-right .dropdown-menu", function(e){
            e.stopPropagation();
        });
    </script>
    <head>

    <body>
        
        <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header d-flex col">
                <a class="navbar-brand" href="#">ATN<b>Shop</b></a>  		
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="F:\Assignment website\web\trangchu.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Introduce</a></li>			
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Sale<b class="caret"></b></a>
                        <ul class="dropdown-menu">					
                            <li><a href="#" class="dropdown-item">Sale 10%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 20%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 30%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 50%</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active"><a href="#" class="nav-link">New</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                </ul>
                <form class="navbar-form form-inline">
                    <div class="input-group search-box">								
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right ml-auto">			
                    <li class="nav-item">
                        <a href="#">Insert</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">View</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
  
            <section class="panel panel-default">
          <div class="panel-heading"> 
          <h3 class="panel-title">Insert</h3> 
          </div> 
          <div class="kt"></div>
          <div class="panel-body">
            
          <form action="designer-finish.html" class="form-horizontal" role="form">
          

          <div class="kt"></div>
          
             <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Produce code</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </div>
            </div> <!-- form-group // -->

            <div class="kt"></div>
            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Product name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name" id="name" placeholder="">
              </div>
            </div> <!-- form-group // -->
            
            <div class="form-group">
              <label for="qty" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-3">
             <input type="text" class="form-control" name="qty" id="qty" placeholder="">
              </div>
            </div> <!-- form-group // -->
          

            <hr>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="">Submit</button>
              </div>
            </div> <!-- form-group // -->
          </form>
            
          </div><!-- panel-body // -->
          </section><!-- panel// -->
          
            
        </div> <!-- container// -->
      
    </body>


