<?php
/** @var $exception Exception */

$this->title = 'Error | XWEB';
?>



<main>


    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h3><?php echo $exception->getCode()?> - <?php echo $exception->getMessage()?></h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
