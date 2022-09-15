<?php


class calculo{

    public $og;
    public $vu;

    public function __construct($og, $vu){

        $this->og = $og;
        $this->vu = $vu;

    }

    public function getog(){
        return $this->og;
    }

    public function setog(){
        $this->og = $og;
    }

    public function getvu(){
        return $this->vu;
    }

    public function setvu(){
        $this->vu = $vu;
    }

    public function vpa($og, $vu){
        ob_start(); ?>
        <html>
        <body>
            <div class="container-xxl">
                <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
                    <thead>
                        <tr>
                            <th scope="col">Año</th>
                            <th scope="col">Valor por año</th>
                            <th scope="col">Valor recuperado</th>
                        </tr>
                    </thead>
                    <?php $vr=0;
                    $depre=$og/$vu;
                    for($i=0; $i<$vu+1; $i++){
                    ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $i?></th>
                            <td><?php echo number_format($og, 2,'.',',');?></td>
                            <td><?php echo number_format($vr, 2,'.',',')?></td>
                    <?php $og=($og-$depre);
                    $vr=($vr+$depre);
                    ?>
                </tr>
                
                <?php }?>
                </tbody>
                </table>
            </div>
    </body>
    </html>

    <?php

        return ob_get_clean();

    }
}
