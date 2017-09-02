<?php $this->load->view('admin/survey/header'); ?>
<div class="container">
    <div class="content-form">

        <!--close log-nav-->
        <h1> <span class="school-name"><?php echo $school->name;
                ?></span></h1>
        <!--close progress-->

        <form>
            <div class="question multiple-short-txt" id="question1973">
                <input type="hidden" value="1973" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 1: Air Audit Team</h6>


            </span>
                    </label>

                    <div class="answer clearfix">


                        <div class="answer clearfix">
                            <h5>Teachers</h5>
                            <table border="1">
                                <tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
                                <?php echo (getFiled('Q1A1S1', $schoolUserID)
                                    !='') ? "<tr><td>1</td><td>Mr "
                                    .getFiled
                                    ('Q1A1S1',
                                        $schoolUserID): "";
                                ?> <?php echo (getFiled('Q1A1S3',
                                        $schoolUserID)
                                    !='') ? getFiled('Q1A1S3',
                                        $schoolUserID)."</td>": "";
                                ?><?php echo (getFiled('Q1A1S2', $schoolUserID)
                                    !='') ? "<td>".getFiled('Q1A1S2',
                                        $schoolUserID)."</td></tr>": "";
                                ?>

                                <?php echo (getFiled('Q1A2S1', $schoolUserID)
                                            !='') ? "<tr><td>1</td><td>Mr "
                                    .getFiled
                                    ('Q1A2S1',
                                            $schoolUserID): "";
                                        ?> <?php echo (getFiled('Q1A2S3',
                                                $schoolUserID)
                                            !='') ? getFiled('Q1A2S3',
                                            $schoolUserID)."</td>": "";
                                        ?><?php echo (getFiled('Q1A2S2', $schoolUserID)
                                            !='') ? "<td>".getFiled('Q1A2S2',
                                            $schoolUserID)."</td></tr>": "";
                                 ?>
                                <?php echo (getFiled('Q1A3S1', $schoolUserID)
                                    !='') ? "<tr><td>1</td><td>Mr "
                                    .getFiled
                                    ('Q1A3S1',
                                        $schoolUserID): "";
                                ?> <?php echo (getFiled('Q1A3S3',
                                        $schoolUserID)
                                    !='') ? getFiled('Q1A3S3',
                                        $schoolUserID)."</td>": "";
                                ?><?php echo (getFiled('Q1A3S2', $schoolUserID)
                                    !='') ? "<td>".getFiled('Q1A3S2',
                                        $schoolUserID)."</td></tr>": "";
                                ?>


                            </table>

                            <h5>Administrative staff</h5>
                            <table border="1">
                                <tr><th>Sno.</th><th>Name</th> <th>Email</th></tr>
                                <?php $i=1; while($i<5){ ?>
                                    <?php echo (getFiled('Q2A'.$i.'S1',
                                            $schoolUserID)
                                        !='') ? "<tr><td>".$i."</td><td>Mr "
                                        .getFiled
                                        ('Q2A'.$i.'S1',
                                            $schoolUserID): "";
                                    ?> <?php echo (getFiled('Q2A'.$i.'S3',
                                            $schoolUserID)
                                        !='') ? getFiled('Q2A'.$i.'S3',
                                            $schoolUserID)."</td>": "";
                                    ?><?php echo (getFiled('Q2A'.$i.'S2',
                                            $schoolUserID)
                                        !='') ? "<td>".getFiled('Q2A'.$i.'S2',
                                            $schoolUserID)."</td></tr>": "";
                                    ?>
                                <tr><td>1.</td><td>Anil kumar</td> <td>aruday2k5@gmail.com</td></tr>
                                <?php $i++; } ?>
                            </table>

                            <h5>Students</h5>
                            <table border="1">
                                <tr><th>Sno.</th><th>Name</th> <th>Email</th> <th>Grade/Class</th></tr>

                                <tr><td>1.</td><td>ACHYUT UPADHYAY</td> <td>RAMKANT1974V@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>2.</td><td>AMAN KUMAR PANDEY</td> <td>PANDEYAMAN26452@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>3.</td><td>CHAKSHU YADAV</td> <td>SINGH.RAJINDER17@YAHOO.COM</td><td>10</td></tr>
                                <tr><td>4.</td><td>KAPIL SINGH</td> <td>STAFFYEOBANO@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>5.</td><td>MUDASSAR JAVED</td> <td>JAVED.MUDASSAR07@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>6.</td><td>RISHABH AGGARWAL</td> <td>RISHABHAGGARWAL2002@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>7.</td><td>ROHIT KUMAR</td> <td>AKASHCHETAN075@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>8.</td><td>SANDEEP KUMAR</td> <td>SANDEEP.130601@GMAIL.COM</td><td>10</td></tr>
                                <tr><td>9.</td><td>YESH YADAV</td> <td>SINGH.RAJENDER17@YAHOO.COM</td><td>10</td></tr>
                                <tr><td>10.</td><td>RAHULKANT KUMAR</td> <td>RAHULKANTKUMAR@GMAIL.COM</td><td>10</td></tr>


                            </table>

                        </div>



                    </div>
                </div>
            </div>


            <div class="question boilerplate" id="question1977">
                <input type="hidden" value="1977" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 2: Are the rooms in your school well-ventilated?</h6>
