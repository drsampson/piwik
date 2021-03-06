<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Piwik_ExampleUI
 */

/**
 * @package Piwik_ExampleUI
 */
class Piwik_ExampleUI_Controller extends Piwik_Controller
{
    function dataTables()
    {
        $view = Piwik_ViewDataTable::factory('table');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getTemperatures');
        $view->setColumnTranslation('value', "Temperature in °C");
        $view->setColumnTranslation('label', "Hour of day");
        $view->setSortedColumn('label', 'asc');
        $view->setGraphLimit(24);
        $view->setLimit(24);
        $view->disableExcludeLowPopulation();
        $view->disableShowAllColumns();
        $view->disableRowEvolution();
        $view->setAxisYUnit('°C'); // useful if the user requests the bar graph
        return $this->renderView($view);
    }

    function evolutionGraph()
    {
        echo "<h2>Evolution of server temperatures over the last few days</h2>";
        $this->echoEvolutionGraph();
    }

    function echoEvolutionGraph()
    {
        $view = Piwik_ViewDataTable::factory('graphEvolution');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getTemperaturesEvolution');
        $view->setColumnTranslation('server1', "Temperature server piwik.org");
        $view->setColumnTranslation('server2', "Temperature server dev.piwik.org");
        $view->setAxisYUnit('°C'); // useful if the user requests the bar graph
        return $this->renderView($view);
    }

    function barGraph()
    {
        $view = Piwik_ViewDataTable::factory('graphVerticalBar');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getTemperatures');
        $view->setColumnTranslation('value', "Temperature");
        $view->setAxisYUnit('°C');
        $view->setGraphLimit(24);
        $view->disableFooter();
        return $this->renderView($view);
    }

    function pieGraph()
    {
        $view = Piwik_ViewDataTable::factory('graphPie');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getPlanetRatios');
        $view->setColumnsToDisplay('value');
        $view->setColumnTranslation('value', "times the diameter of Earth");
        $view->setGraphLimit(10);
        $view->disableFooterIcons();
        return $this->renderView($view);
    }

    function tagClouds()
    {
        echo "<h2>Simple tag cloud</h2>";
        $this->echoSimpleTagClouds();

        echo "<br /><br /><h2>Advanced tag cloud: with logos and links</h2>
		<ul style='list-style-type:disc;margin-left:50px'>
			<li>The logo size is proportional to the value returned by the API</li>
			<li>The logo is linked to a specific URL</li>
		</ul><br /><br />";
        $this->echoAdvancedTagClouds();
    }

    function echoSimpleTagClouds()
    {
        $view = Piwik_ViewDataTable::factory('cloud');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getPlanetRatios');
        $view->setColumnsToDisplay(array('label', 'value'));
        $view->setColumnTranslation('value', "times the diameter of Earth");
        $view->disableFooter();
        $this->renderView($view);
    }

    function echoAdvancedTagClouds()
    {
        $view = Piwik_ViewDataTable::factory('cloud');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getPlanetRatiosWithLogos');
        $view->setDisplayLogoInTagCloud(true);
        $view->disableFooterExceptExportIcons();
        $view->setColumnsToDisplay(array('label', 'value'));
        $view->setColumnTranslation('value', "times the diameter of Earth");
        $this->renderView($view);
    }

    function sparklines()
    {
        $view = new Piwik_View('@ExampleUI/sparklines');
        $view->urlSparkline1 = $this->getUrlSparkline('generateSparkline', array('server' => 'server1', 'rand' => mt_rand()));
        $view->urlSparkline2 = $this->getUrlSparkline('generateSparkline', array('server' => 'server2', 'rand' => mt_rand()));
        echo $view->render();
    }

    function generateSparkline()
    {
        $serverRequested = Piwik_Common::getRequestVar('server', '');
        $view = Piwik_ViewDataTable::factory('sparkline');
        $view->init($this->pluginName, __FUNCTION__, 'ExampleUI.getTemperaturesEvolution');
        $view->setColumnsToDisplay($serverRequested);
        $this->renderView($view);
    }

    // Example use
    private function echoDataTableSearchEnginesFiltered()
    {
        $view = $this->getLastUnitGraph($this->pluginName, __FUNCTION__, 'Referers.getSearchEngines');
        $view->setColumnsToDisplay('nb_visits');
        $view->setSearchPattern('^(Google|Yahoo!)$', 'label');
        return $this->renderView($view);
    }
}
