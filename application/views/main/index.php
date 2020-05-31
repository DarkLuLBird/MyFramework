<h1>Главная</h1>

<?php
    foreach ($news as $item) {
?>
        <div>
            <h3><?= $item['title']; ?></h3>
            <p><?= $item['description']; ?></p>
            <hr>
        </div>
<?php
    }
?>