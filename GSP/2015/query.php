<?php
include('website_db.php');

$query1 = mysql_query("select * from lime_tokens_266617 as ltok join lime_survey_266617 as lsur ON ltok.token=lsur.token WHERE `submitdate` != 'NULL'");
//echo $count = mysql_num_rows($query1);
//die();

$vari = array(1810,196,237,2180,261,2238,1871,1883,1893,1894,1895,1896,1900,1904,2197,165,2217,176,2032,2037,2143,2041,2125,2042,2074,2076,2115);
//print_r($vari);



//$vari = $data_array['q_number'];



while($query = mysql_fetch_array($query1)){
$data_array = mysql_fetch_array(mysql_query("select * from lime_survey_266617 where token='".$query['token']."'"));

$school_name_original = $data_array['266617X34X1590'];
$school_name = addslashes($school_name_original);



$token = $data_array['token'];
if(in_array(1810,$vari)) // LAND CHAPTER QUESTION
{
    $score = 0;
    $group_id = 7;
    $question_number = 1810;
                                   
    $total_site_area = $data_array['266617X7X1810SQ009_SQ002'];
                                           
    $total_green_cover_area = $data_array['266617X7X1810SQ002_SQ002'] + $data_array['266617X7X1810SQ003_SQ002'] + $data_array['266617X7X1810SQ006_SQ002']; //Green landscaped area on-ground + Green cover on terrace/ balconies 
    
    $first_cal = ($total_green_cover_area/$total_site_area)*100 ;
    $required_green_area = $first_cal;
    
    if($first_cal > 32.99)
    {
        $score1810 = 5;
    }
    else
    {
        
        $calculation = $total_site_area*0.33;
        $Lowpoints = ($total_green_cover_area/$calculation)*5;
        $score1810 = $Lowpoints;
        
        //$score = ($total_site_area/$total_green_cover_area)*5/$required_green_area;
    }
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1810 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1810."' WHERE `question_id`=1810 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1810."'");
    }
}

if(in_array(196,$vari)) // LAND CHAPTER QUESTION
{
    $group_id = 7;
    $question_number = 196;
    $answer196 = $data_array['266617X7X196'];
    if($answer196 == "Y")
    {
    $score196 = 0;    
    }
    elseif($answer196 == "N")
    {
    $score196 = 1;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=196 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score196."' WHERE `question_id`=196 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score196."'");
    }
}


//Energy Section
if(in_array(2180,$vari)) 
{
    $score2180 = 0;
    $group_id = 8;
    $question_number = 2180;
    $total_mj = $data_array['266617X8X2180SQ013_SQ002']; 
    $answer1 = $data_array['266617X8X2180SQ001_SQ002'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    
    $per_day = $total_mj/30;
    $per_capita = $per_day/$total_population;
    
    
    //Per Capita Per day Energy Consumption Calculation Which for 1 Point
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 46.2;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
        
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 49.8;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
        
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 24.6;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
        
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 48;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
        
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 46.2;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
        
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 49.8;
        if($per_capita < $recomended_load || $per_capita == $recomended_load)
        {
           $additional_points = 1;
        }
    }
       
    // Calculation for source of energy which is max 5 points 
    $points1 = ($answer1/$total_mj) * 2.5;
    
    $answer2 = $data_array['266617X8X2180SQ002_SQ002'];
    $points2 = ($answer2/$total_mj) * 1.67;
    
    $answer3 = $data_array['266617X8X2180SQ003_SQ002'];
    $points3 = ($answer3/$total_mj) * 0.83;
    
    $answer4 = $data_array['266617X8X2180SQ004_SQ002'];
    $points4 = ($answer4/$total_mj) * 3.33;
    
    $answer5 = $data_array['266617X8X2180SQ005_SQ002'];
    $points5 = ($answer5/$total_mj) * 0.83;
    
    $answer6 = $data_array['266617X8X2180SQ006_SQ002'];
    $points6 = ($answer6/$total_mj) * 0.83;
    
    $answer7 = $data_array['266617X8X2180SQ007_SQ002'];
    $points7 = ($answer7/$total_mj) * 3.33;
    
    $answer8 = $data_array['266617X8X2180SQ008_SQ002'];
    $points8 = ($answer8/$total_mj) * 5;
    
    $answer9 = $data_array['266617X8X2180SQ009_SQ002'];
    $points9 = ($answer9/$total_mj) * 5;
    
    $answer10 = $data_array['266617X8X2180SQ010_SQ002'];
    $points10 = ($answer10/$total_mj) * 5;
    
    $answer11 = $data_array['266617X8X2180SQ011_SQ002'];
    $points11 = ($answer11/$total_mj) * 3.33;
    
    $fscore = $points1 + $points2 + $points3 + $points4 + $points5 + $points6 + $points7 + $points8 + $points9 + $points10 + $points11;
    
    //$score2180 = $fscore + $additional_points;
    if(($fscore > 5) || ($fscore == 5))
    {
        $score2180 = $additional_points + 5;
    }
    else
    {
        $score2180 = $fscore + $additional_points;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2180 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2180."' WHERE `question_id`=2180 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2180."'");
    }
}

