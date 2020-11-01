<!-- Header -->
<{include file='db:wgphpoffice_admin_header.tpl' }>

<{if $words_list}>
	<table class='table table-bordered'>
		<thead>
			<tr class='head'>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_WORDSAMPLE_ID}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_WORDSAMPLE_NAME}></th>
				<th class="center"><{$smarty.const._AM_WGPHPOFFICE_WORDSAMPLE_CONTENT}></th>
				<th class="center width5"><{$smarty.const._AM_WGPHPOFFICE_FORM_ACTION}></th>
			</tr>
		</thead>
		<{if $words_count}>
		<tbody>
			<{foreach item=wordsample from=$words_list}>
			<tr class='<{cycle values='odd, even'}>'>
				<td class='center'><{$wordsample.id}></td>
				<td class='center'><{$wordsample.name}></td>
				<td class='center'><{$wordsample.content_short}></td>
				<td class="center  width5">
					<a href="words.php?op=edit&amp;ws_id=<{$wordsample.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoModuleIcons16 edit.png}>" alt="<{$smarty.const._EDIT}> words" /></a>
					<a href="words.php?op=delete&amp;ws_id=<{$wordsample.id}>" title="<{$smarty.const._DELETE}>"><img src="<{xoModuleIcons16 delete.png}>" alt="<{$smarty.const._DELETE}> words" /></a>
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