<ol>
	<li>
		For this exercise, classrooms that are occupied by students regularly should be considered. Do not add laboratories or the auditorium.</li>
	<li>
		Openings: ventilators or windows of any size can be opened on regular basis.</li>
	<li>
		This exercise should be done by schools with centrally air conditioning system also.</li>
	<li>
		The exercise should be carried out for ten classrooms only. Sample size should have representation from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and higher secondary. If your school is up to Standard X only, then, at your discretion,you can add a class to any tier. In case your school has less than 10 classrooms, include all.</li>
	<li>
		This activity is for all schools (non-air-conditioned buildings as well as air-conditioned buildings).&nbsp;</li>
</ol>

            </span>
                    </label>

                    <div class="answer clearfix">



                        <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1977"></span></div> -->

                        <div class="answer clearfix">
                            <input type="hidden" value="" id="answer266617X4X1977" name="266617X4X1977">
                        </div>



                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1"> <span class="cube">1</span> How many classrooms does your school have? </label>
                <p class="formanswertext">39</p>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> <span class="cube">2</span> Window-floor ratio of classrooms in the school.</label>

                <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. " class="question subquestions-list questions-list   ">
                    <colgroup class="col-responses">

                        <col width="20%" class="answertext">
                        <col width="15%" class="odd">
                        <col width="15%" class="even">
                        <col width="15%" class="odd">
                        <col width="15%" class="even">
                    </colgroup>

                    <thead>
                    <tr class="dontread">
                        <td width="20%">&nbsp;</td>
                        <th class="answertext">Details of the classroom (e.g. Class II section b)</th>
                        <th class="answertext">X = Area of floor (LxB)</th>
                        <th class="answertext">Y = Area of openings (LxH)</th>
                        <th class="answertext">Percentage of the floor area being ventilated (y/x x 100)</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ001">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ001" name="java266617X4X2197SQ001" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ001_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ001_SQ001" name="java266617X4X2197SQ001_SQ001" class="form-control">
                            <input type="text" value="2" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ001" name="266617X4X2197SQ001_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ001_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ001_SQ002" name="java266617X4X2197SQ001_SQ002" class="form-control">
                            <input type="text" value="47.125" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ002" name="266617X4X2197SQ001_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ001_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ001_SQ003" name="java266617X4X2197SQ001_SQ003" class="form-control">
                            <input type="text" value="14.335" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ003" name="266617X4X2197SQ001_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ001_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ001_SQ004" name="java266617X4X2197SQ001_SQ004" class="form-control">
                            <input type="text" value="30.42" size="20" class="form-control" id="answer266617X4X2197SQ001_SQ004" name="266617X4X2197SQ001_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ002">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ002" name="java266617X4X2197SQ002" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ002_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ002_SQ001" name="java266617X4X2197SQ002_SQ001" class="form-control">
                            <input type="text" value="3" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ001" name="266617X4X2197SQ002_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ002_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ002_SQ002" name="java266617X4X2197SQ002_SQ002" class="form-control">
                            <input type="text" value="47.125" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ002" name="266617X4X2197SQ002_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ002_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ002_SQ003" name="java266617X4X2197SQ002_SQ003" class="form-control">
                            <input type="text" value="14.335" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ003" name="266617X4X2197SQ002_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ002_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ002_SQ004" name="java266617X4X2197SQ002_SQ004" class="form-control">
                            <input type="text" value="30.42" size="20" class="form-control" id="answer266617X4X2197SQ002_SQ004" name="266617X4X2197SQ002_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ003">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ003" name="java266617X4X2197SQ003" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ003_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ003_SQ001" name="java266617X4X2197SQ003_SQ001" class="form-control">
                            <input type="text" value="4" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ001" name="266617X4X2197SQ003_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ003_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ003_SQ002" name="java266617X4X2197SQ003_SQ002" class="form-control">
                            <input type="text" value="47.125" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ002" name="266617X4X2197SQ003_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ003_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ003_SQ003" name="java266617X4X2197SQ003_SQ003" class="form-control">
                            <input type="text" value="14.335" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ003" name="266617X4X2197SQ003_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ003_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ003_SQ004" name="java266617X4X2197SQ003_SQ004" class="form-control">
                            <input type="text" value="30.42" size="20" class="form-control" id="answer266617X4X2197SQ003_SQ004" name="266617X4X2197SQ003_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ004">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ004" name="java266617X4X2197SQ004" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ004_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ004_SQ001" name="java266617X4X2197SQ004_SQ001" class="form-control">
                            <input type="text" value="5" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ001" name="266617X4X2197SQ004_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ004_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ004_SQ002" name="java266617X4X2197SQ004_SQ002" class="form-control">
                            <input type="text" value="47.125" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ002" name="266617X4X2197SQ004_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ004_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ004_SQ003" name="java266617X4X2197SQ004_SQ003" class="form-control">
                            <input type="text" value="14.335" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ003" name="266617X4X2197SQ004_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ004_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ004_SQ004" name="java266617X4X2197SQ004_SQ004" class="form-control">
                            <input type="text" value="30.42" size="20" class="form-control" id="answer266617X4X2197SQ004_SQ004" name="266617X4X2197SQ004_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ005">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ005" name="java266617X4X2197SQ005" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ005_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ005_SQ001" name="java266617X4X2197SQ005_SQ001" class="form-control">
                            <input type="text" value="6" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ001" name="266617X4X2197SQ005_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ005_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ005_SQ002" name="java266617X4X2197SQ005_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ002" name="266617X4X2197SQ005_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ005_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ005_SQ003" name="java266617X4X2197SQ005_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ003" name="266617X4X2197SQ005_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ005_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ005_SQ004" name="java266617X4X2197SQ005_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ005_SQ004" name="266617X4X2197SQ005_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ006">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ006" name="java266617X4X2197SQ006" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ006_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ006_SQ001" name="java266617X4X2197SQ006_SQ001" class="form-control">
                            <input type="text" value="7" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ001" name="266617X4X2197SQ006_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ006_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ006_SQ002" name="java266617X4X2197SQ006_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ002" name="266617X4X2197SQ006_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ006_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ006_SQ003" name="java266617X4X2197SQ006_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ003" name="266617X4X2197SQ006_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ006_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ006_SQ004" name="java266617X4X2197SQ006_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ006_SQ004" name="266617X4X2197SQ006_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ007">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ007" name="java266617X4X2197SQ007" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ007_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ007_SQ001" name="java266617X4X2197SQ007_SQ001" class="form-control">
                            <input type="text" value="9" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ001" name="266617X4X2197SQ007_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ007_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ007_SQ002" name="java266617X4X2197SQ007_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ002" name="266617X4X2197SQ007_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ007_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ007_SQ003" name="java266617X4X2197SQ007_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ003" name="266617X4X2197SQ007_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ007_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ007_SQ004" name="java266617X4X2197SQ007_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ007_SQ004" name="266617X4X2197SQ007_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ008">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ008" name="java266617X4X2197SQ008" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ008_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ008_SQ001" name="java266617X4X2197SQ008_SQ001" class="form-control">
                            <input type="text" value="10" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ001" name="266617X4X2197SQ008_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ008_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ008_SQ002" name="java266617X4X2197SQ008_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ002" name="266617X4X2197SQ008_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ008_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ008_SQ003" name="java266617X4X2197SQ008_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ003" name="266617X4X2197SQ008_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ008_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ008_SQ004" name="java266617X4X2197SQ008_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ008_SQ004" name="266617X4X2197SQ008_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ009">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ009" name="java266617X4X2197SQ009" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ009_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ009_SQ001" name="java266617X4X2197SQ009_SQ001" class="form-control">
                            <input type="text" value="11" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ001" name="266617X4X2197SQ009_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ009_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ009_SQ002" name="java266617X4X2197SQ009_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ002" name="266617X4X2197SQ009_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ009_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ009_SQ003" name="java266617X4X2197SQ009_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ003" name="266617X4X2197SQ009_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ009_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ009_SQ004" name="java266617X4X2197SQ009_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ009_SQ004" name="266617X4X2197SQ009_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array1 subquestion-list questions-list" id="javatbd266617X4X2197SQ010">
                        <th class="answertext">

                            <input type="hidden" value="" id="java266617X4X2197SQ010" name="java266617X4X2197SQ010" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ010_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ010_SQ001" name="java266617X4X2197SQ010_SQ001" class="form-control">
                            <input type="text" value="12" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ001" name="266617X4X2197SQ010_SQ001" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ010_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ010_SQ002" name="java266617X4X2197SQ010_SQ002" class="form-control">
                            <input type="text" value="42.63" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ002" name="266617X4X2197SQ010_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ010_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ010_SQ003" name="java266617X4X2197SQ010_SQ003" class="form-control">
                            <input type="text" value="10.05" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ003" name="266617X4X2197SQ010_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ010_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ010_SQ004" name="java266617X4X2197SQ010_SQ004" class="form-control">
                            <input type="text" value="23.57" size="20" class="form-control" id="answer266617X4X2197SQ010_SQ004" name="266617X4X2197SQ010_SQ004" readonly="">
                        </td>

                    </tr>


                    <tr class="array2 subquestion-list questions-list" id="javatbd266617X4X2197SQ011">
                        <th class="answertext">
                            Total
                            <input type="hidden" value="" id="java266617X4X2197SQ011" name="java266617X4X2197SQ011" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 answer-item text-item">
                            <label for="answer266617X4X2197SQ011_SQ001" class="hide read">Details of the classroom (e.g. Class II section b)</label>
                            <input type="hidden" id="java266617X4X2197SQ011_SQ001" name="java266617X4X2197SQ011_SQ001" class="form-control">
                            <input type="text" value="" size="20" class="empty form-control" id="answer266617X4X2197SQ011_SQ001" name="266617X4X2197SQ011_SQ001" style="display: none;">
                        </td>
                        <td class="answer_cell_00SQ002 answer-item text-item">
                            <label for="answer266617X4X2197SQ011_SQ002" class="hide read">X = Area of floor (LxB)</label>
                            <input type="hidden" id="java266617X4X2197SQ011_SQ002" name="java266617X4X2197SQ011_SQ002" class="form-control">
                            <input type="text" value="444.28" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ002" name="266617X4X2197SQ011_SQ002" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 answer-item text-item">
                            <label for="answer266617X4X2197SQ011_SQ003" class="hide read">Y = Area of openings (LxH)</label>
                            <input type="hidden" id="java266617X4X2197SQ011_SQ003" name="java266617X4X2197SQ011_SQ003" class="form-control">
                            <input type="text" value="117.64" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ003" name="266617X4X2197SQ011_SQ003" readonly="">
                        </td>
                        <td class="answer_cell_00SQ004 answer-item text-item">
                            <label for="answer266617X4X2197SQ011_SQ004" class="hide read">Percentage of the floor area being ventilated (y/x x 100)</label>
                            <input type="hidden" id="java266617X4X2197SQ011_SQ004" name="java266617X4X2197SQ011_SQ004" class="form-control">
                            <input type="text" value="263.10" size="20" class="form-control" id="answer266617X4X2197SQ011_SQ004" name="266617X4X2197SQ011_SQ004" style="display: none;" readonly="">
                        </td>

                    </tr>
                    </tbody>
                </table>


            </div>


            <div class="question boilerplate" id="question1978">
                <input type="hidden" value="1978" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task &nbsp;3: How eco-friendly are the vehicles in your school?</h6>
