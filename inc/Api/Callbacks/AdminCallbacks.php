<?php
/**
 * @package mkPlugin
 */
namespace Inc\Api\Callbacks;

use \Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{   
    public function adminDashboard()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }

    public function adminCPT()
    {
        return require_once("$this->plugin_path/templates/adminCPT.php");
    }

    public function eventOptionsGroup( $input )
    {
        return $input;
    }

    public function eventAdminSection()
    {
        echo 'Test test';
    }

}