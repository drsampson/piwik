<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Piwik_UserSettings
 */

/**
 *
 * @package Piwik_UserSettings
 */
class Piwik_UserSettings_Controller extends Piwik_Controller
{
    function index()
    {
        $view = Piwik_View::factory('index');

        $view->dataTablePlugin = $this->getPlugin(true);
        $view->dataTableResolution = $this->getResolution(true);
        $view->dataTableConfiguration = $this->getConfiguration(true);
        $view->dataTableOS = $this->getOS(true);
        $view->dataTableBrowser = $this->getBrowser(true);
        $view->dataTableBrowserType = $this->getBrowserType(true);
        $view->dataTableMobileVsDesktop = $this->getMobileVsDesktop(true);
        $view->dataTableBrowserLanguage = $this->getLanguage(true);

        echo $view->render();
    }
    
    /**
     * TODO
     */
    public function __call($action, $args)
    {
        if (!method_exists(Piwik_UserSettings_API::getInstance(), $action)) {
            throw new Exception("Invalid action name '$action' for 'UserSettings' plugin.");
        }
        
        $fetch = reset($args);
        
        $view = Piwik_ViewDataTable::factory(null, "UserSettings.$action");
        return $this->renderView($view, $fetch);
    }
}
