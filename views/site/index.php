<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-3"></div>
            <div class="col-sm-8 col-md-8 col-lg-6">
                <table>
                    <tr>
                        <th>Artist</th>
                        <th>Concert</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    <?php foreach ($artists as $artist): ?>
                        <?php foreach ($artist->performance as $performance): ?>
                    <tr>
                        <td><?php echo $artist->name ?></td>
                        <td><?php echo $performance->concert->title ?></td>
                        <td><?php echo $performance->concert->place ?></td>
                        <td><?php echo $performance->date ?></td>
                        <td><?php echo $performance->time ?></td>
                    </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-3"></div>
        </div>
    </div>
</div>
