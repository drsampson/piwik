{assign var=showSitesSelection value=false}
{assign var=showPeriodSelection value=false}
{include file="CoreAdminHome/templates/header.tpl"}

{if $isSuperUser}

<h2>{'PrivacyManager_TeaserHeadline'|translate}</h2>
<p>{'PrivacyManager_Teaser'|translate:'<a href="#anonymizeIPAnchor">':"</a>":'<a href="#deleteLogsAnchor">':"</a>":'<a href="#optOutAnchor">':"</a>"}
See also our official guide <b><a href='http://piwik.org/privacy/' target='_blank'>Web Analytics Privacy</a></b></p>

<a name="anonymizeIPAnchor"></a>
<h2>{'PrivacyManager_UseAnonymizeIp'|translate}</h2>
<form method="post" action="{url action=index form=formMaskLength}" id="formMaskLength" name="formMaskLength">
	<div id='anonymizeIpSettings'>
		<table class="adminTable" style='width:800px;'>
			<tr>
				<td width="250">{'PrivacyManager_UseAnonymizeIp'|translate}<br/>
					<span class="form-description">{'PrivacyManager_AnonymizeIpDescription'|translate}</span>
				</td>
				<td width='500'>
					<label><input type="radio" name="anonymizeIPEnable" value="1" {if $anonymizeIP.enabled eq '1'}
								  checked {/if}/> {'General_Yes'|translate}</label>
					<label><input type="radio" name="anonymizeIPEnable" value="0"
								  style="margin-left:20px;" {if $anonymizeIP.enabled eq '0'} checked {/if}/>  {'General_No'|translate}
					</label>
					<input type="hidden" name="token_auth" value="{$token_auth}"/>
					<input type="hidden" name="pluginName" value="{$anonymizeIP.name}"/>
				</td>
				<td width="200">
					{'AnonymizeIP_PluginDescription'|translate|inlineHelp}
				</td>
			</tr>
		</table>
	</div>
	<div id="anonymizeIPenabled">
		<table class="adminTable">
			<tr>
				<td width="250">{'PrivacyManager_AnonymizeIpMaskLengtDescription'|translate}</td>
				<td>
					<label><input type="radio" name="maskLength" value="1" {if $anonymizeIP.maskLength eq '1'}
								  checked {/if}/> {'PrivacyManager_AnonymizeIpMaskLength'|translate:"1":"192.168.100.xxx"}
					</label><br/>
					<label><input type="radio" name="maskLength" value="2" {if $anonymizeIP.maskLength eq '2'}
								  checked {/if}/> {'PrivacyManager_AnonymizeIpMaskLength'|translate:"2":"192.168.xxx.xxx"} {'General_Recommended'|translate}</label><br/>
					<label><input type="radio" name="maskLength" value="3" {if $anonymizeIP.maskLength eq '3'}
								  checked {/if}/> {'PrivacyManager_AnonymizeIpMaskLength'|translate:"3":"192.xxx.xxx.xxx"}</label>
				</td>
			</tr>
		</table>
	</div>
	<input type="submit" value="{'General_Save'|translate}" id="privacySettingsSubmit" class="submit"/>
</form>

<div class="ui-confirm" id="confirmDeleteSettings">
    <h2 id="deleteLogsConfirm">{'PrivacyManager_DeleteLogsConfirm'|translate}</h2>
    <h2 id="deleteReportsConfirm">{'PrivacyManager_DeleteReportsConfirm'|translate}</h2>
    <h2 id="deleteBothConfirm">{'PrivacyManager_DeleteBothConfirm'|translate}</h2>
    <input role="yes" type="button" value="{'General_Yes'|translate}" />
    <input role="no" type="button" value="{'General_No'|translate}" />
</div>

<div class="ui-confirm" id="saveSettingsBeforePurge">
	<h2>{'PrivacyManager_SaveSettingsBeforePurge'|translate}</h2>
	<input role="yes" type="button" value="{'General_Ok'|translate}"/>
</div>

