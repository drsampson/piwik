<div>
<p>{sparkline src=$urlSparklineNbVisits} <span>{'VisitsSummary_NbVisits'|translate:"<strong>$nbVisits</strong>"}</span></p>
{if isset($urlSparklineNbUniqVisitors)}
<p>{sparkline src=$urlSparklineNbUniqVisitors} <span>{'VisitsSummary_NbUniqueVisitors'|translate:"<strong>$nbUniqVisitors</strong>"}</span></p>
{/if}
<p>{sparkline src=$urlSparklineNbActions} <span>{'VisitsSummary_NbActions'|translate:"<strong>$nbActions</strong>"}</span></p>
<p>{sparkline src=$urlSparklineSumVisitLength} <span>{assign var=sumtimeVisitLength value=$sumVisitLength|sumtime} {'VisitsSummary_TotalTime'|translate:"<strong>$sumtimeVisitLength</strong>"}</span></p>
<p>{sparkline src=$urlSparklineMaxActions} <span>{'VisitsSummary_MaxNbActions'|translate:"<strong>$maxActions</strong>"}</span></p>
<p>{sparkline src=$urlSparklineBounceCount} <span>{'VisitsSummary_NbBounced'|translate:"<strong>$bounceCount</strong>"}</span></p>
</div>
