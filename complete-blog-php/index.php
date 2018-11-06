<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php include(ROOT_PATH . '/admin/includes/bootstrap.php'); ?>
<?php $posts = getPublishedPosts(); ?>

<!doctype html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="static/images/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <title>B.L.0.0.G</title>
   </head>

   <body>

      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">B . L . 0 . 0 . G</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="register.php">CADASTRE-SE <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="login.php">ACESSAR CONTA</a>
               </li>
            </ul>
         </div>
      </nav>

      <?php if (isset($_SESSION['user']['username'])) { ?>
      <p align="right">
         <span class="btn btn-outline-secondary"><strong>Bem-vindo </strong><?php echo $_SESSION['user']['username'] ?> || <a href="logout.php"><strong>Sair</strong></a></span>
      </p>
      <?php }else{ ?>
      <?php } ?>

      <div class="container">
      <div class="row mb-2">

      <?php foreach ($posts as $post): ?>

      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">
               <?php if (isset($post['topic']['name'])): ?>
               <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" >
               <?php echo $post['topic']['name'] ?>
               </a>
               <?php endif ?>
               </strong>
               <h3 class="mb-0">
                  <a class="text-dark" href="#"><?php echo $post['title'] ?></a>
               </h3>
               <div class="mb-1 text-muted"><span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span></div>
               <p class="card-text mb-auto">
               </p>
               <button class="btn btn-light" href="single_post.php?post-slug=<?php echo $post['slug']; ?>" type="button" data-toggle="modal" data-target="#myModal<?php echo $post['slug']; ?>">Mais...</button>
               
               <div class="modal fade" id="myModal<?php echo $post['slug']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel"><?php echo $post['slug']; ?></h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <?php 
                              if (isset($_GET['post-slug'])) {
                                $post = getPost($_GET['post-slug']);
                              }
                              $topics = getAllTopics();
                              ?>
                           <div class="container">
                              <div class="content" >
                                 <div class="post-wrapper">
                                    <div class="full-post-div">
                                       <?php if ($post['published'] == false): ?>
                                       <h2 class="post-title">Não há postagens!</h2>
                                       <?php else: ?>
                                       <div class="post-body-div">
                                          <?php echo html_entity_decode($post['body']); ?>
                                       </div>
                                       <?php endif ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card" style="width: 18rem;">
               <img class="card-img-top" src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>">
               <div class="card-body"> </div>
            </div>
         </div>
      </div>

      <?php endforeach ?>

      <script>
         Holder.addTheme('thumb', {
           bg: '#55595c',
           fg: '#eceeef',
           text: 'Thumbnail'
         });
      </script>

   </body>
</html>