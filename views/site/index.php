<?php
namespace app\models;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use Yii;
?>  
<?php $this->title = "Товары"; ?>
<section>
	<div class="container">
                	<?php 
                        echo "<h1 style='font-size: 34px;font-weight: 700;margin: 0 auto 30px;text-align: center;text-transform: uppercase;position: relative;z-index: 3;'>Новости</h1>";
                        foreach ($model as $yel) {
                            echo "<div class='tovar'>";       			
                    			echo '<h2>'.$yel->name.'</h2>';
                                echo '<p>Описание: '.$yel->opisanie.'</p>';
                                
                            echo "</div>"; 
                            }    
                		      
                	?>
                </div>
			</div>
		</div>
	</section>
<div class="pagenavig">
    <?php
        use yii\widgets\LinkPager;
        echo LinkPager::widget([
        'pagination' => $pages,
        ]);
    ?>
</div>