<div class="ui-confirm" id="confirmPurgeNow">
	<h2>{'PrivacyManager_PurgeNowConfirm'|translate}</h2>
	<input role="yes" type="button" value="{'General_Yes'|translate}" />
	<input role="no" type="button" value="{'General_No'|translate}" />
</div>

<a name="deleteLogsAnchor"></a>
<h2>{'PrivacyManager_DeleteDataSettings'|translate}</h2>
<p>{'PrivacyManager_DeleteDataDescription'|translate}</p>
<form method="post" action="{url action=index form=formDeleteSettings}" id="formDeleteSettings" name="formMaskLength">
	<table class="adminTable" style='width:800px;'>
		<tr id='deleteLogSettingEnabled'>
			<td width="250">{'PrivacyManager_UseDeleteLog'|translate}<br/>

			</td>
			<td width='500'>
				<label><input type="radio" name="deleteEnable" value="1" {if $deleteData.config.delete_logs_enable eq '1'}
							  checked {/if}/> {'General_Yes'|translate}</label>
				<label><input type="radio" name="deleteEnable" value="0"
							  style="margin-left:20px;" {if $deleteData.config.delete_logs_enable eq '0'}
							  checked {/if}/>  {'General_No'|translate}
				</label>
				<span class="ajaxSuccess">
					{'PrivacyManager_DeleteLogDescription2'|translate}
					<a href="http://piwik.org/faq/general/#faq_125" target="_blank">
						{'General_ClickHere'|translate}
					</a>
				</span>
			</td>
			<td width="200">
				{'PrivacyManager_DeleteLogInfo'|translate:$deleteData.deleteTables|inlineHelp}
			</td>
		</tr>
		<tr id="deleteLogSettings">
			<td width="250">&nbsp;</td>
			<td width="500">
				<label>{'PrivacyManager_DeleteLogsOlderThan'|translate}
					<input type="text" id="deleteOlderThan" value="{$deleteData.config.delete_logs_older_than}" style="width:30px;"
						   name="deleteOlderThan"/>
					{'CoreHome_PeriodDays'|translate}</label><br/>
				<span class="form-description">{'PrivacyManager_LeastDaysInput'|translate:"7"}</span>
			</td>
			<td width="200">

			</td>
		</tr>
		<tr id='deleteReportsSettingEnabled'>
			<td width="250">{'PrivacyManager_UseDeleteReports'|translate}<br/>
			
			</td>
			<td width="500">
				<label><input type="radio" name="deleteReportsEnable" value="1" {if $deleteData.config.delete_reports_enable eq '1'}checked="true"{/if}/> {'General_Yes'|translate}</label>
				<label><input type="radio" name="deleteReportsEnable" value="0" {if $deleteData.config.delete_reports_enable eq '0'}checked="true"{/if} style="margin-left:20px;"/> {'General_No'|translate}</label>
				<span class="ajaxSuccess">
					{'PrivacyManager_DeleteReportsInfo'|translate}
				</span>
			</td>
			<td width="200">
				{'PrivacyManager_DeleteReportsDetailedInfo'|translate|inlineHelp}
			</td>
		</tr>
		<tr id='deleteReportsSettings'>
			<td width="250">&nbsp;</td>
			<td width="500">
				<label>{'PrivacyManager_DeleteReportsOlderThan'|translate}
					<input type="text" id="deleteReportsOlderThan" value="{$deleteData.config.delete_reports_older_than}" style="width:30px;"
						   name="deleteReportsOlderThan"/>
					{'CoreHome_PeriodMonths'|translate}
				</label><br/>
				<span class="form-description">{'PrivacyManager_LeastMonthsInput'|translate:"3"}</span><br/><br/>
				<label><input type="checkbox" name="deleteReportsKeepBasic" value="1" {if $deleteData.config.delete_reports_keep_basic_metrics}checked="true"{/if}>{'PrivacyManager_KeepBasicMetrics'|translate}<span class="form-description">{'General_Recommended'|translate}</span></input>
				</label><br/><br/>
				<label>{'PrivacyManager_KeepDataFor'|translate}</label><br/><br/>
				<input type="checkbox" name="deleteReportsKeepDay" value="1" {if $deleteData.config.delete_reports_keep_day_reports}checked="true"{/if}>{'General_DailyReports'|translate}</input><br/>
				<input type="checkbox" name="deleteReportsKeepWeek" value="1" {if $deleteData.config.delete_reports_keep_week_reports}checked="true"{/if}>{'General_WeeklyReports'|translate}</input><br/>
				<input type="checkbox" name="deleteReportsKeepMonth" value="1" {if $deleteData.config.delete_reports_keep_month_reports}checked="true"{/if}>{'General_MonthlyReports'|translate}<span class="form-description">{'General_Recommended'|translate}</span></input><br/>
				<input type="checkbox" name="deleteReportsKeepYear" value="1" {if $deleteData.config.delete_reports_keep_year_reports}checked="true"{/if}>{'General_YearlyReports'|translate}<span class="form-description">{'General_Recommended'|translate}</span></input><br/>
			</td>
			<td width="200">
			
			</td>
		</tr>
		<tr id="deleteDataEstimateSect">
			<td width="250">{'PrivacyManager_ReportsDataSavedEstimate'|translate}<br/></td>
			<td width="500">
				<div id="deleteDataEstimate">{include file="PrivacyManager/templates/databaseSize.tpl" dbStats=$deleteDbStats}</div>
				<span class='loadingPiwik' style='display:none'><img src='/themes/default/images/loading-blue.gif' /> {'General_LoadingData'|translate}</span>
			</td>
			<td width="200">
			
			</td>
		</tr>
		<tr id="deleteSchedulingSettings">
			<td width="250">{'PrivacyManager_DeleteSchedulingSettings'|translate}<br/></td>
			<td width="500">
				{'PrivacyManager_DeleteDataInterval'|translate}
				<select id="deleteLowestInterval" name="deleteLowestInterval">
					<option {if $deleteData.config.delete_logs_schedule_lowest_interval eq '1'} selected="selected" {/if}
																								value="1"> {'CoreHome_PeriodDay'|translate}</option>
					<option {if $deleteData.config.delete_logs_schedule_lowest_interval eq '7'} selected="selected" {/if}
																								value="7">{'CoreHome_PeriodWeek'|translate}</option>
					<option {if $deleteData.config.delete_logs_schedule_lowest_interval eq '30'} selected="selected" {/if}
																								 value="30">{'CoreHome_PeriodMonth'|translate}</option>
				</select><br/><br/>
				<em><a id="purgeDataNowLink" href="#">{'PrivacyManager_PurgeNow'|translate}</a></em>
				<span class='loadingPiwik' style='display:none'><img src='/themes/default/images/loading-blue.gif' /> {'PrivacyManager_PurgingData'|translate}</span>
			</td>
			<td width="200">
				{capture assign=purgeStats}
					{if $deleteData.lastRun}<strong>{'PrivacyManager_LastDelete'|translate}:</strong>
						{$deleteData.lastRunPretty}
						<br/><br/>{/if}
					<strong>{'PrivacyManager_NextDelete'|translate}:</strong>
					{$deleteData.nextRunPretty}
				{/capture}
				{$purgeStats|inlineHelp}
			</td>
		</tr>
	</table>
	<input type="button" value="{'General_Save'|translate}" id="deleteLogSettingsSubmit" class="submit"/>
</form>

{/if}

<a name="optOutAnchor"></a>
<h2>{'CoreAdminHome_OptOutForYourVisitors'|translate}</h2>
<p>{'CoreAdminHome_OptOutExplanation'|translate}
{capture name=optOutUrl}{$piwikUrl}index.php?module=CoreAdminHome&action=optOut&language={$language}{/capture}
{assign var=optOutUrl value=$smarty.capture.optOutUrl}
{capture name=iframeOptOut}
<iframe frameborder="no" width="600px" height="200px" src="{$smarty.capture.optOutUrl}"></iframe>{/capture}
<code>{$smarty.capture.iframeOptOut|escape:'html'}</code>
<br/>
{'CoreAdminHome_OptOutExplanationBis'|translate:"<a href='$optOutUrl' target='_blank'>":"</a>"}
</p>

{include file="CoreAdminHome/templates/footer.tpl"}
