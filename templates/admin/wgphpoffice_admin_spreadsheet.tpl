<!-- Header -->
<{include file='db:wgphpoffice_admin_header.tpl' }>

<{if $spreadsheets_list}>
	<table class='table table-bordered'>
		<thead>
			<tr class='head'>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_EXCELSAMPLE_ID}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_EXCELSAMPLE_FIELD1}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_EXCELSAMPLE_FIELD2}></th>
				<th class="center width5"><{$smarty.const._AM_WGPHPOFFICE_FORM_ACTION}></th>
			</tr>
		</thead>
		<{if $spreadsheets_count}>
		<tbody>
			<{foreach item=excelsample from=$spreadsheets_list}>
			<tr class='<{cycle values='odd, even'}>'>
				<td class='center'><{$excelsample.id}></td>
				<td class='center'><{$excelsample.field1}></td>
				<td class='center'><{$excelsample.field2}></td>
				<td class="center  width5">
					<a href="spreadsheets.php?op=edit&amp;es_id=<{$excelsample.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._EDIT}> spreadsheets" /></a>
					<a href="spreadsheets.php?op=delete&amp;es_id=<{$excelsample.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 delete.png}>" alt="<{$smarty.const._DELETE}> spreadsheets" /></a>
				</td>
			</tr>
			<{/foreach}>
		</tbody>
		<{/if}>
	</table>
	<div class="clear">&nbsp;</div>
	<{if $pagenav}>
		<div class="xo-pagenav floatright"><{$pagenav}></div>
		<div class="clear spacer"></div>
	<{/if}>
<{/if}>
<{if $form}>
	<{$form}>
<{/if}>
<{if $error}>
	<div class="errorMsg"><strong><{$error}></strong></div>
<{/if}>

<!-- Footer -->
<{include file='db:wgphpoffice_admin_footer.tpl' }>
