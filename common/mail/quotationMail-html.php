<?php
use yii\helpers\Html;
use common\models\InquirySlab;
use common\models\InquiryRooming;
use yii\helpers\Url;
use yii\db\query;

$connection = \Yii::$app->db;
$it_room_count = count($model->roomTypes);
$it_slab_count = count($model->slabs);
$col_count = 5;
?>
<div class="quotation-table">
    
    <!-- Email Greetings -->
        <?=$greetings?>
    <!-- /Email greetings -->

    <br>

<?php
    if($it_slab_count > 0){
        foreach ($model->slabs as $it_slab) {
            foreach ($model->roomTypes as $it_room) {
                $title = InquirySlab::$slabs[$it_slab->slab]." (".InquiryRooming::$types[$it_room->type].")";
                $query = $connection->createCommand("SELECT SUM(cost_per_person) FROM `quotation_itinerary_costing` WHERE quotation_id = ".$model->id." AND slab = ".$it_slab->slab." AND rooming = ".$it_room->type);
                $total = $query->queryScalar();
                $total = round($total);
                $total = $model->profit + $total;
                echo "<strong class='package-cost'>PACKAGE COST PER PERSON FOR ".ucwords($title).": <u>USD ".$total."</u></strong> <br>";
            }
        }
    }else{
        foreach ($model->roomTypes as $it_room) {
            $title = InquiryRooming::$types[$it_room->type];
            $query = $connection->createCommand("SELECT SUM(cost_per_person) FROM `quotation_itinerary_costing` WHERE quotation_id = ".$model->id." AND rooming = ".$it_room->type);
            $total = $query->queryScalar();
            $total = round($total);
            $total = $model->profit + $total;
            echo "<strong class='package-cost'>PACKAGE COST PER PERSON FOR ".ucwords($title).": <u>USD ".$total."</u></strong> <br>";
        }
    }
?>    
        <br> 
    <table >
        <thead>
            <tr class='quotation-table-head'>
                <th class='days'>Days</th>
                <th >Date</th>
                <th >Destination</th>
                <th >Itinerary</th>
                <th >Remarks</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($model->itineraries as $itineraryModel) {
                    $counter = 0;
                    foreach ($itineraryModel->quotationItineraryDetails as $itineraryDetailModel)
                    {
                        echo "<tr>";
                        $it_date = date('j-M-y', $itineraryModel->date);
                        if($counter == 0){
                            echo "<td class='days'>$itineraryModel->day</td>";
                            echo "<td>".$it_date."</td>";
                            echo "<td>$itineraryModel->city</td>";
                        }else if($counter == 1){
                            echo "<td></td>";
                            echo "<td>".date('l', $itineraryModel->date)."</td>";
                            echo "<td></td>";
                        }else{
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                        }

                        echo "<td>$itineraryDetailModel->title</td>";
                        echo "<td>$itineraryDetailModel->remarks</td>";
                        echo "</tr>";
                        $counter++;
                    }
                    echo "<tr class='empty-row'>";
                        for ($i=0; $i < $col_count; $i++) { 
                            echo "<td></td>";
                        }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <br> <br>

    <!-- Terms and condtions -->
        <?=$terms?>
    <!-- /Terms and condtions -->

<?php
    $this->registerCss("
        td{
            padding: 4px 5px;
            text-align: center;
            border: 1px solid black;
        }
        tr.quotation-table-head th{
            padding: 4px 5px;
            background-color: #f8cbad;
            border: 1px solid black;
        }
        th{
            text-align: center;
        }
        tr.empty-row{
            height: 20px;
            background-color: #8ea9db;
        }
        table{
            border-spacing: 0;
            border-collapse: collapse;
        }
        .days{
            width: 60px;
        }
    ");
?>