<p>
	In this section, you will maintain a record of vehicles used by your school. Two critical parameters indicate if your vehicles are eco-friendly - fuel used by each vehicle and age of the vehicle.</p>

            </span>
                    </label>

                    <div class="answer clearfix">



                        <div class="answer clearfix">
                            <input type="hidden" value="" id="answer266617X4X1978" name="266617X4X1978">
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> What is the ownership used by the vehicles used in your school? Please choose what is applicable?
      </span>
                </label>
                <p class="formanswertext">
                    School does not use or own vehicles          </p>
            </div>




            <div class="question array-multi-flexi" id="question2217">
                <input type="hidden" value="2217" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">3(b)</span>&nbsp;Specify the type of fuel used by your school's vehicles:

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#criticalParameters" class="kplink"></a>
            </span>
                    </label>

                    <div class="answer clearfix">



                        <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_2217"><div id='vmsg_2217_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
            </span></div> -->

                        <div class="answer clearfix">

                            <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
                                <colgroup class="col-responses">

                                    <col width="20%" class="answertext">
                                    <col width="15%" class="odd">
                                    <col width="15%" class="even">
                                    <col width="15%" class="odd">
                                    <col width="15%" class="even">
                                </colgroup>

                                <thead>
                                <tr class="dontread">
                                    <td>&nbsp;</td>
                                    <th>Diesel</th>
                                    <th>Petrol</th>
                                    <th>LPG</th>
                                    <th>CNG</th>
                                    <th>Electric</th>
                                    <th>Hybrid</th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ001">
                                    <th width="20%" class="answertext">
                                        Bus
                                        <input type="hidden" value="" id="java266617X4X2217SQ001" name="java266617X4X2217SQ001" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ001_SQ001" name="java266617X4X2217SQ001_SQ001" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ001_SQ001" class="hide read">Diesel</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ001" name="266617X4X2217SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ001_SQ002" name="java266617X4X2217SQ001_SQ002" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ001_SQ002" class="hide read">Petrol</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ002" name="266617X4X2217SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ001_SQ003" name="java266617X4X2217SQ001_SQ003" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ001_SQ003" class="hide read">LPG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ003" name="266617X4X2217SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ001_SQ004" name="java266617X4X2217SQ001_SQ004" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ001_SQ004" class="hide read">CNG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ001_SQ004" name="266617X4X2217SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
                                        <input type="text" value=""  class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ002">
                                    <th width="20%" class="answertext">
                                        Car
                                        <input type="hidden" value="" id="java266617X4X2217SQ002" name="java266617X4X2217SQ002" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ002_SQ001" name="java266617X4X2217SQ002_SQ001" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ002_SQ001" class="hide read">Diesel</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ001" name="266617X4X2217SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ002_SQ002" name="java266617X4X2217SQ002_SQ002" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ002_SQ002" class="hide read">Petrol</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ002" name="266617X4X2217SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ002_SQ003" name="java266617X4X2217SQ002_SQ003" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ002_SQ003" class="hide read">LPG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ003" name="266617X4X2217SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ002_SQ004" name="java266617X4X2217SQ002_SQ004" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ002_SQ004" class="hide read">CNG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ002_SQ004" name="266617X4X2217SQ002_SQ004" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
                                        <input type="text" value=""  class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ003">
                                    <th width="20%" class="answertext">
                                        Van
                                        <input type="hidden" value="" id="java266617X4X2217SQ003" name="java266617X4X2217SQ003" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ003_SQ001" name="java266617X4X2217SQ003_SQ001" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ003_SQ001" class="hide read">Diesel</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ001" name="266617X4X2217SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ003_SQ002" name="java266617X4X2217SQ003_SQ002" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ003_SQ002" class="hide read">Petrol</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ002" name="266617X4X2217SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ003_SQ003" name="java266617X4X2217SQ003_SQ003" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ003_SQ003" class="hide read">LPG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ003" name="266617X4X2217SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ003_SQ004" name="java266617X4X2217SQ003_SQ004" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">CNG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ003_SQ004" name="266617X4X2217SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>


                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>


                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ003">
                                    <th width="20%" class="answertext">
                                        Other vehicles
                                        <input type="hidden" value="" id="java266617X4X2217SQ003" name="java266617X4X2217SQ003" class="form-control">
                                    </th>

                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ001" class="hide read">Diesel</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

                                        <label for="answer266617X4X2217SQ003_SQ002" class="hide read">Petrol</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

                                        <label for="answer266617X4X2217SQ003_SQ003" class="hide read">LPG</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">CNG</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>


                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>


                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">

                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
                                        <input type="text" value=""  class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                </tr>



                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X2217SQ004">
                                    <th width="20%" class="answertext">
                                        Sub-Total
                                        <input type="hidden" value="" id="java266617X4X2217SQ004" name="java266617X4X2217SQ004" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ004_SQ001" name="java266617X4X2217SQ004_SQ001" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ004_SQ001" class="hide read">Diesel</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Diesel" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ001" name="266617X4X2217SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ004_SQ002" name="java266617X4X2217SQ004_SQ002" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ004_SQ002" class="hide read">Petrol</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Petrol" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ002" name="266617X4X2217SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ004_SQ003" name="java266617X4X2217SQ004_SQ003" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ004_SQ003" class="hide read">LPG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="LPG" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ003" name="266617X4X2217SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="" id="java266617X4X2217SQ004_SQ004" name="java266617X4X2217SQ004_SQ004" class="form-control" readonly="">
                                        <label for="answer266617X4X2217SQ004_SQ004" class="hide read">CNG</label>
                                        <input type="text" value="" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="CNG" size="5" maxlength="5" id="answer266617X4X2217SQ004_SQ004" name="266617X4X2217SQ004_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">Electric</label>
                                        <input type="text" value="" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <label for="answer266617X4X2217SQ003_SQ004" class="hide read">	Hybrid</label>
                                        <input type="text" value=""  class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>

                                </tr>
                                </tbody>
                            </table>

                        </div>



                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1"> Supporting Documents  </label>
                    <ul class="support-docs">
                        <li>

                            <div class="support_files">No documents uploaded by the school.</div>            </li>
                    </ul>
                </div>




            </div>


            <div class="question boilerplate" id="question1979">
                <input type="hidden" value="1979" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 4: How do you travel to school every day?</h6>
