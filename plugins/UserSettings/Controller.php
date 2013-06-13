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

    function getBrowserType($fetch = false)
    {
        $view = $this->getStandardDataTableUserSettings(
            __FUNCTION__,
            'UserSettings.getBrowserType',
            'graphPie'
        );
        $view->setColumnTranslation('label', Piwik_Translate('UserSettings_ColumnBrowserFamily'));
        $view->disableOffsetInformationAndPaginationControls();
        return $this->renderView($view, $fetch);
    }

    function getWideScreen($fetch = false)
    {
        $view = $this->getStandardDataTableUserSettings(
            __FUNCTION__,
            'UserSettings.getWideScreen'
        );
        $view->setColumnTranslation('label', Piwik_Translate('UserSettings_ColumnTypeOfScreen'));
        $view->disableOffsetInformationAndPaginationControls();
        $view->addRelatedReports(Piwik_Translate('UserSettings_ColumnTypeOfScreen'), array(
                                                                                          'UserSettings.getMobileVsDesktop' => Piwik_Translate('UserSettings_MobileVsDesktop')
                                                                                     ));
        return $this->renderView($view, $fetch);
    }

    /**
     * Returns or echos a report displaying the number of visits by device type (Mobile or Desktop).
     */
    public function getMobileVsDesktop($fetch = false)
    {
        $view = $this->getStandardDataTableUserSettings(__FUNCTION__, 'UserSettings.getMobileVsDesktop');
        $view->setColumnTranslation('label', Piwik_Translate('UserSettings_MobileVsDesktop'));
        $view->addRelatedReports(Piwik_Translate('UserSettings_MobileVsDesktop'), array(
                                                                                       'UserSettings.getWideScreen' => Piwik_Translate('UserSettings_ColumnTypeOfScreen')
                                                                                  ));
        return $this->renderView($view, $fetch);
    }

    function getPlugin($fetch = false)
    {
        $view = $this->getStandardDataTableUserSettings(
            __FUNCTION__,
            'UserSettings.getPlugin'
        );
        $view->disableShowAllViewsIcons();
        $view->disableShowAllColumns();
        $view->disableOffsetInformationAndPaginationControls();
        $view->setColumnsToDisplay(array('label', 'nb_visits_percentage', 'nb_visits'));
        $view->setColumnTranslation('label', Piwik_Translate('UserSettings_ColumnPlugin'));
        $view->setColumnTranslation('nb_visits_percentage', str_replace(' ', '&nbsp;', Piwik_Translate('General_ColumnPercentageVisits')));
        $view->setSortedColumn('nb_visits_percentage');
        $view->setLimit(10);
        $view->setFooterMessage(Piwik_Translate('UserSettings_PluginDetectionDoesNotWorkInIE'));
        return $this->renderView($view, $fetch);
    }

    protected function getStandardDataTableUserSettings($currentControllerAction,
                                                        $APItoCall,
                                                        $defaultDatatableType = null)
    {
        $view = Piwik_ViewDataTable::factory($defaultDatatableType);
        $view->init($this->pluginName, $currentControllerAction, $APItoCall);
        $view->disableSearchBox();
        $view->disableExcludeLowPopulation();
        $view->setLimit(5);
        $view->setGraphLimit(5);

        $this->setPeriodVariablesView($view);
        $this->setMetricsVariablesView($view);

        return $view;
    }

    /**
     * Renders datatable for browser language
     *
     * @param bool $fetch
     *
     * @return string|void
     */
    public function getLanguage($fetch = false)
    {
        $view = Piwik_ViewDataTable::factory();
        $view->init($this->pluginName, __FUNCTION__, "UserSettings.getLanguage");
        $view->disableExcludeLowPopulation();

        $view->setColumnsToDisplay(array('label', 'nb_visits'));
        $view->setColumnTranslation('label', Piwik_Translate('General_Language'));
        $view->setSortedColumn('nb_visits');
        $view->disableSearchBox();
        $view->setLimit(5);

        return $this->renderView($view, $fetch);
    }
}
