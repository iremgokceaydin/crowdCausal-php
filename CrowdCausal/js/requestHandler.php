<?php
try {
    require_once __DIR__.'/../../causal.conf';
} catch (Exception $e) {
    exit('Cannot connect to the configuration file!');
}
date_default_timezone_set('America/Detroit');

/**
 * Description of mymysql
 *
 * @author irem
 */
class mymysql {

    private $con = "";

    function connectToDatabase() {
        $sql_db = DB_NAME;
        $sql_user = DB_USER;
        $sql_pass = DB_PASS;
        $this->con = mysqli_connect("localhost", $sql_user, $sql_pass);
        mysqli_query($this->con, "SET character_set_results=utf8");
        mb_language('uni');
        mb_internal_encoding('UTF-8');

        if (!$this->con) {
            // die('Could not connect: ' . mysql_error());
            die('There is a technical problem, right now. Please check again later.');
        }
        mysqli_select_db($this->con, $sql_db);
        mysqli_query($this->con, "set names 'utf8'");
    }

    function sendQuery($query) {
        mysqli_query($this->con, "SET character_set_client=utf8");
        mysqli_query($this->con, "SET character_set_connection=utf8");
        $res = mysqli_query($this->con, $query);
        return $res;
    }

    function closeConnection() {
        mysqli_close($this->con);
    }

    function insertWorkerTesting($worker_amazon_id, $testing_1_p, $testing_1_a, $testing_1_a_text, $testing_2_p, $testing_2_a, $testing_2_a_text) {
        mysqli_set_charset($this->con, "utf8");
        $worker_amazon_id = mysqli_real_escape_string($this->con, strval((int) $worker_amazon_id));
        $query = "SELECT * FROM `worker_testing` WHERE `worker_amazon_id`=" . $worker_amazon_id . ";";

        $res = $this->sendQuery($query);
        if (mysqli_num_rows($res) == 0){
            $query = "INSERT INTO `worker_testing` (`worker_amazon_id`,`testing_1_p`,`testing_1_a`, `testing_1_a_text`,`testing_2_p`,`testing_2_a`,`testing_2_a_text`, `updated_at`) VALUES ". '(' . $worker_amazon_id . ',"'. $testing_1_p . '",' .$testing_1_a . ',"'. $testing_1_a_text . '","' .$testing_2_p . '",'. $testing_2_a . ',"' .$testing_2_a_text . '","' . date('Y-m-d H:i:s'). '");';

            $res = $this->sendQuery($query); 
            if(mysqli_insert_id($this->con))
                return "Submitted Successfully!";
            else
                return "Error in Submit!";   
        }
        else {
            $query = 'UPDATE `worker_testing` SET `testing_1_p`="' . $testing_1_p . '", `testing_1_a`='.$testing_1_a .',`testing_1_a_text`="' . $testing_1_a_text . '", `testing_2_p`="' . $testing_2_p . '", `testing_2_a`='.$testing_2_a .',`testing_2_a_text`="' . $testing_2_a_text . '", `updated_at`="'. date('Y-m-d H:i:s') .'";';
            $res = $this->sendQuery($query); 
            if($res)
                return "Updated Successfully!";
            else
                return "Error in Submit!";
        }
        
    }

    function insertWorkerTraining($worker_amazon_id, $type, $step, $order_index, $highlights, $text) {
        mysqli_set_charset($this->con, "utf8");
        $worker_amazon_id = mysqli_real_escape_string($this->con, strval((int) $worker_amazon_id));
        $type = mysqli_real_escape_string($this->con, strval((int) $type));
        $step = mysqli_real_escape_string($this->con, strval((int) $step));
        $order_index = mysqli_real_escape_string($this->con, strval((int) $order_index));
        $highlights = mysqli_real_escape_string($this->con, $highlights);
        $text = mysqli_real_escape_string($this->con, $text);

        $query = "INSERT INTO `worker_training` (`worker_amazon_id`,`type`,`step`, `order_index`,`highlights`,`text`) VALUES ". '(' . $worker_amazon_id . ','. $type . ',' .$step . ','. $order_index . ',"' .$highlights . '","'. $text . ',");';

        $res = $this->sendQuery($query); 
        if(mysqli_insert_id($this->con))
            return "Submitted Successfully!";
        else
            return "Error in Submit!";   
        
    }

    function emptyWorkerTraining($worker_amazon_id, $type, $step) {
        mysqli_set_charset($this->con, "utf8");
        $worker_amazon_id = mysqli_real_escape_string($this->con, strval((int) $worker_amazon_id));
        $type = mysqli_real_escape_string($this->con, strval((int) $type));
        $step = mysqli_real_escape_string($this->con, strval((int) $step));
        
        $query = "DELETE FROM `worker_training` WHERE `worker_amazon_id`=" . $worker_amazon_id . ' AND `type`=' . $type . " AND `step`=" . $step.";";
        $res = $this->sendQuery($query);
        // if(mysql_affected_rows($this->con))
        //     return "Deleted Successfully!";
        // else
        //     return "Error in Delete!";
        
    }

    function getWorker($worker_id){
        mysqli_set_charset($this->con, "utf8");
        $worker_id = mysqli_real_escape_string($this->con, strval((int) $worker_id));
        $query = "SELECT * FROM `worker` WHERE `worker_id` = " . $worker_id . ";";

        $res = $this->sendQuery($query); 

        if (mysqli_num_rows($res) == 0){
            return FALSE;
        }
        $row = mysqli_fetch_array($res);
        return $row;
    }

}
?>
