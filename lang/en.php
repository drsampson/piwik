<?php 
$translations = array(
	'General_Locale' => 'en_EN.UTF-8',
	'General_TranslatorName' => 'Piwik team',
	'General_TranslatorEmail' => 'hello@piwik.org',
	'General_EnglishLanguageName' => 'English',
	'General_OriginalLanguageName' => 'English',
	'General_Unknown' => 'Unknown',
	'General_Required' => '%s required',
	'General_Error' => 'Error',
	'General_Warning' => 'Warning',
	'General_BackToHomepage' => 'Back to Piwik homepage',
	'General_Yes' => 'Yes',
	'General_No' => 'No',
	'General_Delete' => 'Delete',
	'General_Edit' => 'Edit',
	'General_Ok' => 'Ok',
	'General_Close' => 'Close',
	'General_Logout' => 'Sign out',
	'General_Done' => 'Done',
	'General_LoadingData' => 'Loading data...',
	'General_ErrorRequest' => 'Oops&hellip; problem during the request, please try again.',
	'General_Next' => 'Next',
	'General_Previous' => 'Previous',
	'General_Search' => 'Search',
	'General_Others' => 'Others',
	'General_Table' => 'Table',
	'General_Piechart' => 'Piechart',
	'General_TagCloud' => 'Tag Cloud',
	'General_VBarGraph' => 'Vertical bar graph',
	'General_Export' => 'Export',
	'General_Refresh' => 'Refresh the page',
	'General_Visitors' => 'Visitors',
	'General_ColumnNbUniqVisitors' => 'Unique visitors',
	'General_ColumnNbVisits' => 'Visits',
	'General_ColumnLabel' => 'Label',
	'General_ColumnActionsPerVisit' => 'Actions per Visit',
	'General_ColumnAvgTimeOnSite' => 'Avg. Time on Site',
	'General_ColumnBounceRate' => 'Bounce Rate',
	'General_Save' => 'Save',
	'General_Website' => 'Website',
	'General_NoDataForGraph' => 'No data for this graph',
	'General_NoDataForTagCloud' => 'No data for this tag cloud.',
	'General_PiwikIsACollaborativeProject' => "%s Piwik %s is a collaborative project and still Beta. %s If you want to help, please %s contact us!%s.",
	'CorePluginsAdmin_Plugins' => 'Plugins',
	'CorePluginsAdmin_PluginsManagement' => 'Plugins Management',
	'CorePluginsAdmin_MainDescription' => 'Plugins extend and expand the functionality of Piwik. Once a plugin is installed, you may activate it or deactivate it here.',
	'CorePluginsAdmin_Plugin' => 'Plugin',
	'CorePluginsAdmin_Version' => 'Version',
	'CorePluginsAdmin_Description' => 'Description',
	'CorePluginsAdmin_Status' => 'Status',
	'CorePluginsAdmin_Action' => 'Action',
	'CorePluginsAdmin_PluginHomepage' => 'Plugin Homepage',
	'CorePluginsAdmin_Activated' => 'Activated',
	'CorePluginsAdmin_Active' => 'Active',
	'CorePluginsAdmin_Inactive' => 'Inactive',
	'CorePluginsAdmin_ActivatedHelp' => 'This plugin cannot be deactivated',
	'CorePluginsAdmin_Deactivate' => 'Deactivate',
	'CorePluginsAdmin_Activate' => 'Activate',
	'CorePluginsAdmin_MenuPlugins' => 'Plugins',
	'API_QuickDocumentation' => '<h2>API quick documentation</h2><p>If you don\'t have data for today you can first <a href=\'misc/generateVisits.php\' target=_blank>generate some data</a> using the Visits Generator script.</p><p>You can try the different formats available for every method. It is very easy to extract any data you want from piwik!</p><p><b>For more information have a look at the <a href=\'http://dev.piwik.org/trac/wiki/API\'>official API Documentation</a> or the <a href=\'http://dev.piwik.org/trac/wiki/API/Reference\'>API Reference</a>.</b></P><h2>User authentication</h2><p>If you want to <b>request the data in your scripts, in a crontab, etc. </b> you need to add the parameter <code><u>&token_auth=%s</u></code> to the API calls URLs that require authentication.</p><p>This token_auth is as secret as your login and password, <b>do not share it!</p>',
	'API_LoadedAPIs' => 'Loaded successfully %s APIs',
	'CoreHome_NoPrivileges' => 'You are logged in as \'%s\' but it seems you don\'t have any permission set in Piwik.<br />Ask your Piwik administrator to give you \'view\' access to a website.',
	'CoreHome_JavascriptDisabled' => 'JavaScript must be enabled in order for you to use Piwik in standard view.<br />However, it seems JavaScript is either disabled or not supported by your browser.<br />To use standard view, enable JavaScript by changing your browser options, then %1stry again%2s.<br />',
	'CoreHome_TableNoData' => 'No data for this table.',
	'CoreHome_CategoryNoData' => 'No data in this category. Try to "Include all population".',
	'CoreHome_ShowJSCode' => 'Show the javascript code to insert',
	'CoreHome_IncludeAllPopulation_js' => 'Include all population',
	'CoreHome_ExcludeLowPopulation_js' => 'Exclude low population',
	'CoreHome_PageOf_js' => '%s of %s',
	'CoreHome_Loading_js' => 'Loading...',
	'CoreHome_LocalizedDateFormat' => '%A %d %B %Y',
	'CoreHome_PeriodDay' => 'Day',
	'CoreHome_PeriodWeek' => 'Week',
	'CoreHome_PeriodMonth' => 'Month',
	'CoreHome_PeriodYear' => 'Year',
	'CoreHome_DaySu_js' => 'Su',
	'CoreHome_DayMo_js' => 'Mo',
	'CoreHome_DayTu_js' => 'Tu',
	'CoreHome_DayWe_js' => 'We',
	'CoreHome_DayTh_js' => 'Th',
	'CoreHome_DayFr_js' => 'Fr',
	'CoreHome_DaySa_js' => 'Sa',
	'CoreHome_MonthJanuary_js' => 'January',
	'CoreHome_MonthFebruary_js' => 'February',
	'CoreHome_MonthMarch_js' => 'March',
	'CoreHome_MonthApril_js' => 'April',
	'CoreHome_MonthMay_js' => 'May',
	'CoreHome_MonthJune_js' => 'June',
	'CoreHome_MonthJuly_js' => 'July',
	'CoreHome_MonthAugust_js' => 'August',
	'CoreHome_MonthSeptember_js' => 'September',
	'CoreHome_MonthOctober_js' => 'October',
	'CoreHome_MonthNovember_js' => 'November',
	'CoreHome_MonthDecember_js' => 'December',
	'CoreUpdater_UpdateTitle' => 'Piwik &rsaquo; Update',
	'CoreUpdater_UpdateRequired' => 'Upgrade Required',
	'CoreUpdater_YourDatabaseIsOutOfDate' => 'Your Piwik database is out-of-date, and must be upgraded before you can continue.',
	'CoreUpdater_PiwikWillBeUpgradedToVersionX' => 'Piwik will be upgraded to version %s.',
	'CoreUpdater_TheFollowingPluginsWillBeUpgradedX' => 'The following plugins will be upgraded: %s.',
	'CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient' => 'The upgrade process may take a while, so please be patient.',
	'CoreUpdater_UpgradePiwik' => 'Upgrade Piwik',
	'CoreUpdater_HelpMessageContent' => 'Check the %s Piwik FAQ %s which has tried to explain most common errors during upgrade. %s Ask your system administrator - they may be able to help you with the error which is most likely related to your server or MySQL setup.',
	'CoreUpdater_CriticalErrorDuringTheUpgradeProcess' => 'Critical Error during the upgrade process:',
	'CoreUpdater_HelpMessageIntroductionWhenError' => 'The above is the core error message. It should help explain the cause, but if you require further help please:',
	'CoreUpdater_HelpMessageIntroductionWhenWarning' => 'The upgrade completed successfuly, however there were issues during the process. Please read the above descriptions for details. For further help:',
	'CoreUpdater_UpgradeComplete' => 'Upgrade complete!',
	'CoreUpdater_WarningMessages' => 'Warning messages:',
	'CoreUpdater_ErrorDuringPluginsUpdates' => 'Error during plugin updates:',
	'CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins' => 'We automatically deactivated the following plugins: %s',
	'CoreUpdater_PiwikHasBeenSuccessfullyUpgraded' => 'Piwik has been successfully upgraded!',
	'CoreUpdater_ContinueToPiwik' => 'Continue to Piwik',
	'Actions_Actions' => 'Actions',
	'Actions_SubmenuPages' => 'Pages',
	'Actions_SubmenuOutlinks' => 'Outlinks',
	'Actions_SubmenuDownloads' => 'Downloads',
	'Dashboard_Dashboard' => 'Dashboard',
	'Dashboard_AddWidget' => 'Add a widget...',
	'Dashboard_DeleteWidgetConfirm' => 'Are you sure you want to delete this widget from the dashboard?',
	'Dashboard_SelectWidget' => 'Select the widget to add in the dashboard',
	'Dashboard_AddPreviewedWidget' => 'Add previewed widget to the dashboard',
	'Dashboard_WidgetPreview' => 'Widget preview',
	'Dashboard_TitleWidgetInDashboard_js' => 'Widget already in dashboard',
	'Dashboard_TitleClickToAdd_js' => 'Click to add to dashboard',
	'Dashboard_LoadingPreview_js' => 'Loading preview, please wait...',
	'Dashboard_LoadingWidget_js' => 'Loading widget, please wait...',
	'Dashboard_WidgetNotFound_js' => 'Widget not found',
	'Referers_Referers' => 'Referers',
	'Referers_SearchEngines' => 'Search Engines',
	'Referers_Keywords' => 'Keywords',
	'Referers_DirectEntry' => 'Direct Entry',
	'Referers_Websites' => 'Websites',
	'Referers_Partners' => 'Partners',
	'Referers_Newsletters' => 'Newsletters',
	'Referers_Campaigns' => 'Campaigns',
	'Referers_Evolution' => 'Evolution over the period',
	'Referers_Type' => 'Referer Type',
	'Referers_TypeDirectEntries' => '%s direct entries',
	'Referers_TypeSearchEngines' => '%s from search engines',
	'Referers_TypePartners' => '%s from partners',
	'Referers_TypeWebsites' => '%s from websites',
	'Referers_TypeNewsletters' => '%s from newsletters',
	'Referers_TypeCampaigns' => '%s from campaigns',
	'Referers_Other' => 'Other',
	'Referers_OtherDistinctSearchEngines' => '%s distinct search engines',
	'Referers_OtherDistinctKeywords' => '%s distinct keywords',
	'Referers_OtherDistinctWebsites' => '%1s distinct websites (using %2s distinct urls)',
	'Referers_OtherDistinctPartners' => '%1s distinct partners (using %2s distinct urls)',
	'Referers_OtherDistinctCampaigns' => '%s distinct campaigns',
	'Referers_TagCloud' => 'Tag cloud output',
	'Referers_SubmenuEvolution' => 'Evolution',
	'Referers_SubmenuSearchEngines' => 'Search engines & keywords',
	'Referers_SubmenuWebsites' => 'Websites',
	'Referers_SubmenuCampaigns' => 'Campaigns',
	'Referers_SubmenuPartners' => 'Partners',
	'Referers_WidgetKeywords' => 'List of Keywords',
	'Referers_WidgetPartners' => 'List of Partners',
	'Referers_WidgetCampaigns' => 'List of Campaigns',
	'Referers_WidgetExternalWebsites' => 'List of external Websites',
	'Referers_WidgetSearchEngines' => 'Best search engines',
	'Referers_WidgetOverview' => 'Overview',
	'UserSettings_BrowserFamilies' => 'Browser families',
	'UserSettings_Browsers' => 'Browsers',
	'UserSettings_Plugins' => 'Plugins',
	'UserSettings_Configurations' => 'Configurations',
	'UserSettings_OperatinsSystems' => 'Operating systems',
	'UserSettings_Resolutions' => 'Resolutions',
	'UserSettings_WideScreen' => 'Wide Screen',
	'UserSettings_WidgetResolutions' => 'Screen resolutions',
	'UserSettings_WidgetBrowsers' => 'Visitor browsers',
	'UserSettings_WidgetPlugins' => 'List of Plugins',
	'UserSettings_WidgetWidescreen' => 'Normal / Widescreen',
	'UserSettings_WidgetBrowserFamilies' => 'Browsers by family',
	'UserSettings_WidgetOperatingSystems' => 'Operating systems',
	'UserSettings_WidgetGlobalVisitors' => 'Global visitors configuration',
	'UserSettings_SubmenuSettings' => 'Settings',
	'UserCountry_Country' => 'Country',
	'UserCountry_Continent' => 'Continent',
	'UserCountry_DistinctCountries' => '%s distinct countries',
	'UserCountry_SubmenuLocations' => 'Locations',
	'UserCountry_WidgetContinents' => 'Visitor continents',
	'UserCountry_WidgetCountries' => 'Visitor countries',
	'UserCountry_country_ac' => 'Ascension Islands',
	'UserCountry_country_ad' => 'Andorra',
	'UserCountry_country_ae' => 'United Arab Emirates',
	'UserCountry_country_af' => 'Afghanistan',
	'UserCountry_country_ag' => 'Antigua and Barbuda',
	'UserCountry_country_ai' => 'Anguilla',
	'UserCountry_country_al' => 'Albania',
	'UserCountry_country_am' => 'Armenia',
	'UserCountry_country_an' => 'Netherlands Antilles',
	'UserCountry_country_ao' => 'Angola',
	'UserCountry_country_aq' => 'Antarctica',
	'UserCountry_country_ar' => 'Argentina',
	'UserCountry_country_as' => 'American Samoa',
	'UserCountry_country_at' => 'Austria',
	'UserCountry_country_au' => 'Australia',
	'UserCountry_country_aw' => 'Aruba',
	'UserCountry_country_az' => 'Azerbaijan',
	'UserCountry_country_ba' => 'Bosnia and Herzegovina',
	'UserCountry_country_bb' => 'Barbados',
	'UserCountry_country_bd' => 'Bangladesh',
	'UserCountry_country_be' => 'Belgium',
	'UserCountry_country_bf' => 'Burkina Faso',
	'UserCountry_country_bg' => 'Bulgaria',
	'UserCountry_country_bh' => 'Bahrain',
	'UserCountry_country_bi' => 'Burundi',
	'UserCountry_country_bj' => 'Benin',
	'UserCountry_country_bm' => 'Bermuda',
	'UserCountry_country_bn' => 'Bruneo',
	'UserCountry_country_bo' => 'Bolivia',
	'UserCountry_country_br' => 'Brazil',
	'UserCountry_country_bs' => 'Bahamas',
	'UserCountry_country_bt' => 'Bhutan',
	'UserCountry_country_bv' => 'Bouvet Island',
	'UserCountry_country_bw' => 'Botswana',
	'UserCountry_country_by' => 'Belarus',
	'UserCountry_country_bz' => 'Belize',
	'UserCountry_country_ca' => 'Canada',
	'UserCountry_country_cc' => 'Cocos (Keeling) Islands',
	'UserCountry_country_cd' => 'Congo, The Democratic Republic of the',
	'UserCountry_country_cf' => 'Central African Republic',
	'UserCountry_country_cg' => 'Congo',
	'UserCountry_country_ch' => 'Switzerland',
	'UserCountry_country_ci' => 'Cote D\'Ivoire',
	'UserCountry_country_ck' => 'Cook Islands',
	'UserCountry_country_cl' => 'Chile',
	'UserCountry_country_cm' => 'Cameroon',
	'UserCountry_country_cn' => 'China',
	'UserCountry_country_co' => 'Colombia',
	'UserCountry_country_cr' => 'Costa Rica',
	'UserCountry_country_cs' => 'Serbia Montenegro',
	'UserCountry_country_cu' => 'Cuba',
	'UserCountry_country_cv' => 'Cape Verde',
	'UserCountry_country_cx' => 'Christmas Island',
	'UserCountry_country_cy' => 'Cyprus',
	'UserCountry_country_cz' => 'Czech Republic',
	'UserCountry_country_de' => 'Germany',
	'UserCountry_country_dj' => 'Djibouti',
	'UserCountry_country_dk' => 'Denmark',
	'UserCountry_country_dm' => 'Dominica',
	'UserCountry_country_do' => 'Dominican Republic',
	'UserCountry_country_dz' => 'Algeria',
	'UserCountry_country_ec' => 'Ecuador',
	'UserCountry_country_ee' => 'Estonia',
	'UserCountry_country_eg' => 'Egypt',
	'UserCountry_country_eh' => 'Western Sahara',
	'UserCountry_country_er' => 'Eritrea',
	'UserCountry_country_es' => 'Spain',
	'UserCountry_country_et' => 'Ethiopia',
	'UserCountry_country_fi' => 'Finland',
	'UserCountry_country_fj' => 'Fiji',
	'UserCountry_country_fk' => 'Falkland Islands (Malvinas)',
	'UserCountry_country_fm' => 'Micronesia, Federated States of',
	'UserCountry_country_fo' => 'Faroe Islands',
	'UserCountry_country_fr' => 'France',
	'UserCountry_country_ga' => 'Gabon',
	'UserCountry_country_gd' => 'Grenada',
	'UserCountry_country_ge' => 'Georgia',
	'UserCountry_country_gf' => 'French Guyana',
	'UserCountry_country_gg' => 'Guernsey',
	'UserCountry_country_gh' => 'Ghana',
	'UserCountry_country_gi' => 'Gibraltar',
	'UserCountry_country_gl' => 'Greenland',
	'UserCountry_country_gm' => 'Gambia',
	'UserCountry_country_gn' => 'Guinea',
	'UserCountry_country_gp' => 'Guadeloupe',
	'UserCountry_country_gq' => 'Equatorial Guinea',
	'UserCountry_country_gr' => 'Greece',
	'UserCountry_country_gs' => 'South Georgia and the South Sandwich Islands',
	'UserCountry_country_gt' => 'Guatemala',
	'UserCountry_country_gu' => 'Guam',
	'UserCountry_country_gw' => 'Guinea-Bissau',
	'UserCountry_country_gy' => 'Guyana',
	'UserCountry_country_hk' => 'Hong Kong',
	'UserCountry_country_hm' => 'Heard Island and McDonald Islands',
	'UserCountry_country_hn' => 'Honduras',
	'UserCountry_country_hr' => 'Croatia',
	'UserCountry_country_ht' => 'Haiti',
	'UserCountry_country_hu' => 'Hungary',
	'UserCountry_country_id' => 'Indonesia',
	'UserCountry_country_ie' => 'Ireland',
	'UserCountry_country_il' => 'Israel',
	'UserCountry_country_im' => 'Man Island',
	'UserCountry_country_in' => 'India',
	'UserCountry_country_io' => 'British Indian Ocean Territory',
	'UserCountry_country_iq' => 'Iraq',
	'UserCountry_country_ir' => 'Iran, Islamic Republic of',
	'UserCountry_country_is' => 'Iceland',
	'UserCountry_country_it' => 'Italy',
	'UserCountry_country_je' => 'Jersey',
	'UserCountry_country_jm' => 'Jamaica',
	'UserCountry_country_jo' => 'Jordan',
	'UserCountry_country_jp' => 'Japan',
	'UserCountry_country_ke' => 'Kenya',
	'UserCountry_country_kg' => 'Kyrgyzstan',
	'UserCountry_country_kh' => 'Cambodia',
	'UserCountry_country_ki' => 'Kiribati',
	'UserCountry_country_km' => 'Comoros',
	'UserCountry_country_kn' => 'Saint Kitts and Nevis',
	'UserCountry_country_kp' => 'Korea, Democratic People\'s Republic of',
	'UserCountry_country_kr' => 'Korea, Republic of',
	'UserCountry_country_kw' => 'Kuwait',
	'UserCountry_country_ky' => 'Cayman Islands',
	'UserCountry_country_kz' => 'Kazakhstan',
	'UserCountry_country_la' => 'Laos',
	'UserCountry_country_lb' => 'Lebanon',
	'UserCountry_country_lc' => 'Saint Lucia',
	'UserCountry_country_li' => 'Liechtenstein',
	'UserCountry_country_lk' => 'Sri Lanka',
	'UserCountry_country_lr' => 'Liberia',
	'UserCountry_country_ls' => 'Lesotho',
	'UserCountry_country_lt' => 'Lithuania',
	'UserCountry_country_lu' => 'Luxembourg',
	'UserCountry_country_lv' => 'Latvia',
	'UserCountry_country_ly' => 'Libya',
	'UserCountry_country_ma' => 'Morocco',
	'UserCountry_country_mc' => 'Monaco',
	'UserCountry_country_md' => 'Moldova, Republic of',
	'UserCountry_country_mg' => 'Madagascar',
	'UserCountry_country_mh' => 'Marshall Islands',
	'UserCountry_country_mk' => 'Macedonia',
	'UserCountry_country_ml' => 'Mali',
	'UserCountry_country_mm' => 'Myanmar',
	'UserCountry_country_mn' => 'Mongolia',
	'UserCountry_country_mo' => 'Macau',
	'UserCountry_country_mp' => 'Northern Mariana Islands',
	'UserCountry_country_mq' => 'Martinique',
	'UserCountry_country_mr' => 'Mauritania',
	'UserCountry_country_ms' => 'Montserrat',
	'UserCountry_country_mt' => 'Malta',
	'UserCountry_country_mu' => 'Mauritius',
	'UserCountry_country_mv' => 'Maldives',
	'UserCountry_country_mw' => 'Malawi',
	'UserCountry_country_mx' => 'Mexico',
	'UserCountry_country_my' => 'Malaysia',
	'UserCountry_country_mz' => 'Mozambique',
	'UserCountry_country_na' => 'Namibia',
	'UserCountry_country_nc' => 'New Caledonia',
	'UserCountry_country_ne' => 'Niger',
	'UserCountry_country_nf' => 'Norfolk Island',
	'UserCountry_country_ng' => 'Nigeria',
	'UserCountry_country_ni' => 'Nicaragua',
	'UserCountry_country_nl' => 'Netherlands',
	'UserCountry_country_no' => 'Norway',
	'UserCountry_country_np' => 'Nepal',
	'UserCountry_country_nr' => 'Nauru',
	'UserCountry_country_nu' => 'Niue',
	'UserCountry_country_nz' => 'New Zealand',
	'UserCountry_country_om' => 'Oman',
	'UserCountry_country_pa' => 'Panama',
	'UserCountry_country_pe' => 'Peru',
	'UserCountry_country_pf' => 'French Polynesia',
	'UserCountry_country_pg' => 'Papua New Guinea',
	'UserCountry_country_ph' => 'Philippines',
	'UserCountry_country_pk' => 'Pakistan',
	'UserCountry_country_pl' => 'Poland',
	'UserCountry_country_pm' => 'Saint Pierre and Miquelon',
	'UserCountry_country_pn' => 'Pitcairn',
	'UserCountry_country_pr' => 'Puerto Rico',
	'UserCountry_country_ps' => 'Palestinian Territory',
	'UserCountry_country_pt' => 'Portugal',
	'UserCountry_country_pw' => 'Palau',
	'UserCountry_country_py' => 'Paraguay',
	'UserCountry_country_qa' => 'Qatar',
	'UserCountry_country_re' => 'Reunion Island',
	'UserCountry_country_ro' => 'Romania',
	'UserCountry_country_ru' => 'Russian Federation',
	'UserCountry_country_rs' => 'Russia',
	'UserCountry_country_rw' => 'Rwanda',
	'UserCountry_country_sa' => 'Saudi Arabia',
	'UserCountry_country_sb' => 'Solomon Islands',
	'UserCountry_country_sc' => 'Seychelles',
	'UserCountry_country_sd' => 'Sudan',
	'UserCountry_country_se' => 'Sweden',
	'UserCountry_country_sg' => 'Singapore',
	'UserCountry_country_sh' => 'Saint Helena',
	'UserCountry_country_si' => 'Slovenia',
	'UserCountry_country_sj' => 'Svalbard',
	'UserCountry_country_sk' => 'Slovakia',
	'UserCountry_country_sl' => 'Sierra Leone',
	'UserCountry_country_sm' => 'San Marino',
	'UserCountry_country_sn' => 'Senegal',
	'UserCountry_country_so' => 'Somalia',
	'UserCountry_country_sr' => 'Suriname',
	'UserCountry_country_st' => 'Sao Tome and Principe',
	'UserCountry_country_su' => 'Old U.S.S.R',
	'UserCountry_country_sv' => 'El Salvador',
	'UserCountry_country_sy' => 'Syrian Arab Republic',
	'UserCountry_country_sz' => 'Swaziland',
	'UserCountry_country_tc' => 'Turks and Caicos Islands',
	'UserCountry_country_td' => 'Chad',
	'UserCountry_country_tf' => 'French Southern Territories',
	'UserCountry_country_tg' => 'Togo',
	'UserCountry_country_th' => 'Thailand',
	'UserCountry_country_tj' => 'Tajikistan',
	'UserCountry_country_tk' => 'Tokelau',
	'UserCountry_country_tm' => 'Turkmenistan',
	'UserCountry_country_tn' => 'Tunisia',
	'UserCountry_country_to' => 'Tonga',
	'UserCountry_country_tp' => 'East Timor',
	'UserCountry_country_tr' => 'Turkey',
	'UserCountry_country_tt' => 'Trinidad and Tobago',
	'UserCountry_country_tv' => 'Tuvalu',
	'UserCountry_country_tw' => 'Taiwan',
	'UserCountry_country_tz' => 'Tanzania, United Republic of',
	'UserCountry_country_ua' => 'Ukraine',
	'UserCountry_country_ug' => 'Uganda',
	'UserCountry_country_uk' => 'United Kingdom',
	'UserCountry_country_gb' => 'Great Britain',
	'UserCountry_country_um' => 'United States Minor Outlying Islands',
	'UserCountry_country_us' => 'United States',
	'UserCountry_country_uy' => 'Uruguay',
	'UserCountry_country_uz' => 'Uzbekistan',
	'UserCountry_country_va' => 'Vatican City',
	'UserCountry_country_vc' => 'Saint Vincent and the Grenadines',
	'UserCountry_country_ve' => 'Venezuela',
	'UserCountry_country_vg' => 'Virgin Islands, British',
	'UserCountry_country_vi' => 'Virgin Islands, U.S.',
	'UserCountry_country_vn' => 'Vietnam',
	'UserCountry_country_vu' => 'Vanuatu',
	'UserCountry_country_wf' => 'Wallis and Futuna',
	'UserCountry_country_ws' => 'Samoa',
	'UserCountry_country_ye' => 'Yemen',
	'UserCountry_country_yt' => 'Mayotte',
	'UserCountry_country_yu' => 'Yugoslavia',
	'UserCountry_country_za' => 'South Africa',
	'UserCountry_country_zm' => 'Zambia',
	'UserCountry_country_zr' => 'Zaire',
	'UserCountry_country_zw' => 'Zimbabwe',
	'UserCountry_continent_eur' => 'Europe',
	'UserCountry_continent_afr' => 'Africa',
	'UserCountry_continent_asi' => 'Asia',
	'UserCountry_continent_ams' => 'South and Central America',
	'UserCountry_continent_amn' => 'North America',
	'UserCountry_continent_oce' => 'Oceania',
	'VisitsSummary_NbVisits' => '%s visits',
	'VisitsSummary_NbUniqueVisitors' => '%s unique visitors',
	'VisitsSummary_NbActions' => '%s actions (page views)',
	'VisitsSummary_TotalTime' => '%s total time spent by the visitors',
	'VisitsSummary_MaxNbActions' => '%s max actions in one visit',
	'VisitsSummary_NbBounced' => '%s visitors have bounced (left the site after one page)',
	'VisitsSummary_Evolution' => 'Evolution on the last 30 %ss',
	'VisitsSummary_Report' => 'Report',
	'VisitsSummary_GenerateTime' => '%s seconds to generate the page',
	'VisitsSummary_GenerateQueries' => '%s queries executed',
	'VisitsSummary_WidgetLastVisits' => 'Last visits graph',
	'VisitsSummary_WidgetVisits' => 'Visits overview',
	'VisitsSummary_WidgetLastVisitors' => 'Last unique visitors graph',
	'VisitsSummary_WidgetOverviewGraph' => 'Overview with graph',
	'VisitsSummary_SubmenuOverview' => 'Overview',
	'VisitFrequency_Evolution' => 'Evolution over the period',
	'VisitFrequency_ReturnVisits' => '%s returning visits',
	'VisitFrequency_ReturnActions' => '%s actions by the returning visits',
	'VisitFrequency_ReturnMaxActions' => '%s maximum actions by a returning visit',
	'VisitFrequency_ReturnTotalTime' => '%s total time spent by returning visits',
	'VisitFrequency_ReturnBounces' => '%s times that a returning visit has bounced (left the site after one page)',
	'VisitFrequency_WidgetOverview' => 'Frequency overview',
	'VisitFrequency_WidgetGraphReturning' => 'Graph returning visits',
	'VisitFrequency_SubmenuFrequency' => 'Frequency',
	'VisitTime_LocalTime' => 'Visits per local time',
	'VisitTime_ServerTime' => 'Visits per server time',
	'VisitTime_WidgetLocalTime' => 'Visits by local time',
	'VisitTime_WidgetServerTime' => 'Visits by server time',
	'VisitTime_SubmenuTimes' => 'Times',
	'VisitTime_NHour' => '%sh',
	'VisitorInterest_VisitsPerDuration' => 'Visits per visit duration',
	'VisitorInterest_VisitsPerNbOfPages' => 'Visits per number of pages',
	'VisitorInterest_WidgetLengths' => 'Visits lengths',
	'VisitorInterest_WidgetPages' => 'Pages per visit',
	'VisitorInterest_SubmenuFrequencyLoyalty' => 'Frequency & Loyalty',
	'VisitorInterest_PlusXMin' => '%s min',
	'VisitorInterest_BetweenXYMinutes' => '%1s-%2s min',
	'VisitorInterest_OnePage' => '1 page',
	'VisitorInterest_NPages' => '%s pages',
	'VisitorInterest_BetweenXYSeconds' => '%1s-%2ss',
	'Login_LoginPasswordNotCorrect' => 'Username & Password not correct',
	'Login_Login' => 'Username',
	'Login_Password' => 'Password',
	'Login_LoginOrEmail' => 'Login or E-mail',
	'Login_LogIn' => 'Sign in',
	'Login_Logout' => 'Sign out',
	'Login_LostYourPassword' => 'Lost your password?',
	'Login_RemindPassword' => 'Remind password',
	'Login_PasswordReminder' => 'Please enter your username or e-mail address. You will receive a new password via e-mail.',
	'Login_InvalidUsernameEmail' => 'Invalid username and/or e-mail address',
	'Login_MailTopicPasswordRecovery' => 'Password recovery',
	'Login_MailPasswordRecoveryBody' => 'Hi %1s, \n\n Your new password is: %2s \n\n You can login now at: %3s',
	'Login_PasswordSent' => 'Password has been just sent. Check your e-mail.',
	'Login_ContactAdmin' => 'Possible reason: your host may have disabled the mail() function. <br />Please contact your Piwik administrator.',
	'UsersManager_UsersManagement' => 'Users Management',
	'UsersManager_UsersManagementMainDescription' => 'Create new users or update the existing users. You can then set their permissions above.',
	'UsersManager_ManageAccess' => 'Manage access',
	'UsersManager_MainDescription' => 'Decide which users have which Piwik access on your Websites. You can also set the permissions on all the Websites at once.',
	'UsersManager_Sites' => 'Sites',
	'UsersManager_AllWebsites' => 'All websites',
	'UsersManager_ApplyToAllWebsites' => 'Apply to all websites',
	'UsersManager_User' => 'User',
	'UsersManager_PrivNone' => 'No access',
	'UsersManager_PrivView' => 'View',
	'UsersManager_PrivAdmin' => 'Admin',
	'UsersManager_ChangeAllConfirm' => 'Are you sure you want to change \'%s\' permissions on all the websites?',
	'UsersManager_Login' => 'Login',
	'UsersManager_Password' => 'Password',
	'UsersManager_Email' => 'Email',
	'UsersManager_Alias' => 'Alias',
	'UsersManager_Token' => 'token_auth',
	'UsersManager_Edit' => 'Edit',
	'UsersManager_AddUser' => 'Add a new user',
	'UsersManager_MenuUsers' => 'Users',
	'UsersManager_DeleteConfirm_js' => 'Are you sure you want to delete the user %s?',
	'UsersManager_ExceptionLoginExists' => 'Login \'%s\' already exists.',
	'UsersManager_ExceptionEmailExists' => 'User with email \'%s\' already exists.',
	'UsersManager_ExceptionInvalidLogin' => 'The login must contain only letters, numbers, or the characters \'_\' or \'-\' or \'.\'',
	'UsersManager_ExceptionInvalidPassword' => 'The password length must be between 6 and 26 characters.',
	'UsersManager_ExceptionInvalidEmail' => 'The email doesn\'t have a valid format.',
	'UsersManager_ExceptionDeleteDoesNotExist' => 'User \'%s\' doesn\'t exist therefore it can\'t be deleted.',
	'UsersManager_ExceptionAdminAnonymous' => 'You cannot grant \'admin\' access to the \'anonymous\' user.',
	'UsersManager_ExceptionEditAnonymous' => 'The anonymous user cannot be edited or deleted. It is used by Piwik to define a user that has not logged in yet. For example, you can make your statistics public by granting the \'view\' access to the \'anonymous\' user.',
	'UsersManager_ExceptionUserDoesNotExist' => 'User \'%s\' doesn\'t exist.',
	'UsersManager_ExceptionAccessValues' => 'The parameter access must have one of the following values : [ %s ]',
	'SitesManager_Sites' => 'Sites',
	'SitesManager_WebsitesManagement' => 'Websites Management',
	'SitesManager_MainDescription' => 'Your Web Analytics reports need Websites! Add, update, delete Websites, and show the Javascript to insert in your pages.',
	'SitesManager_JsCode' => 'Javascript code',
	'SitesManager_JsCodeHelp' => 'Here is the javascript code to include on all your pages',
	'SitesManager_ShowJsCode' => 'show code',
	'SitesManager_NoWebsites' => 'You don\'t have any website to administrate.',
	'SitesManager_AddSite' => 'Add a new Site',
	'SitesManager_Id' => 'Id',
	'SitesManager_Name' => 'Name',
	'SitesManager_Urls' => 'URLs',
	'SitesManager_MenuSites' => 'Sites',
	'SitesManager_DeleteConfirm_js' => 'Are you sure you want to delete the website %s?',
	'SitesManager_ExceptionDeleteSite' => 'It is not possible to delete this website as it is the only registered website. Add a new website first, then delete this one.',
	'SitesManager_ExceptionNoUrl' => 'You must specify at least one URL for the site.',
	'SitesManager_ExceptionEmptyName' => 'The site name can\'t be empty.',
	'SitesManager_ExceptionInvalidUrl' => 'The url \'%s\' is not a valid URL.',
	'Installation_Installation' => 'Installation',
	'Installation_InstallationStatus' => 'Installation status',
	'Installation_PercentDone' => '%s %% Done',
	'Installation_NoConfigFound' => 'The Piwik configuration file couldn\'t be found and you are trying to access a Piwik page.<br /><b>&nbsp;&nbsp;&raquo; You can <a href=\'index.php\'>install Piwik now</a></b><br /><small>If you installed Piwik before and have some tables in your DB, don\'t worry, you can reuse the same tables and keep your existing data!</small>',
	'Installation_MysqlSetup' => 'Mysql database setup',
	'Installation_MysqlErrorConnect' => 'Error while trying to connect to the Mysql database',
	'Installation_JsTag' => 'Javascript tag',
	'Installation_JsTagHelp' => '<p>To count all visitors, you must insert the javascript code on all of your pages.</p><p>Your pages do not have to be made with PHP, Piwik will work on all kinds of pages (whether it is HTML, ASP, Perl or any other languages).</p><p>Here is the code you have to insert: (copy and paste on all your pages) </p>',
	'Installation_Congratulations' => 'Congratulations',
	'Installation_CongratulationsHelp' => '<p>Congratulations! Your Piwik installation is complete.</p><p>Make sure your javascript code is entered on your pages, and wait for your first visitors!</p>',
	'Installation_ContinueToPiwik' => 'Continue to Piwik',
	'Installation_SetupWebsite' => 'Setup a website',
	'Installation_SetupWebsiteError' => 'There was an error when adding the website',
	'Installation_GeneralSetup' => 'General Setup',
	'Installation_GeneralSetupSuccess' => 'General Setup configured with success',
	'Installation_SystemCheck' => 'System check',
	'Installation_SystemCheckPhp' => 'PHP version',
	'Installation_SystemCheckPdo' => 'Pdo extension',
	'Installation_SystemCheckPdoMysql' => 'Pdo_Mysql extension',
	'Installation_SystemCheckPdoError' => 'You need to enable the PDO and PDO_MYSQL extensions in your php.ini file.',
	'Installation_SystemCheckPdoHelp' => 'On a windows server you can add the following lines in your php.ini %s <br /><br />On a Linux server you can compile php with the following option %s In your php.ini, add the following lines %s<br /><br />More information on the <a style="color:red" href="http://php.net/pdo">PHP website</a>.',
	'Installation_SystemCheckWriteDirs' => 'Directories with write access',
	'Installation_SystemCheckWriteDirsHelp' => 'To fix this error on your Linux system, try typing in the following command(s)',
	'Installation_SystemCheckMemoryLimit' => 'Memory limit',
	'Installation_SystemCheckMemoryLimitHelp' => 'On a high traffic website, the archiving process may require more memory than currently allowed.<br />See the directive memory_limit in your php.ini file if necessary.',
	'Installation_SystemCheckGD' => 'GD &gt; 2.x (graphics)',
	'Installation_SystemCheckGDHelp' => 'The sparklines (small graphs) will not work.',
	'Installation_SystemCheckTimeLimit' => 'set_time_limit() allowed',
	'Installation_SystemCheckTimeLimitHelp' => 'On a high traffic website, executing the archiving process may require more time than currently allowed.<br />See the directive max_execution_time  in your php.ini file if necessary',
	'Installation_SystemCheckMail' => 'mail() allowed',
	'Installation_SystemCheckError' => 'An error occured - must be fixed before you proceed',
	'Installation_SystemCheckWarning' => 'Piwik will work normally but some features may be missing',
	'Installation_Tables' => 'Creating the tables',
	'Installation_TablesWarning' => 'Some <span id="linkToggle">Piwik tables</span> are already installed in the DB',
	'Installation_TablesFound' => 'The following tables have been found in the database',
	'Installation_TablesWarningHelp' => 'Either choose to reuse the existing database tables or select a clean install to erase all existing data in the database.',
	'Installation_TablesReuse' => 'Reuse the existing tables',
	'Installation_TablesDelete' => 'Delete the detected tables',
	'Installation_TablesDeletedSuccess' => 'Existing Piwik tables deleted with success',
	'Installation_TablesCreatedSuccess' => 'Tables created with success!',
	'Installation_DatabaseCreatedSuccess' => 'Database %s created with success!',
	'Installation_TablesDeleteConfirm' => 'Are you sure you want to delete all the Piwik tables from this database?',
	'Installation_Welcome' => 'Welcome!',
	'Installation_WelcomeHelp' => '<p>Piwik is an open source web analytics software that makes it easy to get the information you want from your visitors.</p><p>This process is split up into %s easy steps and will take around 5 minutes.</p>',
	'Provider_WidgetProviders' => 'Providers',
	'Provider_SubmenuLocationsProvider' => 'Locations & provider',
	'DBStats_DatabaseUsage' => 'Database usage',
	'DBStats_MainDescription' => 'Piwik is storing all your web analytics data in the Mysql database. Currently, Piwik tables are using %s.',
	'DBStats_Table' => 'Table',
	'DBStats_RowNumber' => 'Row number',
	'DBStats_DataSize' => 'Data size',
	'DBStats_IndexSize' => 'Index size',
	'TranslationsAdmin_MenuTranslations' => 'Translations',
	'TranslationsAdmin_MenuLanguages' => 'Languages',
	'TranslationsAdmin_Plugin' => 'Plugin',
	'TranslationsAdmin_Definition' => 'Definition',
	'TranslationsAdmin_DefaultString' => 'Default string (English)',
	'TranslationsAdmin_TranslationString' => 'Translation string (current language: %s)',
	'TranslationsAdmin_Translations' => 'Translations',
	'TranslationsAdmin_FixPermissions' => 'Please fix filesystem permissions',
	'TranslationsAdmin_AvailableLanguages' => 'Available languages',
	'TranslationsAdmin_AddLanguage' => 'Add language',
	'TranslationsAdmin_LanguageCode' => 'Language code',
	'TranslationsAdmin_Export' => 'Export language',
	'TranslationsAdmin_Import' => 'Import language',
);