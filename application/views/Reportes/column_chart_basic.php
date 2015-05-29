<?php
    echo $this->gcharts->ColumnChart('Inventory')->outputInto('inventory_div');
    echo $this->gcharts->div(600, 500);

    if($this->gcharts->hasErrors())
    {
        echo $this->gcharts->getErrors();
    }
?>