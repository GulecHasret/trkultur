<?php
require_once("uncludes/config.php");
?>

<!DOCTYPE html>

<html>
<head>
<title>Haber</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/still.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>


</head>


<body style="background-color:#d5d5d5;">

<nav class="navbar navbar-inverse" role="navigation"  >
  
  <div class="navbar-header"  >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">SİTE ADI</a>
  </div>

 
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="teknoloji.php">Teknoloji</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kültür ve Sanat <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Kitap</a></li>
          <li><a href="#">Dizi</a></li>
          <li><a href="#">Sinema</a></li>
          <li class="divider"></li>
          <li><a href="#">Müzik</a></li>
		  
          
        </ul>
		
      </li>
	  <li><a href="#">Hakkında</a></li>
      <li><a href="#">İletişim</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Oyun <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">FPS</a></li>
          <li><a href="#">RPG</a></li>
          <li><a href="#">Moba</a></li>
          
        </ul>
      </li>
    </ul>
    <div class="nav navbar-nav navbar-right">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q"/>
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    
  </div><!-- /.navbar-collapse -->
</nav>



    
    
                    
                        <div class="okunan golge-efekti yuksek">
                            
                         <?php
							$veri = $db -> query("SELECT * FROM haber H, haber_icerik HI WHERE H.IDHaber = HI.HaberID",PDO::FETCH_ASSOC);
							if($veri->rowCount()){
								foreach($veri as $row){?>	
						<h3><div class="baslik"><?php print $row["HaberBaslik"];?></div></h3>
						<div class="icerik"><?php  print $row["Icerik"];?></div>
		
						<?php
					}
				}
				
				 
				?>
							
						
                                                      
                     </div>

   
</body>
</html>
