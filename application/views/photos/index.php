<h2><?php echo $title ?></h2>

<h4>View More: <a href="<?= site_url('photos/dogs');?>" class="album">Dogs</a> &middot; <a href="<?= site_url('photos/kittens');?>" class="album">Kittens</a> &middot; <a href="<?= site_url('photos/birds');?>" class="album">Birds</a></h4>
<?php 
// echo var_dump($photos);

foreach($photos as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<div class='photo-album'><img title='" . $pic->title . "' src='" . $photo_url . "'  class='photo-album'/>
    <p class='photo-album'>".$pic->title."</p></div>";
 
}

?>