<p>
	To know how the students, teachers and other staff in your school travel daily, the teacher/coordinator in the team should ask individual class monitors to record the commuting practices of his/ her classmates and the teachers, and forward to the audit team. After completing the survey, provide the compiled information below.</p>

            </span>
                    </label>

                    <div class="answer clearfix">



                        <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1979"></span></div> -->

                        <div class="answer clearfix">
                            <input type="hidden" value="" id="answer266617X4X1979" name="266617X4X1979">
                        </div>



                    </div>
                </div>
            </div>



            <div class="question array-multi-flexi" id="question176">
                <input type="hidden" value="176" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">4</span> How many members of the school community use each type of transport: <input type="hidden" value="1283" name="totalpopulation"><input type="hidden" value="&lt;span style='background-color: #eee8aa;'&gt;&lt;span title='Undefined variable' style='border-style: solid; border-width: 2px; border-color: red;'&gt;&lt;span title='Undefined variable' style='color: red; font-weight: bold'&gt;INSERTANS:266617X34X1608&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;" name="stype"> 
<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#publicTransport" class="kplink"></a>
            </span>
                    </label>

                    <div class="answer clearfix">



                        <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_176"><div id='vmsg_176_input_boxes' class='em_input_boxes emtip'>Only numbers may be entered in these fields.</div>
            </span></div> -->

                        <div class="answer clearfix">

                            <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly maxchars maxchars-5">
                                <colgroup class="col-responses">

                                    <col width="20%" class="answertext">
                                    <col width="15%" class="odd">
                                    <col width="15%" class="even">
                                    <col width="15%" class="odd">
                                    <col width="15%" class="even">
                                </colgroup>

                                <thead>
                                <tr class="dontread">
                                    <td>&nbsp;</td>
                                    <th>Students</th>
                                    <th>Teaching Staff</th>
                                    <th>Non-Teaching Staff</th>
                                    <th>Total</th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ001">
                                    <th width="20%" class="answertext">
                                        School bus
                                        <input type="hidden" value="" id="java266617X4X176SQ001" name="java266617X4X176SQ001" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ001_SQ001" name="java266617X4X176SQ001_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ001_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ001" name="266617X4X176SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ001_SQ002" name="java266617X4X176SQ001_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ001_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ002" name="266617X4X176SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ001_SQ003" name="java266617X4X176SQ001_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ001_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ003" name="266617X4X176SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ001_SQ004" name="java266617X4X176SQ001_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ001_SQ004" class="hide read">Total</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ001_SQ004" name="266617X4X176SQ001_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ002">
                                    <th width="20%" class="answertext">
                                        Public bus
                                        <input type="hidden" value="" id="java266617X4X176SQ002" name="java266617X4X176SQ002" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ002_SQ001" name="java266617X4X176SQ002_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ002_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ001" name="266617X4X176SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="4" id="java266617X4X176SQ002_SQ002" name="java266617X4X176SQ002_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ002_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="4" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ002" name="266617X4X176SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ002_SQ003" name="java266617X4X176SQ002_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ002_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ003" name="266617X4X176SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control"  readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="4" id="java266617X4X176SQ002_SQ004" name="java266617X4X176SQ002_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ002_SQ004" class="hide read">Total</label>
                                        <input type="text" value="4" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ002_SQ004" name="266617X4X176SQ002_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ003">
                                    <th width="20%" class="answertext">
                                        School transport (other than bus)
                                        <input type="hidden" value="" id="java266617X4X176SQ003" name="java266617X4X176SQ003" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="285" id="java266617X4X176SQ003_SQ001" name="java266617X4X176SQ003_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ003_SQ001" class="hide read">Students</label>
                                        <input type="text" value="285" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ001" name="266617X4X176SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ003_SQ002" name="java266617X4X176SQ003_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ003_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ002" name="266617X4X176SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ003_SQ003" name="java266617X4X176SQ003_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ003_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ003" name="266617X4X176SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="285" id="java266617X4X176SQ003_SQ004" name="java266617X4X176SQ003_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ003_SQ004" class="hide read">Total</label>
                                        <input type="text" value="285" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ003_SQ004" name="266617X4X176SQ003_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ0012">
                                    <th width="20%" class="answertext">
                                        Public transport (other than bus, Metro, car pool)
                                        <input type="hidden" value="" id="java266617X4X176SQ0012" name="java266617X4X176SQ0012" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ0012_SQ001" name="java266617X4X176SQ0012_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ0012_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ001" name="266617X4X176SQ0012_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ0012_SQ002" name="java266617X4X176SQ0012_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ0012_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ002" name="266617X4X176SQ0012_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ0012_SQ003" name="java266617X4X176SQ0012_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ0012_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ003" name="266617X4X176SQ0012_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ0012_SQ004" name="java266617X4X176SQ0012_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ0012_SQ004" class="hide read">Total</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ0012_SQ004" name="266617X4X176SQ0012_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ005">
                                    <th width="20%" class="answertext">
                                        Taxi four-wheeler
                                        <input type="hidden" value="" id="java266617X4X176SQ005" name="java266617X4X176SQ005" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ005_SQ001" name="java266617X4X176SQ005_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ005_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ001" name="266617X4X176SQ005_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ005_SQ002" name="java266617X4X176SQ005_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ005_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ002" name="266617X4X176SQ005_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ005_SQ003" name="java266617X4X176SQ005_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ005_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ003" name="266617X4X176SQ005_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ005_SQ004" name="java266617X4X176SQ005_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ005_SQ004" class="hide read">Total</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ005_SQ004" name="266617X4X176SQ005_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ006">
                                    <th width="20%" class="answertext">
                                        Taxi three-wheeler
                                        <input type="hidden" value="" id="java266617X4X176SQ006" name="java266617X4X176SQ006" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="385" id="java266617X4X176SQ006_SQ001" name="java266617X4X176SQ006_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ006_SQ001" class="hide read">Students</label>
                                        <input type="text" value="385" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ001" name="266617X4X176SQ006_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="20" id="java266617X4X176SQ006_SQ002" name="java266617X4X176SQ006_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ006_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="20" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ002" name="266617X4X176SQ006_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ006_SQ003" name="java266617X4X176SQ006_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ006_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ003" name="266617X4X176SQ006_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="405" id="java266617X4X176SQ006_SQ004" name="java266617X4X176SQ006_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ006_SQ004" class="hide read">Total</label>
                                        <input type="text" value="405" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ006_SQ004" name="266617X4X176SQ006_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ007">
                                    <th width="20%" class="answertext">
                                        Personal four-wheeler
                                        <input type="hidden" value="" id="java266617X4X176SQ007" name="java266617X4X176SQ007" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ007_SQ001" name="java266617X4X176SQ007_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ007_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ001" name="266617X4X176SQ007_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="11" id="java266617X4X176SQ007_SQ002" name="java266617X4X176SQ007_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ007_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="11" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ002" name="266617X4X176SQ007_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ007_SQ003" name="java266617X4X176SQ007_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ007_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ003" name="266617X4X176SQ007_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="11" id="java266617X4X176SQ007_SQ004" name="java266617X4X176SQ007_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ007_SQ004" class="hide read">Total</label>
                                        <input type="text" value="11" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ007_SQ004" name="266617X4X176SQ007_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ008">
                                    <th width="20%" class="answertext">
                                        Personal two-wheeler
                                        <input type="hidden" value="" id="java266617X4X176SQ008" name="java266617X4X176SQ008" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ008_SQ001" name="java266617X4X176SQ008_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ008_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ001" name="266617X4X176SQ008_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="5" id="java266617X4X176SQ008_SQ002" name="java266617X4X176SQ008_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ008_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="5" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ002" name="266617X4X176SQ008_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="3" id="java266617X4X176SQ008_SQ003" name="java266617X4X176SQ008_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ008_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="3" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ003" name="266617X4X176SQ008_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="8" id="java266617X4X176SQ008_SQ004" name="java266617X4X176SQ008_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ008_SQ004" class="hide read">Total</label>
                                        <input type="text" value="8" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ008_SQ004" name="266617X4X176SQ008_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ009">
                                    <th width="20%" class="answertext">
                                        Bicycle
                                        <input type="hidden" value="" id="java266617X4X176SQ009" name="java266617X4X176SQ009" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="705" id="java266617X4X176SQ009_SQ001" name="java266617X4X176SQ009_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ009_SQ001" class="hide read">Students</label>
                                        <input type="text" value="705" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ001" name="266617X4X176SQ009_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ009_SQ002" name="java266617X4X176SQ009_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ009_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ002" name="266617X4X176SQ009_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="4" id="java266617X4X176SQ009_SQ003" name="java266617X4X176SQ009_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ009_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="4" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ003" name="266617X4X176SQ009_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="709" id="java266617X4X176SQ009_SQ004" name="java266617X4X176SQ009_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ009_SQ004" class="hide read">Total</label>
                                        <input type="text" value="709" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ009_SQ004" name="266617X4X176SQ009_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ010">
                                    <th width="20%" class="answertext">
                                        On foot
                                        <input type="hidden" value="" id="java266617X4X176SQ010" name="java266617X4X176SQ010" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="116" id="java266617X4X176SQ010_SQ001" name="java266617X4X176SQ010_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ010_SQ001" class="hide read">Students</label>
                                        <input type="text" value="116" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ001" name="266617X4X176SQ010_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="30" id="java266617X4X176SQ010_SQ002" name="java266617X4X176SQ010_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ010_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="30" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ002" name="266617X4X176SQ010_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="2" id="java266617X4X176SQ010_SQ003" name="java266617X4X176SQ010_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ010_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="2" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ003" name="266617X4X176SQ010_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="148" id="java266617X4X176SQ010_SQ004" name="java266617X4X176SQ010_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ010_SQ004" class="hide read">Total</label>
                                        <input type="text" value="148" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ010_SQ004" name="266617X4X176SQ010_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ011">
                                    <th width="20%" class="answertext">
                                        Others (non-motorised)
                                        <input type="hidden" value="" id="java266617X4X176SQ011" name="java266617X4X176SQ011" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ011_SQ001" name="java266617X4X176SQ011_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ011_SQ001" class="hide read">Students</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ001" name="266617X4X176SQ011_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ011_SQ002" name="java266617X4X176SQ011_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ011_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ002" name="266617X4X176SQ011_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ011_SQ003" name="java266617X4X176SQ011_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ011_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ003" name="266617X4X176SQ011_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="0" id="java266617X4X176SQ011_SQ004" name="java266617X4X176SQ011_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ011_SQ004" class="hide read">Total</label>
                                        <input type="text" value="0" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ011_SQ004" name="266617X4X176SQ011_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>


                                <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X4X176SQ004">
                                    <th width="20%" class="answertext">
                                        Total
                                        <input type="hidden" value="" id="java266617X4X176SQ004" name="java266617X4X176SQ004" class="form-control">
                                    </th>
                                    <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="1491" id="java266617X4X176SQ004_SQ001" name="java266617X4X176SQ004_SQ001" class="form-control">
                                        <label for="answer266617X4X176SQ004_SQ001" class="hide read">Students</label>
                                        <input type="text" value="1491" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Students" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ001" name="266617X4X176SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="70" id="java266617X4X176SQ004_SQ002" name="java266617X4X176SQ004_SQ002" class="form-control">
                                        <label for="answer266617X4X176SQ004_SQ002" class="hide read">Teaching Staff</label>
                                        <input type="text" value="70" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ002" name="266617X4X176SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="9" id="java266617X4X176SQ004_SQ003" name="java266617X4X176SQ004_SQ003" class="form-control">
                                        <label for="answer266617X4X176SQ004_SQ003" class="hide read">Non-Teaching Staff</label>
                                        <input type="text" value="9" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Non-Teaching Staff" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ003" name="266617X4X176SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="" readonly="">
                                    </td>
                                    <td class="answer_cell_00SQ004 question-item answer-item  numeric-item text-item  numberonly maxchars maxchars-5">
                                        <input type="hidden" value="1570" id="java266617X4X176SQ004_SQ004" name="java266617X4X176SQ004_SQ004" class="form-control">
                                        <label for="answer266617X4X176SQ004_SQ004" class="hide read">Total</label>
                                        <input type="text" value="1570" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" maxlength="5" id="answer266617X4X176SQ004_SQ004" name="266617X4X176SQ004_SQ004" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>



                    </div>
                </div>
            </div>


            <div class="question boilerplate" id="question1980">
                <input type="hidden" value="1980" id="q_number" name="q_number[]">
                <input type="hidden" value="4" id="group_id" name="group_id[]">
                <input type="hidden" value="testnp" id="school_name" name="school_name">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <h6>
	Task 5: How good is the air you breathe in your school?</h6>
