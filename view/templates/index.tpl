    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <form action="app/model/insert_agendas.php" method="POST">
                <table border="2" cellpadding="5" cellspacing="5">
                    <caption>
                        <div class="subtitle agenda-title">{$agendas.title}</div>
                    </caption>
                    {assign var="dot" value="."}
                    {foreach from=$agendas item=$agenda key=$agendakey}
                    {if $agendakey eq 'title'}
                    {continue}
                    {/if}
                    <tr>
                        {if $agendakey eq 'wifi'}
                        <td>{$agendas.wifi}</td>
                        <td colspan="2" id="wifimsg">{$wifimsg}</td>
                        {continue}
                        {/if}
                        <td {if $agendakey eq 'contents' } valign="top" {elseif $agendakey eq 'pass' } class="pass"
                            {/if}>{$agenda} </td> <td>
                            {if $agendakey eq 'contents'}
                            <textarea name="{$agendakey}" id="contents" cols="60" rows="10"
                                placeholder="{$frontValue.$agendakey}"></textarea>
                            {else}
                            <input type="text" name="{$agendakey}" placeholder="{$frontValue.$agendakey}">
                            {/if}
                        </td>
                    </tr>
                    {/foreach}
                </table>
                <input type="submit" value="ä½œæˆ�ã�™ã‚‹" class="button">
            </form>
            <ul class="slider">
                <li><a href="#"><img src="webroot/image/IMG_5314.JPG" alt="image01"></a></li>
                <li><a href="#"><img src="webroot/image/php.jpg" alt="image02"></a></li>
            </ul>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}