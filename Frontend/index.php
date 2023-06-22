<?php
include("Class/clsJoke.php");
$p= new Jokes();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Joke</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
</head>
<body>
<div class="container">
<!-- header -->
  <header class="row" style="height:180px">
     <h2>A joke a day keeps the doctor away</h2>
     <span>If you joke wrong way, your teeth have to pay. (Serious)</span>
  </header>
  <!-- content -->
  <main class="row col-xs-12" style="height:442px">
         <div class="col-lg-3">
         </div>
         <div class="col-lg-6" style="padding-top:50px">
              <p style="color:#333">
                    <?php
					    if(isset($_COOKIE["Like"]) || isset($_COOKIE["Dislike"]) )
						{
						  $link=$p->connect();
						  $sql="SELECT id, text FROM jokes order by rand() limit 1";
						  $ketqua=mysql_query($sql,$link);
						  $i=mysql_num_rows($ketqua);
						  if($i>0)
						  {
							  while($row=mysql_fetch_array($ketqua))
							  {
								  $text=$row['text'];
								  $id=$row['id'];
								  echo $text;
							  }
					       }
						    else
							  {
								  echo'No data.';
							  }
						  }  
				           mysql_close($link);
                       //
					   ?>
                       <?php
					   switch($_POST['btn']){
						   case '    This is Funny!':
						   {
	 						   if($p->updateVote("UPDATE jokes SET likes = likes + 1 WHERE id =$id")==1)
							   {
								   $cookie_name = "Like";
								   $cookie_value = true;
								   setcookie( $cookie_name ,$cookie_value, time() + (86400 * 30), "/");
							   }
 							   break;
						   }
						    case 'This is not funny.':
						   {
							   if($p->updateVote("UPDATE jokes SET dislikes = dislikes + 1 WHERE id =$id")==1)
							   {
								   $cookie_name = "Dislike";
								   $cookie_value = true;
							       setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
							   }
							   break;
						   }
					   }
                     ?>
                     <form id="form1" name="form1" method="post" action="">
                    <input class="btn" type="submit" name="btn" id="btn" value="    This is Funny!" style="background-color:#09F;"/>
                    <input class="btn" type="submit" name="btn" id="btn" value="This is not funny." style="background-color:#0C9"/>
                     </form>
              </p>
         </div>
         <div class="col-lg-3">
         </div>
  </main>
  <!-- footer -->
  <footer class="row col-xs-12" style="height:130px">
         <div class="row">
         <div class="col-lg-3">
         </div>
         <div class="col-lg-6">
              <p>
                  Lorem ipsum dolor sit amet. Qui reprehenderit perferendis aut modi omnis nam mollitia earum est perferendis veritatis est 
                  porro molestiae aut vero possimus! Sit repellendus consequatur est asperiores laborum et voluptas nisi.
              </p>
         </div>
         <div class="col-lg-3">
         </div>
       </div>
       <h6>Copyright 2023</h6>
  </footer>
</div>
</body>
</html>