<p>
	The starting point of air quality monitoring is to first study if an area has an air pollution problem. Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards are a regulatory measure to set the target for pollution reduction and achieve clean air.</p>

            </span>
                    </label>

                    <div class="answer clearfix">



                        <!-- <div class='text-success'><span class="questionhelp hide-tip" id="vmsg_1980"></span></div> -->

                        <div class="answer clearfix">
                            <input type="hidden" value="" id="answer266617X4X1980" name="266617X4X1980">
                        </div>



                    </div>
                </div>
            </div>


            <div class="question numeric mandatory" id="question184">
                <input type="hidden" value="184" id="q_number" name="q_number[]" class="em_sq_validation good">
                <input type="hidden" value="4" id="group_id" name="group_id[]" class="em_sq_validation good">
                <input type="hidden" value="testnp" id="school_name" name="school_name" class="em_sq_validation good">
                <div class="form-group">
                    <label for="exampleInputEmail1">
            <span class="question-text">
                <span class="cube">5</span> How many students suffer from respiratory ailments ?

<a target="_blank" href="http://www.greenschoolsprogramme.org/demo/knowledge-bank/air/#pmLevels" class="kplink"></a>
            </span>
                    </label>

                    <div class="answer clearfix">
                        <div class="answer clearfix">
                            <p class="question answer-item text-item numeric-item  integeronly">
                                0</p>

                        </div>



                    </div>
                </div>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6</span> Does the school laboratory have air quality monitoring equipment?
      </span>
                </label>
                <p class="formanswertext">
                    No
                </p>
            </div>








            <div class="form-group">
                <label for="exampleInputEmail1"> Supporting Documents  </label>
                <ul class="support-docs">
                    <li>

                        <div class="support_files">No documents uploaded by the school.</div>            </li>
                </ul>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">6(a)</span>   If No, is there an air quality monitoring station (private or government) close to your school?
      </span>
                </label>
                <p class="formanswertext">
                    No
                </p>
            </div>



            <center>
                <a class="btn org-btn" href="<?php echo base_url('admin/audit_started_2017/general/'.$id) ?>">PREVIOUS</a>
                <a class="btn org-btn" href="response_detail4.php?id=aeiou0617@">NEXT</a>
            </center>

        </form>



    </div>
    <!--close content-form-->
</div>
<?php $this->load->view('admin/survey/footer'); ?>