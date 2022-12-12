<?php

require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Accessory.php';


$products = [
  new Food(new Category('Gatto'), 0, 'Croccantini', 'Royal Canin', 34, true, 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/hair/skin/care/crocchette/per/gatti/7/400/_pla_royalcanin_hairskin_dry_7.jpg', 2, 'Manzo', 'Sterilised'),
  new Food(new Category('Cane'), 0, 'Croccantini', 'Monge', 53, true, 'https://www.pennyejack.it/9990-medium_default/monge-cane-all-breeds-adult-grain-free-salmone-e-piselli-12-kg.jpg', 10, 'Pollo', 'Indoor'),
  new Toy(new Category('Gatto'), 1, 'Pallina', 'Piu Pet', 6, true, 'https://acquisti.corriere.it/wp-content/uploads/2021/08/palla-gatto-300x276.jpg', 'Need battery', 'Blu'),
  new Toy(new Category('Cane'), 1, 'Osso', 'Piu Pet', 10, false, 'https://m.media-amazon.com/images/I/71UGo09pD8L._AC_SL1500_.jpg', 'No battery', 'Grigio'),
  new Accessory(new Category('Gatto'), 2, 'Tiragraffi', 'Amazon Basics', 78, true, 'https://m.media-amazon.com/images/I/71aGo8PopSL._AC_SL1500_.jpg', 'Tiragraffi', 'Legno', 176),
  new Accessory(new Category('Cane'), 2, 'Giubbotto', 'Arcaplanet', 34, true, 'https://m.media-amazon.com/images/I/61vDr6pEqvL._AC_SL1500_.jpg', 'Giubbotto', 'Piume', 45)
];

//var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>oop-2</title>
</head>
<body>
  
  <div class="container">
    <div class="row p-5">
      <?php foreach($products as $product): ?>

        <div class="col-6 mb-3">
          <div class="card">
            <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <p class="card-text"><?php echo $product->brand ?> <br> &euro;<?php echo $product->price ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <?php foreach($product->foods as $food): ?>
                <li class="list-group-item"><?php echo $food->ingredients ?></li>
                <li class="list-group-item"><?php echo $food->typology ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>

</body>
</html>