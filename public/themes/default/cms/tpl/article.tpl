<div class="editArea hidden" data-id="{$article['id']}" id="txtAreaWrapper_{$article['id']}">
 	<textarea id="txtArea_{$article['id']}" data-id="txtArea_{$article['id']}"></textarea>
</div>

{$article['header_1']}
<h4>{$article['sub_navi']}</h4>
<p>{$article['artikel_id']}</p>

<div class="datum">Erstellt: {$article['init_date']}</div>
<div class="datum">Aktualisiert: {$article['edit_date']}</div>

<p>
	{$article['content_1']}
	{$article['content_2']}
</p>

<i>
	{$article['content_3']}
</i>

<p>{$article['footer_1']}</p>