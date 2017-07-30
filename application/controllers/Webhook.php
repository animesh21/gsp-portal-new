<?php
/**
 * Created by PhpStorm.
 * User: animesh
 * Date: 30/7/17
 * Time: 11:26 AM
 */

class Webhook extends CI_Controller {
    public function push() {
        echo 'Code is pushed to the repository';
        exec('cd /usr/share/nginx/html/mountedspace/greenschoolsprogramme/audit2017/scripts');
        echo exec('./gitpull.sh');
        echo exec('whoami');
    }
}