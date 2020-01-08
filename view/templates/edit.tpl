    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>編集画面 <b id="validate" class="validate vali-msg">※特定の記号文字は入力出来ません。</b></h1>
                <div class="post-main edit">
                    <form action="../app/Model/updateAgendas.php" method="POST" name="index-check" id="index-check">
                        <div class="post-left">

                            <table border="2" cellpadding="5" cellspacing="5">
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
                                    <td {if $agendakey eq 'contents' } valign="top" {elseif $agendakey eq 'pass' }
                                        class="pass" {/if}>{$agenda} </td> <td>
                                        {if $agendakey eq 'contents'}
                                        <textarea name="{$agendakey}" id="contents" cols="60"
                                            rows="10">{$post.$agendakey}</textarea>
                                        {else}
                                        <b id="validate-null" class="validate-null">※もくもく会名を入力してください。</b>
                                        <input type="text" name="{$agendakey}" id="{$agendakey}"
                                            value="{$post.$agendakey}">
                                        {/if}
                                    </td>
                                </tr>
                                {/foreach}
                            </table>
                        </div>
                        <div class="post-right"></div>
                        <input type="hidden" name="token" value="{$token}">
                        <input type="hidden" name="post_id" value="{$post.post_id}">
                        <input type="submit" id="submit" value="編集する" class="button">
                    </form>
                    <div class="post-bottom">
                    </div>
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}