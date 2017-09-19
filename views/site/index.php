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
                            <tr>
                                <td><?php echo !empty($artist->name) ?
                                        $artist->name :
                                        '-' ?></td>
                                <td><?php echo !empty($artist->performance->concert->title) ?
                                        $artist->performance->concert->title :
                                        '-' ?></td>
                                <td><?php echo !empty($artist->performance->concert->place) ?
                                        $artist->performance->concert->place :
                                        '-' ?></td>
                                <td><?php echo !empty($artist->performance->date) ?
                                        $artist->performance->date :
                                        '-' ?></td>
                                <td><?php echo !empty($artist->performance->time) ?
                                        $artist->performance->time :
                                        '-' ?></td>
                            </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-3"></div>
        </div>
    </div>
</div>
