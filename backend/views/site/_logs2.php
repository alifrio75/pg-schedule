<?php
use yii\helpers\Url;
use yii\helpers\Html;
/*-- Use Database --*/
use yii\db\Query;
$connection = \Yii::$app->db;

/*-- Select Data In Array --*/
$sql_data = $connection->createCommand('
SELECT
    `id`,
    ( SELECT pertandingan_jadwal.home FROM pertandingan_jadwal WHERE id = pertandingan_hasil.id) AS home_id,
    ( SELECT atlet.name FROM atlet WHERE atlet.id = home_id) AS home,
    ( SELECT pertandingan_jadwal.opponent FROM pertandingan_jadwal WHERE id = pertandingan_hasil.id) AS op_id,
    ( SELECT atlet.name FROM atlet WHERE atlet.id = op_id) AS op,
    `home_point`,
    `opp_point`
FROM
    `pertandingan_hasil`
');
$result = $sql_data->queryAll();

?>


<table class="table">
	<tbody>
        <?php
            foreach ($result as $value) 
            {
        ?>
		<tr>
			<td>
			<?php echo $value['home']; ?> VS <?php echo $value['op']; ?>
			</td>
			<td>
			
            <?php
                if ($value['home_point'] > $value['opp_point']) {
                    echo $value['home'], "(WIN)";
                } elseif ($value['home_point'] < $value['opp_point']) {
                    echo $value['op'], "(WIN)";
                } else {
                    echo "DRAW";
                }
            ?>

			    
			</td>
			<td class="td-actions text-right">
				<?= Html::a('
                                <button type="button" rel="tooltip" title="'.$value['home'].'('.$value['home_point'].')  -  '.$value['op'].'('.$value['opp_point'].')" class="btn btn-primary btn-simple btn-xs">
									<i class="material-icons">visibility</i>
								</button>
								    ', Url::toRoute(['/pertandingan-hasil/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
			</td>
		</tr>
        <?php	
            }
        ?>
	</tbody>
</table>