if(in_array(261,$vari))
{
    $score261 = 0;   
    $group_id = 8;
    $question_number = 261;
    $answer261 = $data_array['266617X8X261'];
    if($answer261 == "Y")
    {
    $score261 = 1;    
    }
    elseif($answer261 == "N")
    {
    $score261 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=261 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score261."' WHERE `question_id`=261 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score261."'");
    }
}

if(in_array(2238,$vari)) // FOOD CHAPTER QUESTION
{
    $score2238 = 0;
    $group_id = 36;
    $question_number = 2238;
    $answer261 = $data_array['266617X36X2238'];
    if($answer261 == "Y")
    {
        if(($data_array['266617X36X2239SQ001_SQ001'] != "" && $data_array['266617X36X2239SQ001_SQ001'] != 0) || ($data_array['266617X36X2239SQ002_SQ001'] != "" && $data_array['266617X36X2239SQ002_SQ001'] != 0) || ($data_array['266617X36X2239SQ003_SQ001'] != "" && $data_array['266617X36X2239SQ003_SQ001'] != 0) || ($data_array['266617X36X2239SQ004_SQ001'] != "" && $data_array['266617X36X2239SQ004_SQ001'] != 0) || ($data_array['266617X36X2239SQ005_SQ001'] != "" && $data_array['266617X36X2239SQ005_SQ001'] != 0) || ($data_array['266617X36X2239SQ006_SQ001'] != "" && $data_array['266617X36X2239SQ006_SQ001'] != 0))
        {
            $score2238 = 0;
        }
        else 
        {
            $score2238 = 0;
        }
    }
    elseif($answer261 == "N")
    {
    $score2238 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2238 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2238."' WHERE `question_id`=2238 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2238."'");
    }
}
if(in_array(1871,$vari)) // FOOD CHAPTER QUESTION
{
   $score1871 = 0;
   $for_chk_values = $data_array['266617X36X1871SQ001_SQ002'] + $data_array['266617X36X1871SQ002_SQ002'] + $data_array['266617X36X1871SQ003_SQ002'] + $data_array['266617X36X1871SQ004_SQ002'] + $data_array['266617X36X1871SQ005_SQ002'] + $data_array['266617X36X1871SQ006_SQ002'] + $data_array['266617X36X1871SQ007_SQ002'] + $data_array['266617X36X1871SQ008_SQ002'] + $data_array['266617X36X1871SQ009_SQ002']; 
   if($for_chk_values != 0)
   {
    $score1871 = 0;   
   }
   else
   {
    $score1871 = 2;
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1871 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1871."' WHERE `question_id`=1871 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1871."'");
    }
   } 
   
}



