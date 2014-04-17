    <ul id="crud-buttons active-link" 
        class="btnWrapper iconButtons"
        data-target="txtWrapper"
        data-id="{$articles['id']}">
        {foreach $session['crud'] AS $href => $controller}
            <li>
                <a  href="{$articles['link_url']}/{$href}"
                    id = "{strip}{$articles['artikel_id']|replace:" ":""}_{$controller|replace:'/':''}{/strip}"
                    data-id="{strip}{$articles['artikel_id']}{/strip}"
                    data-tid="tid_{$articles['id']}"
                    data-pid="pid_{$articles['id']}"
                    data-aid="{$controller|replace:'/':''}"
                    data-url="{$articles['ajax_url']}/{$href}"
                    data-status="{$articles['status']}"
                    data-toggle="tooltip"
                    data-placement="bottom"
                    title="{$href}"
                    data-placement="left" 
                    data-original-title="[$href}"
                    class="ajaxReq fa
                        {if $articles['status'] eq 0 AND $href eq "online"}
                            fa-offline
                        {elseif $articles['status'] eq 1 AND $href eq "online"}
                            fa-online
                        {else}
                            fa-{$href}
                        {/if} hhmvc-tooltip btn btn-default btn-sm btn-small dropdown-toggle">
                        <span>
                            {$href}
                        </span>
                    </a>
            </li>   
        {/foreach}
        </ul>

{strip}
<div class="articles excerpt" id="pid_{$articles['id']}" data-id="{$articles['id']}">

    <div id="tid_{$articles['id']}_data" data-id="tid_{$articles['id']}" >

            <input type="hidden" class="codeArea" data-field="id" data-value="{$articles['id']}">
            
            
            <input type="hidden" class="codeArea" data-field="artikel_id" data-value="{$articles['artikel_id']}">
            
            
            <input type="hidden" class="codeArea" data-field="parent_id" data-value="{$articles['parent_id']}">
            
            
            <input type="hidden" class="codeArea" data-field="link_id" data-value="{$articles['link_id']}">
            
            
            <input type="hidden" class="codeArea" data-field="subnavi" data-value="{$articles['subnavi']}">
            
            
            <input type="hidden" class="codeArea" data-field="categories" data-value="{$articles['categories']}">
            
            
            <input type="hidden" class="codeArea" data-field="excerpt" data-value="{$articles['excerpt']}">
            
            
            <input type="hidden" class="codeArea" data-field="rating" data-value="{$articles['rating']}">
            
            
            <input type="hidden" class="codeArea" data-field="footer" data-value="{$articles['footer']}">
            
            
            <input type="hidden" class="codeArea" data-field="sidebar" data-value="{$articles['sidebar']}">
            
            
            <input type="hidden" class="codeArea" data-field="keywords" data-value="{$articles['keywords']}">
            
            
            <input type="hidden" class="codeArea" data-field="init_date" data-value="{$articles['init_date']}">
            
            
            <input type="hidden" class="codeArea" data-field="edit_date" data-value="{$articles['edit_date']}">
            
            
            <input type="hidden" class="codeArea" data-field="link_url" data-value="{$articles['link_url']}">
            
            
            <input type="hidden" class="codeArea" data-field="ajax_url" data-value="{$articles['ajax_url']}">
            
            
            <input type="hidden" class="codeArea" data-field="user_id" data-value="{$articles['user_id']}">
            
            
            <input type="hidden" class="codeArea" data-field="status" data-value="{$articles['status']}">
        </div>

        {*$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'*}

        <div id="tid_{$articles['id']}" data-id="tid_{$articles['id']}" >
            {strip}{$articles['html']|html_entity_decode}{/strip}
        </div>
</div>
{/strip}