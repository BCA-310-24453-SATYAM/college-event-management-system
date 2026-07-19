<div class="container">
    <div class="col-md-12">
        <hr>
    </div>

    <div class="row">
        <section>
            <div class="container">
                <div class="col-md-6">
                    <img src="<?php echo $row['img_link']; ?>" class="img-responsive">
                </div>
                <div class="subcontent col-md-6">
                    <h1 style="color:#003300; font-size:38px;">
                        <u><strong><?php echo $row['event_title']; ?></strong></u>
                    </h1>
                    <p style="color:#003300; font-size:20px;">
                        <?php
                        echo 'Date: ' . $row['Date'] . '<br>';
                        echo 'Time: ' . $row['time'] . '<br>';
                        echo 'Location: ' . $row['location'] . '<br>';
                        echo 'Student Co-ordinator: ' . $row['st_name'] . '<br>';
                        echo 'Staff Co-ordinator: ' . $row['name'] . '<br>';
                        echo 'Event Price: Rs.' . $row['event_price'] . '<br>';
                        ?>
                    </p>
                    <br>
                    <?php echo '<a class="btn btn-default" href="event_register.php?event_id='.$row['event_id'].'">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span> Register for this Event
                    </a>'; ?>
                </div>
            </div>
        </section>
    </div>
</div>