if(in_array(1883,$vari)) // WATER CHAPTER QUESTION
{
    $score1883 = 0;
    $group_id = 37;
    $question_number = 1883;
    $answer1883 = $data_array['266617X37X1883'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    //(liters per capita per day)
    $lpcd = $answer1883/$total_population; 
    
    $stype1 = $data_array['266617X34X1608SQ001'];
    $stype2 = $data_array['266617X34X1608SQ002'];
    $stype3 = $data_array['266617X34X1608SQ003'];
    
    $t = 0;
    $srch_term = "";
    if(($stype1 != "") && ($stype2 == "") && ($stype3 == ""))
    {
        $start_range = 13;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
    else if(($stype1 == "") && ($stype2 != "") && ($stype3 == ""))
    {
        $start_range = 17;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
    else if(($stype1 == "") && ($stype2 == "") && ($stype3 != ""))
    {
        $start_range = 125;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
    
    else if(($stype1 != "") && ($stype2 != "") && ($stype3 == ""))
    {
        $start_range = 17;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
    
    else if(($stype1 != "") && ($stype2 == "") && ($stype3 != ""))
    {
        $start_range = 50;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
    
    else if(($stype1 == "") && ($stype2 != "") && ($stype1 != ""))
    {
        $start_range = 50;
        if($lpcd > $start_range || $lpcd == $start_range)
        {
           $score1883 = 2; 
        }
    }
   
   // $sql_range_query = mysql_fetch_array(mysql_query("select `start_range`, `end_range` from `standard_consumption_of_water` WHERE `school_type`='".$srch_term."'"));
   // $start_range = $sql_range_query['start_range'];
   // $end_range = $sql_range_query['end_range'];
        
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1883 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1883."' WHERE `question_id`=1883 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1883."'");
    }
}

if(in_array(1893,$vari)) // How many drinking water taps do you have? 
{
    $recomended_load = 0;
    $score1893 = 0;
    $group_id = 37;
    $question_number = 1893;
    $drinking_taps = $data_array['266617X37X1893'];
    $ablution_taps = $data_array['266617X37X1894'];
    $urinal_taps = $data_array['266617X37X1895'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    $load = $total_population/$drinking_taps;
    
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 50;
    }
    
    // Calculation according the school type
    
    if($load > $recomended_load)
    {
        $score1893 = 0;
    }
    else
    {
        $score1893 = 1;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1893 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1893."' WHERE `question_id`=1893 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1893."'");
    }
}

if(in_array(1894,$vari)) //  How many ablution taps (taps used for washing hands only) do you have?
{
    $score1894 = 0;
    $group_id = 37;
    $question_number = 1894;
    $ablution_taps = $data_array['266617X37X1894'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    $load = $total_population/$ablution_taps;
    
    if($load > 50)
    {
        $score1894 = 0;
    }
    else
    {
        $score1894 = 1;
    }
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1894 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1894."' WHERE `question_id`=1894 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1894."'");
    }
}

if(in_array(1895,$vari)) // How many urinals (strictly used for urination only) do you have? 
{
    $score1895 = 0;
    $recomended_load = 0;
    $group_id = 37;
    $question_number = 1895;
    $urinal_taps = $data_array['266617X37X1895'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    $load = $total_population/$urinal_taps;
    
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 40;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 30;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 50;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 35;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 50;
    }
    if($load > $recomended_load)
    {
        $score1895 = 0;
    }
    else
    {
        $score1895 = 1;
    }
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1895 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1895."' WHERE `question_id`=1895 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1895."'");
    }
}
if(in_array(1896,$vari)) //How many water closets (used for defecation and urination) do you have?
{
    $score1896 = 0;
    $group_id = 37;
    $question_number = 1896;
    $wc_defecation_taps = $data_array['266617X37X1896SQ005_SQ004'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    $load = $total_population/$wc_defecation_taps;
    
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 45;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 35;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 25;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "")
    {
        $recomended_load = 35;
    }
    if($data_array['266617X34X1608SQ001'] == "" && $data_array['266617X34X1608SQ002'] == "Y" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 30;
    }
    if($data_array['266617X34X1608SQ001'] == "Y" && $data_array['266617X34X1608SQ002'] == "" && $data_array['266617X34X1608SQ003'] == "Y")
    {
        $recomended_load = 40;
    }
    
    if($load > $recomended_load)
    {
        $score1896 = 0;
    }
    else
    {
        $score1896 = 1;
    }
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1896 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1896."' WHERE `question_id`=1896 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1896."'");
    }
}
if(in_array(1900,$vari))
{
    $score1900 = 0;  
    $group_id = 37;
    $question_number = 1900;
    $answer1900 = $data_array['266617X37X1900'];
    if($answer1900 == "Y")
    {
    $score1900 = 1;    
    }
    elseif($answer1900 == "N")
    {
    $score1900 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1900 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1900."' WHERE `question_id`=1900 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1900."'");
    }
}

if(in_array(1904,$vari))
{
    $score1904 = 0;
    $group_id = 37;
    $question_number = 1904;
    $answer1904 = $data_array['266617X37X1904'];
    if($answer1904 == "Y")
    {
    $score1904 = 1;    
    }
    elseif($answer1904 == "N")
    {
    $score1904 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=1904 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score1904."' WHERE `question_id`=1904 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score1904."'");
    }
}





//Calculation for AIR Chapter


//if(in_array(164,$vari))
//{
//    $score164 = 0;
//    $group_id = 4;
//    $question_number = 164;
//    $answer164 = $data_array['266617X4X164'];
//    if($answer164 == "A1")
//    {
//    $score164 = 0;    
//    }
//    elseif($answer164 == "A2")
//    {
//    $score164 = 0;    
//    }
//    elseif($answer164 == "A3")
//    {
//    $score164 = 0;    
//    }
//    elseif($answer164 == "A4")
//    {
//    $score164 = 0;    
//    }
//    
//    $sql_check = mysql_query("select * from `calculation` where `question_id`=164 AND `token`='".$token."'");
//    if(mysql_num_rows($sql_check)>0)
//    {
//    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score164."' WHERE `question_id`=164 AND `token`='".$token."'");    
//    }
//    else
//    {
//    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score164."'");
//    }
//}

// Q. 2
if(in_array(2197,$vari))
{
    $score2197 = 0;
    $group_id = 4;
    $question_number = 2197;
    $answer2197_1 = number_format($data_array['266617X4X2197SQ011_SQ002'],2); //X = Area of floor (LxB)
    $answer2197_2 = number_format($data_array['266617X4X2197SQ011_SQ003'],2); //Y = Area of openings (LxH)
    $answer2197_3 = ($answer2197_2/$answer2197_1)*100; //window area to floor ratio
    //Concept: If $answer2197_3 is equal to or more than five per cent of $answer2197_1, your school gets full points (five points)
    
    //$total_floor_area = $data_array['266617X4X2197SQ011_SQ002'];
    if($answer2197_3 >= 5)
    {
       $score2197 = 3; 
    }
    else 
    {
      $score2197 = 0;   
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2197 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2197."' WHERE `question_id`=2197 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2197."'");
    }
}

// Q. 3(a)
if($data_array['266617X4X164'] == "A3" || $data_array['266617X4X164'] == "A4")
{
    if(in_array(165,$vari))
    {
    $score165 = 0;
    $group_id = 4;
    $question_number = 165;
    $total_vehicles = $data_array['266617X4X165SQ001_SQ003'];
    $vehicles_more_5_years = $data_array['266617X4X165SQ002_SQ003'];
    $total_vehicles_use_ac = $data_array['266617X4X165SQ004_SQ003'];
    $total_vehicles_non_ac = $total_vehicles - $total_vehicles_use_ac;
    $puc_done_total = $data_array['266617X4X165SQ005_SQ003'];
    $puc_not_done_total = $total_vehicles - $puc_done_total;
    //$vehicles_with_parking = $data_array['266617X4X165SQ006_SQ003'];
    //$vehicles_without_parking = $total_vehicles - $vehicles_with_parking;
    
    $score1 = 0;
    $score2 = 0;
    $score3 = 0;
    $score4 = 0;
    if($total_vehicles !=0)
    {
    //No. of Vehicles less than five year
    $vehicles_less_5_years = $total_vehicles - $vehicles_more_5_years;
    $points = ($vehicles_less_5_years/$total_vehicles)*1; 
    if($points > 1 || $points == 1)
    {
        $score1=1;  //Score for vehicles
    }
    else
    {
        $score1 = $points;   //Score for vehicles
    }
    
    //Use of Air Conditioning
    if($total_vehicles == $total_vehicles_use_ac)
    {
        $score2 = 0;
    }
    else
    {
        $score2 = ($total_vehicles_non_ac/$total_vehicles)*1;
    }
    
    //Pollution Under Control Certificate
    if($puc_done_total == 0)
    {
        $score3 = 0;
    }
    elseif($puc_done_total == $total_vehicles)
    {
        $score3 = 1;
    }
    elseif($puc_done_total != 0 && $puc_done_total != $total_vehicles)
    {
        $score3 = ($puc_done_total/$total_vehicles)*1;
    }
   
 }
    $score165 = $score1 + $score2 + $score3;
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=165 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score165."' WHERE `question_id`=165 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score165."'");
    }
}
}

// Q. 4
if(in_array(2217,$vari))
{
    $score2217 = 0;
    $group_id = 4;
    $question_number = 2217;
    $answer1904 = $data_array['266617X37X1904'];
    //Diesel        (0 points) –   3/9 x 0= 0 point
    //Petrol        (0.5 point) –  2/9 x 0.5= 0.11 point
    //LPG           (1 point) –    1/9 x 1= 0.11 point
    //CNG           (2 points) –   2/9 x 2= 0.44 point
    
    $total_diesel = $data_array['266617X4X2217SQ004_SQ001'];
    $total_petrol = $data_array['266617X4X2217SQ004_SQ002'];
    $total_lpg = $data_array['266617X4X2217SQ004_SQ003'];
    $total_cng = $data_array['266617X4X2217SQ004_SQ004'];
    
    $total_vehicles = $total_diesel + $total_petrol + $total_lpg + $total_cng;
    
    $points_diesel = ($total_diesel/$total_vehicles)*0;
    $points_petrol = ($total_petrol/$total_vehicles)*0.25;
    $points_lpg = ($total_lpg/$total_vehicles)*0.5;
    $points_cng = ($total_cng/$total_vehicles)*1;
    
    if($total_vehicles == $total_diesel)
    {
       $score2217 = 0;    
    }
    if($total_vehicles == $total_cng)
    {
       $score2217 = 1;    
    }
    if($total_vehicles != $total_diesel && $total_vehicles != $total_cng)
    {
    $score2217 = $points_diesel + $points_petrol + $points_lpg + $points_cng;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2217 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2217."' WHERE `question_id`=2217 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2217."'");
    }
}

// Q. 5
if(in_array(176,$vari))
{
    $score176 = 0;
    $group_id = 4;
    $question_number = 176;
    $total_population = $data_array['266617X4X176SQ004_SQ004'];
    // Motorized
    $total_population_smv = $data_array['266617X4X176SQ001_SQ004'] + $data_array['266617X4X176SQ002_SQ004'] + $data_array['266617X4X176SQ003_SQ004'] + $data_array['266617X4X176SQ0012_SQ004'] + $data_array['266617X4X176SQ005_SQ004'] + $data_array['266617X4X176SQ006_SQ004'];
    //Non polluting mode
    $total_population_npm = $data_array['266617X4X176SQ009_SQ004'] + $data_array['266617X4X176SQ010_SQ004'] + $data_array['266617X4X176SQ011_SQ004'];
    

    //Private vehicles population
    $private_veh_population = $data_array['266617X4X176SQ007_SQ004'] + $data_array['266617X4X176SQ008_SQ004'];
    
    $comp_pop = $total_population_smv + $total_population_npm; 
   
    $score1 = ($total_population_smv/$total_population)*2.5;
    $score2 = ($total_population_npm/$total_population)*2.5;
    $score176 = $score1 + $score2;
    
    if($total_population == $comp_pop)
    {
        $score176 = 5;
    }
    if($total_population == $private_veh_population)
    {
        $score176 = 0;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=176 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score176."' WHERE `question_id`=176 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score176."'");
    }
}



//Waste Calculations
if(in_array(2032,$vari))
{
    $score2032 = 0;   
    $group_id = 38;
    $question_number = 2032;
    $answer2032 = $data_array['266617X38X2032'];
    if($answer2032 == "Y")
    {
    $score2032 = 5;    
    }
    elseif($answer2032 == "N")
    {
    $score2032 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2032 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2032."' WHERE `question_id`=2032 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2032."'");
    }
}

if($data_array['266617X38X2032'] == "Y")
{
if(in_array(2037,$vari))
 {
    $score2037 = 0;
    $bonusscore2037 = 0;
    $group_id = 38;
    $question_number = 2037;
    $answer2037 = $data_array['266617X38X2037SQ001'];
    if($answer2037 == "Y")
    {
    $bonusscore2037 = 5;    
    }
    else
    {
    $bonusscore2037 = 0;    
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2037 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2037."', `bonus`='".$bonusscore2037."' WHERE `question_id`=2037 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2037."', `bonus`='".$bonusscore2037."'");
    }
}
}

if(in_array(2143,$vari))
{
    $score2143 = 0;
    $bonus_score2143 = 0;
    $group_id = 38;
    $question_number = 2143;
    $nobin = $data_array['266617X38X2143SQ011_SQ001'];
    $onebin = $data_array['266617X38X2143SQ011_SQ002'];
    $twobin = $data_array['266617X38X2143SQ011_SQ003'];
    $threebin = $data_array['266617X38X2143SQ011_SQ004'];
    
    $total_collecting_points = $onebin + $nobin + $twobin + $threebin;
    
    if($total_collecting_points == ($twobin + $threebin))
    {
        $score2143 = 10;
    }
    elseif($total_collecting_points == ($nobin + $onebin))
    {
        $score2143 = 0;
    }
    else
    {
        $score2143 = (($twobin + $threebin)/$total_collecting_points)*10;
    }
    
    if($threebin > 0)
    {
        $bonus_score2143 = 5; // Bonus score
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2143 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2143."' WHERE `question_id`=2143 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2143."', `bonus` = '".$bonus_score2143."'");
    }
}

//if(in_array(2041,$vari))
//{
//    $score2041 = 0;
//    $group_id = 38;
//    $question_number = 2041;
//    $total_generated_waste = $data_array['266617X38X2125SQ009_SQ001'];
//    $total_recycled_waste = $data_array['266617X38X2042SQ010_SQ001'];
//    
//    $half_of_total_generated_waste = $data_array['266617X38X2125SQ009_SQ001']/2;
//    
//    if($total_recycled_waste >= $half_of_total_generated_waste)
//    {
//        $score2041 = 30;
//    }
//    else
//    {
//        $score2041 = ($total_recycled_waste/$total_generated_waste)*30;
//    }
//    
//    
//    $sql_check = mysql_query("select * from `calculation` where `question_id`=2041 AND `token`='".$token."'");
//    if(mysql_num_rows($sql_check)>0)
//    {
//    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2041."' WHERE `question_id`=2041 AND `token`='".$token."'");    
//    }
//    else
//    {
//    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2041."'");
//    }
//}



if(in_array(2125,$vari)) //Determine the quantity of waste generated in your school. (in grams)
{
    $score2125 = 0;
    $bonus_score = 0;
    $group_id = 38;
    $question_number = 2125;
    $total_waste = $data_array['266617X38X2125SQ009_SQ001'];
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
    //$stype = $data_array['stype'];
    $standard = 0;
    //150 grams per person, per day (Day scholar); 
    //200 grams per person/ day (day boarding school)
    //350 grams per person, per day (Residential school)
    $per_day_waste_generation = $total_waste/30;
    $per_capita_waste_generation = $per_day_waste_generation/$total_population;
    
    
    $stype1 = $data_array['266617X34X1608SQ001'];
    $stype2 = $data_array['266617X34X1608SQ002'];
    $stype3 = $data_array['266617X34X1608SQ003'];
    
    $t = 0;
    $srch_term = "";
    if(($stype1 != "") && ($stype2 == "") && ($stype3 == ""))
    {
        $start_grams = 100;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    else if(($stype1 == "") && ($stype2 != "") && ($stype3 == ""))
    {
        $start_grams = 150;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    else if(($stype1 == "") && ($stype2 == "") && ($stype3 != ""))
    {
        $start_grams = 300;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    
    else if(($stype1 != "") && ($stype2 != "") && ($stype3 == ""))
    {
        $start_grams = 150;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    
    else if(($stype1 != "") && ($stype2 == "") && ($stype3 != ""))
    {
        $start_grams = 300;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    
    else if(($stype1 == "") && ($stype2 != "") && ($stype1 != ""))
    {
        $start_grams = 350;
        if($per_capita_waste_generation <= $start_grams)
        {
           $score2125 = 10; 
        }
        else
        {
           $score2125 = 0; 
        }
    }
    
    
//    
//    if($stype == "Day Scholar (6 hours)")
//    {
//        $standard = 150;
//    }
//    else if($stype == "Day Boarding (8 hours)")
//    {
//        $standard = 200;
//    }
//    else if($stype == "Residential (24 hours)")
//    {
//        $standard = 350;
//    }
//    $double_of_standard = $standard*2;
//    if($per_capita_waste_generation < $standard)
//    {
//        $score2125=10;
//        $bonus_score = 0;
//    }
//    elseif($per_capita_waste_generation == $double_of_standard)
//    {
//        $score2125 = 0;
//        $bonus_score = 0;
//    }
//    elseif($per_capita_waste_generation > $standard && $per_capita_waste_generation < $double_of_standard)
//    {
//        $score2125 = ($standard/$per_capita_waste_generation)*10;
//        $bonus_score = 0;
//    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2125 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2125."', `bonus` = '".$bonus_score."' WHERE `question_id`=2125 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2125."', `bonus` = '".$bonus_score."'");
    }
}

if($data_array['266617X38X2041'] == "Y")
{
if(in_array(2042,$vari))
{
    $score2042 = 0;
    $group_id = 38;
    $question_number = 2042;
    $total_waste_generated = $data_array['266617X38X2125SQ009_SQ001'];
    $total_waste_recycle = $data_array['266617X38X2042SQ010_SQ001'];
    $half_of_total_waste_generated = $total_waste_generated/2;
    $total_population = $data_array['266617X32X33SQ004_SQ003'];
     
    // Chk the percentage of recycled waste
    if($total_waste_recycle == $half_of_total_waste_generated || $total_waste_recycle > $half_of_total_waste_generated)
    {
        $score2042 = 30;
    }
    else
    {
        $score2042 = ($total_waste_recycle/$total_waste_generated)*30;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2042 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2042."', `bonus` = '".$bonus_score."' WHERE `question_id`=2042 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2042."', `bonus` = '".$bonus_score."'");
    }
}
}

if(in_array(2074,$vari))
{
    $bonus_score2074 = 0;
    $score2074 = 0;
    $group_id = 38;
    $question_number = 2074;
    $answer2074 = $data_array['266617X38X2074'];
    if($answer2074 == "Y")
    {
        $bonus_score2074 = 5;
        $score2074 = 0;
    }
    else
    {
        $bonus_score2074 = 0;
        $score2074 = 0;
    }
    
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2074 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2074."', `bonus` = '".$bonus_score2074."' WHERE `question_id`=2074 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2074."', `bonus` = '".$bonus_score2074."'");
    }
}
if(in_array(2076,$vari))
{
    $score2076 = 0;
    $bonus_score2076 = 0;
    $group_id = 38;
    $question_number = 2076;
    $answer2076 = $data_array['266617X38X2076'];
    if($answer2076 == "A1" || $answer2076 == "A4")
    {
        $score2076 = 0;
        $bonus_score2076 = 0;
    }
    elseif($answer2076 == "A2" || $answer2076 == "A3")
    {
        $score2076 = 5;
        $bonus_score2076 = 0;
    }
   
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2076 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2076."', `bonus` = '".$bonus_score2076."' WHERE `question_id`=2076 AND `token`='".$token."'");    
    }
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2076."', `bonus` = '".$bonus_score2076."'");
    }
}

if($data_array['266617X38X2114'] == "Y")
{
if(in_array(2115,$vari))
{
    $score2115 = 0;
    $bonus_score2115 = 0;
    $group_id = 38;
    $question_number = 2115;
    $answer2115 = $data_array['266617X38X2115'];
    if($answer2115 == "A1")
    {
        $score2115 = 0;
        $bonus_score2115 = 0;
    }
    else
    {
        $score2115 = 5;
        $bonus_score2115 = 0;
    }
   
    $sql_check = mysql_query("select * from `calculation` where `question_id`=2115 AND `token`='".$token."'");
    if(mysql_num_rows($sql_check)>0)
    {
    $sql = mysql_query("UPDATE `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `score`='".$score2115."', `bonus` = '".$bonus_score2115."' WHERE `question_id`=2115 AND `token`='".$token."'");    
    } 
    else
    {
    $sql = mysql_query("INSERT into `calculation` SET `school_name`='".$school_name."', `token`='".$token."', `section_id`='".$group_id."', `question_id`='".$question_number."', `score`='".$score2115."', `bonus` = '".$bonus_score2115."'");
    }
}
}

}