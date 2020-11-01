<!-- Header -->
<{include file='db:wgphpoffice_admin_header.tpl' }>

<{if $presentations_list}>
	<table class='table table-bordered'>
		<thead>
			<tr class='head'>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_PRESENTATIONSAMPLE_ID}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_PRESENTATIONSAMPLE_NAME}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_PRESENTATIONSAMPLE_CONTENT}></th>
				<th class="center width5"><{$smarty.const._AM_WGPHPOFFICE_FORM_ACTION}></th>
			</tr>
		</thead>
		<{if $presentations_count}>
		<tbody>
			<{foreach item=presentationsample from=$presentations_list}>
			<tr class='<{cycle values='odd, even'}>'>
				<td class='center'><{$presentationsample.id}></td>
				<td class='center'><{$presentationsample.name}></td>
				<td class='center'><{$presentationsample.content_short}></td>
				<td class="center  width5">
					<a href="presentations.php?op=edit&amp;ps_id=<{$presentationsample.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._EDIT}> presentations" /></a>
					<a href="presentations.php?op=delete&amp;ps_id=<{$presentationsample.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 delete.png}>" alt="<{$smarty.const._DELETE}> presentations" /></a>
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
