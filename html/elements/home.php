<?php

//require_once("../config/config.php");

$sql = "select * from pages where slug = :home";
$stmt = $connection->prepare($sql);
$stmt->execute();

$home = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<div class="col-sm-6 col-lg-6">
    <h2 class="text-justify">Titulo 2</h2>
    <p class="text-muted">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequuntur dolorem doloribus ex facere, id, maxime mollitia perferendis quod temporibus voluptate voluptatibus. Labore necessitatibus neque optio, quidem tenetur voluptatum.
    </p>
</div>
<div class="col-sm-6 col-lg-6">
    <h2 class="text-justify">Titulo 3</h2>
    <p class="text-muted">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequuntur dolorem doloribus ex facere, id, maxime mollitia perferendis quod temporibus voluptate voluptatibus. Labore necessitatibus neque optio, quidem tenetur voluptatum.
    </p>
</div>
<div class="col-12 col-sm-12 col-lg-12">
    <h2 class="text-justify">Titulo 4</h2>
    <p class="text-muted">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequuntur dolorem doloribus ex facere, id, maxime mollitia perferendis quod temporibus voluptate voluptatibus. Labore necessitatibus neque optio, quidem tenetur voluptatum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae cupiditate dolore eius excepturi harum impedit in ipsam ipsum necessitatibus nobis non perferendis perspiciatis quidem repellat rerum, tenetur voluptas voluptatem.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad amet consequuntur cum excepturi, harum ipsa iusto, modi nisi officiis omnis placeat quam qui recusandae tenetur! Adipisci doloribus illo quaerat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquam deleniti dolore dolorem eaque, enim eos eum harum ipsam iure magni molestiae nesciunt nostrum nulla repellat sapiente sequi unde?
    </p>
    <p class="text-muted">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem consequuntur dolorem doloribus ex facere, id, maxime mollitia perferendis quod temporibus voluptate voluptatibus. Labore necessitatibus neque optio, quidem tenetur voluptatum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae cupiditate dolore eius excepturi harum impedit in ipsam ipsum necessitatibus nobis non perferendis perspiciatis quidem repellat rerum, tenetur voluptas voluptatem.
    </p>
</div>
