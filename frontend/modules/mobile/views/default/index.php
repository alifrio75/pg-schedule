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
( SELECT pertandingan_nomer.noper FROM pertandingan_nomer WHERE pertandingan_nomer.id = pertandingan_jadwal.nomer) AS nomer,
( SELECT pertandingan_kelas.kelas FROM pertandingan_kelas WHERE pertandingan_kelas.id = pertandingan_jadwal.kelas) AS kelas,
( SELECT pertandingan_gender.gender FROM pertandingan_gender WHERE pertandingan_gender.id = pertandingan_jadwal.gender) AS gender,
( SELECT venue.name FROM venue WHERE venue.id = pertandingan_jadwal.venue) AS venue,
( SELECT pertandingan_wasit.name FROM pertandingan_wasit WHERE pertandingan_wasit.id = pertandingan_jadwal.wasit) AS wasit,
( SELECT pertandingan_tahap.name FROM pertandingan_tahap WHERE pertandingan_tahap.id = pertandingan_jadwal.tahap) AS tahap,


( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home,
( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.home) AS home_country_id,
( SELECT `country_name` FROM `countries` WHERE countries.id = home_country_id ) as home_country_name,
`home_score`,

( SELECT atlet.name FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op,
( SELECT atlet.country FROM atlet WHERE atlet.id = pertandingan_jadwal.opponent) AS op_country_id,
( SELECT `country_name` FROM `countries` WHERE countries.id = op_country_id ) as op_country_name,
`opponent_score`,

`date`,
`time`,
`hasil`

FROM `pertandingan_jadwal`
');
$result = $sql_data->queryAll();
?>
<!--BEGIN foreach REPEAT COMPONENT
    <div class="panel-body">
		   <?php
			foreach ($result as $value) 
				{
			?>
				<div class="col-md-3" style="padding:5px">
					<div class="box box-primary">
                    <div class="box-header with-border">
						<center>
							<h5><strong><?php echo $value['kelas']; ?></strong></h5>
							<p><?php echo $value['nomer']; ?></p>
                                <?= Html::a('View', Url::toRoute(['/article/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
							<p><?php echo $value['home']; ?> (<?php echo $value['op']; ?>) 
							<br>
							<?php 
                                if (is_null($value['hasil'])) {
                                    echo 'Belum Ada Hasil';
                                } else {
							echo $value['nomer']; 
                                }
							?></p>
						</center>
					</div>
					</div>
				</div>
			<?php	
				}
		   ?>
    </div>
END foreach REPEAT COMPONENT-->



<!--BEGIN foreach REPEAT COMPONENT-->
    <div class="panel-body">
		   <?php
			foreach ($result as $value) 
				{
			?>
			
<section ng-repeat="card in cards" 
                 class="card theme-purple"
                 data-color="">
          <div class="card__map">
            <div class="card__map__inner"></div>
          </div>
          <section class="card__part card__part-1">
            <div class="card__part__inner">
              <header class="card__header">
                <div class="card__header__close-btn"></div>
                <span class="card__header__id"><?php echo $value['nomer']; echo ' - ', $value['gender']; echo ' - KELAS(', $value['kelas'], ')'; ?></span>
                <span class="card__header__price"><?php echo $value['kelas']; ?></span>
              </header>
              <div class="card__stats" ng-style="{'background-image': 'url({{card.bgImgUrl}})'}">
                <div class="card__stats__item card__stats__item--req">
                  <p class="card__stats__type"><?php echo $value['gender']; ?></p>
                  <span class="card__stats__value"><?php echo $value['nomer']; ?></span>
                </div>
                <div class="card__stats__item card__stats__item--pledge">
                  <p class="card__stats__type">Stages</p>
                  <span class="card__stats__value"><?php echo $value['tahap']; ?></span>
                </div>
                <div class="card__stats__item card__stats__item--weight">
                  <p class="card__stats__type">Venue</p>
                  <span class="card__stats__value"><?php echo $value['venue']; ?></span>
                </div>
              </div>
            </div>
          </section>
          <section class="card__part card__part-2">
            <div class="card__part__side m--back">
              <div class="card__part__inner card__face">
                <div class="card__face__colored-side"></div>
                <h3 class="card__face__price"><?php echo $value['kelas']; ?></h3>
                <div class="card__face__divider"></div>
                <div class="card__face__path"></div>
                <div class="card__face__from-to">
                  <p><?php echo $value['home']; ?>, <?php echo $value['home_country_name']; ?></p>
                  <p><?php echo $value['op']; ?>, <?php echo $value['op_country_name']; ?></p>
                </div>
                <div class="card__face__deliv-date"><!--
                  <?php  
                  echo (str_replace("2018-","", $value['date']));
                  ?>-->
                  <?php  
                  $filter = ["2018", "-10"];
                  $filter2 = ["", "oct"];
                  echo (str_replace($filter, $filter2, $value['date']));
                  ?>
                  <p><?php echo $value['time']; ?></p>
                </div>
                <div class="card__face__stats card__face__stats--req">
                  <?php echo $value['gender']; ?>
                  <p><?php echo $value['nomer']; ?></p>
                </div>
                <div class="card__face__stats card__face__stats--pledge">
<!--                  Stage
                  <p><?php echo $value['tahap']; ?></p>-->
                </div>
                <div class="card__face__stats card__face__stats--weight">
                  Venue
                  <p class="card__face__stats__weight">
                    <span><?php echo $value['venue']; ?></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card__part__side m--front">
              <div class="card__sender">
                <h4 class="card__sender__heading">Referee</h4>
                <div class="card__sender__img-cont">
                  <div class="card__sender__img-cont__inner">
                    <img ng-src="{{card.senderImg}}" class="card__sender__img" />
                  </div>
                </div>
                <div class="card__sender__name-and-rating">
                  <p class="card__sender__name"><?php echo $value['wasit']; ?></p>
                  <p class="card__sender__address">
                    <?php echo $value['home']; ?>, <?php echo $value['home_country_name']; ?>
                  </p>
                </div>
                <div class="card__receiver">
                  <div class="card__receiver__inner">
                    <div class="card__sender__img-cont">
                      <div class="card__sender__img-cont__inner">
                        <img ng-src="{{card.senderImg}}" class="card__sender__img" />
                      </div>
                    </div>
                    
                    <div class="card__sender__name-and-rating">
                      <p class="card__sender__name"><?php echo $value['op']; ?></p>
                      <p class="card__sender__address"><?php echo $value['op_country_name']; ?>
                      </p>
                    </div>
                    <hr />
                    <div class="card__sender__name-and-rating">
                      <p class="card__sender__name"><?php echo $value['op']; ?></p>
                      <p class="card__sender__address"><?php echo $value['op_country_name']; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card__path-big"></div>
              </div>
              <div class="card__from-to">
                <div class="card__from-to__inner">
                  <div class="card__text card__text--left">
                    <p class="card__text__heading"><br /></p>
                    <p class="card__text__middle"><?php echo $value['home']; ?></p>
                    <p class="card__text__bottom"><?php echo $value['home_country_name']; ?></p>
                  </div>
                  <div class="card__text card__text--right">
                    <p class="card__text__heading">VS</p>
                    <p class="card__text__middle"><?php echo $value['op']; ?></p>
                    <p class="card__text__bottom"><?php echo $value['op_country_name']; ?></p>
                  </div>
                </div>
              </div>
              <section class="card__part card__part-3">
                <div class="card__part__side m--back"></div>
                <div class="card__part__side m--front">
                  <div class="card__timings">
                    <div class="card__timings__inner">
                      <div class="card__text card__text--left">
                        <p class="card__text__heading">MATCH SCHEDULE</p>
                        <p class="card__text__middle"><?php echo $value['time']; ?></p>
                        <p class="card__text__bottom"><?php echo $value['date']; ?></p>
                      </div>
                      <div class="card__text card__text--right">
                        <p class="card__text__heading">EST MATCH TIME</p>
                        <p class="card__text__middle">24 minutes</p>
                      </div>
                    </div>
                  </div>
                  <div class="card__timer">60 min 00 sec</div>
                  <section class="card__part card__part-4">
                    <div class="card__part__side m--back"></div>
                    <div class="card__part__side m--front">
                    <?= Html::a('<button type="button" class="card__request-btn">
                                <span class="card__request-btn__text-1">START</span>
                            </button>', Url::toRoute(['/article/view', 'id' => $value['id']]), ['data-method' => 'post']) ?>
							<?php 
                                if (is_null($value['hasil'])) {
                                    echo '<p class="card__counter">Event data is not yet available</p>';
                                } else {
							echo $value['nomer']; 
                                }
							?>
                    </div>
                  </section>
                </div>
              </section>
            </div>
          </section>
        </section>
			<?php	
				}
		   ?>
    </div>
<!--END foreach REPEAT COMPONENT-->


