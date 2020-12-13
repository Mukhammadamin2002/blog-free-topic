<?php 

 $posts = [
 	[
     'title'=> 'Puma',
     'text' => 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture.',
     'footer' => 'Added 5mins ago',
 ],
 [
     'title'=> 'Eazy',
     'text' => 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture.',
     'footer' => 'Added 5mins ago',
 ],
 [
     'title'=> 'Eco',
     'text' => 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture.',
     'footer' => 'Added 5mins ago',
 ],
   
];
// $whole = ($_GET['title' 'text' 'footer']);
// $showAll = !empty($_POST['query']);
// if ($showAll === true){
//     echo $whole;
// }else {
//   echo $whole;
// }


if (isset($_POST['search']) && !empty($_POST['query'])) {
	$query = $_POST['query'];

    $results = [];

	foreach ($posts as $key => $post) {
		
		if (strpos(strtolower($post['title']), strtolower($query)) !== false) {
			$results[] = $post;
		}
	}

	$posts = $results;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
  body {
    background-color: #F0FFFF;
  }
  .social a {
  font-size: 4em;
    padding: 2.5rem;
}
  .fa-facebook {
  color: #3b5998;
}
.fa-twitter {
  color: #00aced;
}
.fa-google-plus-g {
  color: #dd4b39;
}
.fa-instagram {
  color: #517fa4;
}
.fa-youtube {
  color: #bb0000;
}
.fa-facebook:hover,
.fa-twitter:hover,
.fa-google-plus-g:hover,
.fa-instagram:hover,
.fa-youtube:hover {
  color: #d5d5d5
}
footer {
  padding-top: 10px;
  background-color: #F5FFFA;
  color: black;
}
</style>
<body>

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #00008B">
            <a class="navbar-brand" href="#">Unusual Shoes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>  
                </ul>
                <form class="form-inline my-2 my-lg-0" action="" method="post">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search">Search</button>
                </form>
              </div>
        
        </nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4">Some Common Brands</h2>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

 <div class="conatiner">
 	<div class="row">
 	  <?php foreach ($posts as $key => $post): ?>
 		<div class="col-md-4 col-sm-12">
 			<div class="card text-center mt-2 ml-2 mr-2 mb-2">
 				<div class="card-body">
 					<h3 class="card-title">
 						<?php echo ++$key . ' . ' . $post['title'] ?? ''?>
 					</h3>
 				    <div class="card-text">
 				    	<?php echo $post['text'] ?? ''?>
 				    </div>
 				</div>
 				<div class="card-footer">
 					<?php echo $post['footer']  ?? ''?>
 				</div>
 			</div>
 		</div>
 	 <?php endforeach ?>
 	</div>
 </div>

 <div class="card mb-3 mt-1 mb-1 mr-1 ml-1">
  <img src="images/222.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Latest Fashions</h5>
    <p class="card-text">These trainers the most fashionable shoes that also with high quality</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<footer>
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Contact With Us</h2>
    </div>
    <br>
    <div class="col-12 social padding">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="google.com"><i class="fab fa-google-plus-g"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="youtube.com"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</div>
</footer>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
