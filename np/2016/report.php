<?php
session_start();
include('config.php');
$session_token ="8qvdw";
//$session_token = "h9aWsgkE8V";
$path = $_SERVER['HTTP_HOST'];
$sql = mysql_query("select * from `lime_survey_266617` where `token` = '" . $session_token . "' and `submitdate` is not NULL");
$sql_data = mysql_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Green School Programms Audit Portal</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="report-container">
           
                <!-- Begin Report Cover -->
                <div class="report-cover">
                    <header>
                        <figure><img src="images/logo.png"></figure>
                        <h1>Responses For Green Schools Programme Audit 2016</h1>
                    </header>
                    <figure class="banner-img"><img src="images/cover.png"></figure>
                    <div class="report-label">
                        <h2>School Profile information</h2>
                        <p class="name"><?php echo $sql_data['266617X32X27']; ?></p>
                        <p class="bio"><?php echo $sql_data['266617X32X27']; ?> |
                            <?php
                            if($sql_data['266617X32X27'] == "A1") {
                                echo "Male";
                            } else {
                                echo "Female";
                            }
                            ?>
                        </p>
                    </div>
                    <p class="thanks-text">Congratulations for completing the survey. This report contains feedback on your food habits based on the responses submitted by you. It is directional in nature and is based on broad principles of healthy eating. It does not intend to replace clinical advice. For more detailed consultation, please seek professional help.</p>
                </div>
                <!-- Begin Report Body -->
                <div class="report-detail page-break-before">
                    <h3>General Question</h3>
                    <figure><img src="assets/images/non-packaged.jpg"></figure>
                    <?php /*
                    //How many days in a month do you eat non-packaged foods like? 
                    $npf_fbp = $sql_data['266617X32X28'] - 1; //Fries, burgers, pizzas, wraps etc. from fast food outlets such as Pizza Hut, Dominoï¿½s, McDonaldï¿½s, KFC etc.
                    $npf_sfc = $sql_data['266617X32X28'] - 1; //Street food like chaat, pakora, samosa, momos, kachori, pavbhaji, chole bhature etc.
                    $npf_cpi = $sql_data['266617X32X28'] - 1; //Cake, pastry or Indian sweets like rasagulla, halwa, jalebi etc.
                    //Fries, burgers, pizzas, wraps etc. from fast food outlets such as Pizza Hut, Dominoï¿½s, McDonaldï¿½s, KFC etc.

                    if ($npf_fbp > 4) {
                        $fbpText = "<li style='color:red'>Junk foods like pizzas, fries and burgers are ultra-processed foods high in salt and fat. Limit eating to once in a while if you feel like.</li>";
                    } elseif ($npf_fbp >= 1 && $npf_fbp <= 4) {
                        $fbpText = "<li>" . "You do not eat much of junk foods like  pizzas, fries and burgers. It should prove healthy." . "</li>";
                    } elseif ($npf_fbp == 0) {
                        $fbpText = "<li>" . "You do not eat junk foods like  pizzas, fries and burgers. It should prove healthy." . "</li>";
                    }

                    //Street food like chaat, pakora, samosa, momos, kachori, pavbhaji, chole bhature etc.
                    if ($npf_sfc > 8) {
                        $sfcText = "<li>" . "Based on how street food is cooked, it may have high salt and fat. Keep a check on how much you eat in a day. Prefer those with not too much salt and fat." . "</li>";
                    } elseif ($npf_sfc >= 1 && $npf_sfc <= 8) {
                        $sfcText = "<li>" . "It seems that you do not eat much of street food. It is fine as long as it is not replaced by packaged and processed food." . "</li>";
                    } elseif ($npf_sfc == 0) {
                        $sfcText = "<li>" . "It seems that you do not eat much of street food. It is fine as long as it is not replaced by packaged and processed food." . "</li>";
                    }

                    //Cake, pastry or Indian sweets like rasagulla, halwa, jalebi etc.
                    if ($npf_cpi > 8) {
                        $cpiText = "<li>" . "Based on preparation, cake, pastry or Indian sweets may have high sugar and fat. Keep a check on how much you eat in a day. Prefer those with not too much sugar or fat." . "</li>";
                    } elseif ($npf_cpi >= 1 && $npf_cpi <= 8) {
                        $cpiText = "<li>" . "It seems that you do not eat much of cake and indian sweets. It is fine as long as it is not replaced by packaged and processed sugary snacks." . "</li>";
                    } elseif ($npf_cpi == 0) {
                        $cpiText = "<li>" . "It seems that you do not eat much of cake and indian sweets. It is fine as long as it is not replaced by packaged and processed sugary snacks." . "</li>";
                    }

                    //Q12 : How often do you eat one or more of papad, pickles and chutneys etc.?
                    $eat_ppc = $sql_data['296143X9X1818'];
                    if ($eat_ppc == 1) {
                        $ppcText = "<li>Pickles, papads, chutneys etc. can contribute to higher intake of salt. Try to limit the intake.</li>";
                    } elseif ($eat_ppc == 2) {
                        $ppcText = "<li>Pickles, papads, chutneys etc. can contribute to higher intake of salt. Try to limit the intake.</li>";
                    } elseif ($eat_ppc == 3) {
                        $ppcText = "<li>Pickles, papads, chutneys etc. can contribute to higher intake of salt. Try to limit the intake. Be mindful that you are not consuming excessive quantity at one time.</li>";
                    } elseif ($eat_ppc == 4) {
                        $ppcText = "<li>Pickles, papads, chutneys etc. can contribute to higher intake of salt. It is good that you do not consume them excessively. Keep your overall intake of salt in check. </li>";
                    }
					*/
					
					 $ppcText = "<li>Pickles, papads, chutneys etc. can contribute to higher intake of salt. It is good that you do not consume them excessively. Keep your overall intake of salt in check. </li>";
                    ?>
                    <ul>
                    <?php echo $fbpText ?> <?php //echo $sfcText ?> <?php //echo $cpiText ?> <?php //echo $ppcText ?>
                    </ul>                 
             
                      <p>
                          Avoid substituting balanced meals with processed foods from fast food outlet or instant noodles; may lead to excess salt, sugar, fat intake and limit fibre, vitamins, minerals.
                      </p>
                     <!--  Start Water Intake Report-->
                   <h3>Air Section Question</h3>
                   <figure><img src="images/air.png"></figure>

                    <?php
                    //Qn 11 .How much water do you drink in a day?
					/*
                    $water_intake = $sql_data['266617X32X1674SQ001'];

                    if ($water_intake == 1) {
                        $waterText = "<li>Your water intake seems to be low. Try to increase it to avoid dehydration. Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases.</li>";
                    } elseif ($water_intake == 2) {
                        $waterText = "<li>Your water intake is probably low. Try to increase it to avoid dehydration. Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases.</li>";
                    } elseif ($water_intake == 3) {
                        $waterText = "<li>Your water intake seems to be adequate. Maintain that to avoid dehydration. Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases</li>";
                    } elseif ($water_intake == 4) {
                        $waterText = "<li>Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases.</li>";
                    }else{
						$waterText = "<li>Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases.</li>";
					}*/
					
					$waterText = "<li>Water plays an important role in the upkeep of our health. A normal healthy person needs to drink about 8 glasses (2 litre) of water per day. During very hot weather and while undertaking vigorous physical activity, this requirement increases.</li>";
                    ?>
                    <ul>
                    <?php echo $waterText ?>
                    </ul>

                    <!-- End Water Report -->
                    <h3>Energy Section Question</h3>
                    <figure><img src="images/energy.png"> </figure>
                    <?php
                    //Qn  How much time you generally spend in front of a screen in a day
                    //Watching television
					/*
                    if ($sql_data['296143X9X651SQ001'] == 3) {
                        $screen_text1 = "<li>" . "Keep a check on your screen time. Spending too much time watching television is linked with developing bad food habits and inactivity." . "</li>";
                    } elseif ($sql_data['296143X9X651SQ001'] == 4 || $sql_data['296143X9X651SQ001'] == 5 || $sql_data['296143X9X651SQ001'] == 6) {
                        $screen_text1 = "<li style='color:red'>" . "You spend too much time watching television which is linked with developing bad food habits and inactivity. Reduce this." . "</li>";
                    } elseif ($sql_data['296143X9X651SQ001'] == 1) {
                        $screen_text1 = "<li>" . "Good that you do not watch too much television. It can help in maintaining an active lifestyle." . "</li>";
                    } elseif ($sql_data['296143X9X651SQ001'] == 2) {
                        $screen_text1 = "<li>" . "Good that you do not watch too much television. It can help in maintaining an active lifestyle." . "</li>";
                    }else{
						$screen_text1 = "<li>" . "Good that you do not watch too much television. It can help in maintaining an active lifestyle." . "</li>";
					}
					*/

                    //Browsing internet for recreation, playing games on computer, tabs, smart phones etc.
					/*
                    if ($sql_data['296143X9X651SQ002'] == 3) {
                        $screen_text2 = "<li>" . "Keep a check on your screen time. Spending too much time on computer, tab or smart phone is linked with inactivity. Also prefer outdoor activities/games, if possible." . "</li>";
                    } elseif ($sql_data['296143X9X651SQ002'] == 4 || $sql_data['296143X9X651SQ002'] == 5 || $sql_data['296143X9X651SQ002'] == 6) {
                        $screen_text2 = "<li>" . "You spend too much time on computer, tab or smart phone, which is linked with inactivity. Try to limit this and prefer outdoor activities/games, if possible." . "</li>";
                    }else{
					$screen_text2 = "<li>" . "Keep a check on your screen time. Spending too much time on computer, tab or smart phone is linked with inactivity. Also prefer outdoor activities/games, if possible." . "</li>";	
					} */
                    ?>
                    <ul>
                    <?php //echo $screen_text1; ?> <?php// echo $screen_text2; ?>
                    </ul>
					<!--
                </div>
                <div class="report-detail page-break-before">
				-->
                   <h3>Food Section Question</h3>
                    <figure><img src="images/food.png"> </figure>
                    <p>
                    <?php
					/*
                    if ($sql_data['296143X9X654'] == 1) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Be more active, specifically if you are overweight or obese.";
                    } elseif ($sql_data['296143X9X654'] == 2) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Good that you are active. Maintain this.";
                    } elseif ($sql_data['296143X9X654'] == 3) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    }*/
					 $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    ?>
                    <?php echo $phy_act_text; ?>
					</p>
					
					
					   <h3>Land Section Question</h3>
                    <figure><img src="images/land.png"> </figure>
                    <p>
                    <?php
					/*
                    if ($sql_data['296143X9X654'] == 1) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Be more active, specifically if you are overweight or obese.";
                    } elseif ($sql_data['296143X9X654'] == 2) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Good that you are active. Maintain this.";
                    } elseif ($sql_data['296143X9X654'] == 3) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    }*/
					 $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    ?>
                    <?php echo $phy_act_text; ?>
					</p>
					
					
					   <h3>Water Section Question</h3>
                    <figure><img src="images/water.png"> </figure>
                    <p>
                    <?php
					/*
                    if ($sql_data['296143X9X654'] == 1) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Be more active, specifically if you are overweight or obese.";
                    } elseif ($sql_data['296143X9X654'] == 2) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Good that you are active. Maintain this.";
                    } elseif ($sql_data['296143X9X654'] == 3) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    }*/
					 $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    ?>
                    <?php echo $phy_act_text; ?>
					</p>
					
					<h3>Waste Section Question</h3>
                    <figure><img src="images/waste.png"> </figure>
                    <p>
                    <?php
					/*
                    if ($sql_data['296143X9X654'] == 1) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Be more active, specifically if you are overweight or obese.";
                    } elseif ($sql_data['296143X9X654'] == 2) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Good that you are active. Maintain this.";
                    } elseif ($sql_data['296143X9X654'] == 3) {
                        $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    }*/
					 $phy_act_text = "Being physically active helps in growth and maintaining energy balance. Eat well to maintain health while being vigourously active physically.";
                    ?>
                    <?php echo $phy_act_text; ?>
					</p>
					
					
                </div>
                       
        </div>
    </body>
</html>
