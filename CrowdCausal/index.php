<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// require_once 'js/requestHandler.php';
// session_start();

// $sql_object = new mymysql();
// $sql_object->connectToDatabase();
// $worker = $sql_object->getWorker($_GET['worker_amazon_id']);


?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <title>Crowd Causal</title>

      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link href="https://cdn.rawgit.com/selectize/selectize.js/master/dist/css/selectize.default.css" rel="stylesheet"/>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script type="text/javascript" src="https://s3.amazonaws.com/mturk-public/bs30/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.rawgit.com/bartaz/sandbox.js/master/jquery.highlight.js"></script>
      <script type="text/javascript" src="https://cdn.rawgit.com/madapaja/jquery.selection/master/src/jquery.selection.js"></script>
      <script type="text/javascript" src="https://cdn.rawgit.com/selectize/selectize.js/master/dist/js/standalone/selectize.js"></script>


      <link rel="stylesheet" href="css/main.css">
      <script src="js/main.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>



  </head>

  <body>
  <?
    foreach ($_POST as $name => $value) {
        echo $name . " - ". $value;
    }

    /*if (isset($_POST['step1next'])) {
      ?>
        <script type="text/javascript">
          var $active = $('.wizard .nav-tabs li.active');
          $("#intro1").hide();
          $("#multipleChoice").show();
          
          $active.next().removeClass('disabled');
          nextTab($active);
        </script> 
        <?
        
      }

    else if (isset($_POST['step2next'])) {
      ?>
        <script type="text/javascript">
            alert('Değişiklikler başarıyla kaydedildi.');
            alert("<?$_POST['worker_id']?>");
        </script> 
        <?
        $worker = $sql_object->insertOrUpdateWorkerTest($_POST['worker_id']); //$_GET['worker_id']

        $editState = TRUE;
        $editId = $aboutId;
        
      }*/


  ?>

    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div id="step1_intro1" class="jumbotron" style="padding-bottom:10px;margin-bottom:10px">
        <h1>Crowd Causal Project</h1>
        <h2>Welcome!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>

      <div id="step2_testing" class="jumbotron" style="display: none; padding-bottom:10px;padding-top:10px;margin-bottom:10px">
        <h1>Simple Task</h1>
        <div class="row">
            <div class="col-md-6">
              <p class="question">Q1: Which of the following statements reflect the knowledge in the passage?</p>
              <p class="passage" id='passage1'></p>
              <p>
                <label class="checkbox-inline"><input name="q1a" id="q1a1" type="radio" value="0">&nbsp;</label><br>
                <label class="checkbox-inline"><input name="q1a" id="q1a2" type="radio" value="1">&nbsp;</label><br>
                <label class="checkbox-inline"><input name="q1a" id="q1a3" type="radio" value="2">&nbsp;</label><br>
              </p>
            </div>
            <div class="col-md-6">
              <p class="question">Q2: To which causal statement does the highlighted statement correspond?</p>
              <p class="passage" id='passage2'></p>
              <p>
                <label class="checkbox-inline"><input name="q2a" id="q2a1" type="radio" value="0">&nbsp;</label><br>
                <label class="checkbox-inline"><input name="q2a" id="q2a2" type="radio" value="1">&nbsp;</label><br>
                <label class="checkbox-inline"><input name="q2a" id="q2a3" type="radio" value="2">&nbsp;</label><br>
              </p>
            </div>
        </div>
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="step3_intro2" class="jumbotron" style="display:none;padding-bottom: 10px; padding-top: 10px; margin-bottom: 10px;">
        <h1>Usage Scenario for the Real System</h1>
        <div style="width: 100%;float: left;margin-bottom:20px;">
          <img src="img/dottedArrow2.png" class="img-responsive" alt="System" width="40px" style="position: absolute; margin-top: 50px;">
          <img src="img/dottedArrow.png" class="img-responsive" alt="System" width="80px" style="float: right;">      
          <img src="img/system.png" class="img-responsive" alt="System" style="margin-left: 15%;width: 30%;float: left;">
          <img src="img/system.png" class="img-responsive" alt="System" style="margin-left: 5%;width: 30%;float: left;margin-right: 2%;">
        </div>
        <div style="width: 100%;">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="step4_training" class="jumbotron" style="display:none;padding-bottom: 10px; padding-top: 10px; margin-bottom: 10px;  width: 100%;">
        <h1>Training</h1>
        <h2 id="type"></h2>
        <p id="description"></p>
        <div class="row col-xs-12 col-md-12">
          <div class="col-md-6">
            <div class="row">
              <h3>POSTS</h3>
              <!-- <h4>Tasks & Controls</h4> -->
              <div class="alertMsg" id="addCausalAlert" style="display:none;">Add causal item first from the panel on the right.</div>
              <!-- <button id="prevPost" type="button" class="btn btn-primary">Previous Post</button> -->
            </div>

            <div class="row">
              <div id="posts">
                
              </div>  
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <h3>CAUSAL RELATIONS</h3>
              <!-- <h4>Tasks & Controls</h4> -->
              <button id="addCausal" type="button" class="btn btn-primary">Add</button>
              <button id="removeCausal" type="button" class="btn btn-primary">Remove</button>
              <button id="toggleAll" type="button" class="btn btn-primary" style="float:right;">Show All</button>
            </div>
            <div class="row">
              <!-- <form action="https://www.mturk.com/mturk/externalSubmit" id="mturk_form" method="post" name="mturk_form"> --> 
                <div id="results" class="panel-group">
                </div>
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div id="step5_complete" class="jumbotron" style="display:none;padding-bottom: 10px; padding-top: 10px; margin-bottom: 10px;">
        <h1>Complete!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>


      <!-- All inputs from all the steps of all types of traininings  -->
      <section>
        <div class="row col-xs-12 col-md-12" style="margin-bottom: 10px;">
          <form role="form" name="submitForm">
            <fieldset id="inputsToSubmit" style="border:none;">
              <input type="hidden" name="worker_amazon_id" value="<? echo $_GET['worker_amazon_id']?>"></input>
              <input type="hidden" name="testing_1_p" value=""></input>
              <input type="hidden" name="testing_1_a" value=""></input>
              <input type="hidden" name="testing_1_a_text" value=""></input>
              <input type="hidden" name="testing_2_p" value=""></input>
              <input type="hidden" name="testing_2_a" value=""></input>
              <input type="hidden" name="testing_2_a_text" value=""></input>
              <!-- <input name="chunk-1-pieces" type="hidden"/> -->
              <!-- <input name="chunk-1-text" type="hidden"/> -->
            </fieldset>
          </form>
        </div>
      </section>



      <div class="row">
        <section style="margin-top:-20px">
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a id='#step1_icon' href="#step1_progress" data-toggle="tab" aria-controls="step1_progress" role="tab" title="Step 1">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-book"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2_progress" data-toggle="tab" aria-controls="step2_progress" role="tab" title="Step 2">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-check"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3_progress" data-toggle="tab" aria-controls="step3_progress" role="tab" title="Step 3">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step4_progress" data-toggle="tab" aria-controls="step4_progress" role="tab" title="Step 2">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step5_progress_complete" data-toggle="tab" aria-controls="step5_progress_complete" role="tab" title="Complete">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-ok"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1_progress">
                        <h3>Step 1</h3>
                        <p>Introduction-1</p>
                        <ul class="list-inline pull-right">
                            <li><button id="step1next" name="step1next" type="button" class="btn btn-primary next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2_progress">
                        <h3>Step 2</h3>
                        <p>Testing</p>
                        <ul class="list-inline pull-right">
                            <li><button id="step2prev" name="step2prev" type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button id="step2next" name="step2next" type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                     <div class="tab-pane" role="tabpanel" id="step3_progress">
                        <h3>Step 3</h3>
                        <p>Introduction-2</p>
                        <ul class="list-inline pull-right">
                            <li><button id="step3prev" name="step3prev" type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button id="step3next" name="step3next" type="button" class="btn btn-primary next-step">Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4_progress">
                        <h3>Step 4</h3>
                        <p>Training</p>
                        <ul class="list-inline pull-right">
                            <li><button id="step4prev" name="step4prev" type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button id="step4next" name="step4next" type="button" class="btn btn-primary btn-info-full next-step">Save and Continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step5_progress_complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps. Go worker!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
       </div>
      </div>

      

    </div> <!-- /container -->
    
  </body>

</html>