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
        echo exec('sudo -u greenschool_u bash ./gitpull.sh');
        echo "\n\rI am ";
        echo exec('whoami');
    }

    public function test() {
        echo 'Testing the webhook, part 1';
    }
}
