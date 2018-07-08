{**
 * Список страниц
 *
 * @param array $aPageItems Список страниц
 *}

<h3 class="page-sub-header">{$aLang.plugin.page.titles.list}</h3>

{component 'admin:button'  text = $aLang.plugin.page.actions.create mods='primary' url = {$oAdminUrl->get('create')}}

<br>
<br>

{if $aPageItems}
	<table class="ls-table">
		<thead>
			<tr>
				<th>{$aLang.plugin.page.admin.list.title}</th>
				<th>{$aLang.plugin.page.admin.list.url}</th>
				<th class="text-center" width="100">{$aLang.plugin.page.admin.list.active}</th>
				<th class="text-center" width="100">{$aLang.plugin.page.admin.list.index}</th>
				<th class="ls-table-cell-actions" width="100">{$aLang.plugin.page.admin.list.action}</th>
			</tr>
		</thead>

		<tbody>
			{foreach $aPageItems as $aPageItem}
				{$oPageItem=$aPageItem.entity}
				<tr id="article-item-{$oPageItem->getId()}">
					<td>
						{component 'icon'
							icon = (( $aPageItem.level == 0 ) ? 'folder' : 'file')
							attributes = [
								style => "margin-left: {$aPageItem.level*20}px"
							]}
						<a href="{$oPageItem->getWebUrl()}">{$oPageItem->getTitle()|escape}</a>
					</td>
					<td>
						{$oPageItem->getUrlFull()}
					</td>
					<td class="text-center">
						{component 'icon' icon = {($oPageItem->getActive()) ? 'check' : 'times'}}
					</td>
					<td class="text-center">
						{component 'icon' icon = {($oPageItem->getMain()) ? 'check' : 'times'}}
					</td>
					<td class="ls-table-cell-actions">
						<a href="{$oAdminUrl->get('update')}{$oPageItem->getId()}/" title="{$aLang.plugin.page.actions.update}">
							{component 'icon' icon = 'edit'}
						</a>
						<a href="#" onclick="if (confirm('{$aLang.plugin.page.actions.remove_confirm}')) { ls.plugin.page.admin.removePage({$oPageItem->getId()}); } return false;" title="{$aLang.plugin.page.actions.remove}">
							{component 'icon' icon = 'trash'}
						</a>
						<a href="{$oAdminUrl->get('sort/up')}{$oPageItem->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.plugin.page.actions.sort_up}">
							{component 'icon' icon = 'arrow-up'}
						</a>
						<a href="{$oAdminUrl->get('sort/down')}{$oPageItem->getId()}/?security_ls_key={$LIVESTREET_SECURITY_KEY}" title="{$aLang.plugin.page.actions.sort_down}">
							{component 'icon' icon = 'arrow-down'}
						</a>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
{else}
	{component 'admin:blankslate' text=$aLang.plugin.page.admin.list.empty}
{/if}
