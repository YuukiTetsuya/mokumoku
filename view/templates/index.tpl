    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="index-main">
                <form action="app/Model/insertAgendas.php" method="POST" name="index-check" id="index-check">
                    <table border="2" cellpadding="5" cellspacing="5">
                        <caption>
                            <div class="subtitle agenda-title">{$agendas.title}{if $deletemsg neq
                                ''} <span class="delete-msg">{$deletemsg}</span>
                                {/if}
                                <b id="validate" class="validate vali-msg">※特定の記号文字は入力出来ません。</b>
                            </div>
                        </caption>
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
                                {/if}>{$agenda} {if $agendakey eq 'mokumokuname' } <br><span class="required">
                                    ※必須</span>{/if}
                            </td>
                            <td>
                                {if $agendakey eq 'contents'}
                                <textarea name="{$agendakey}" id="contents" cols="60" rows="10"
                                    placeholder="{$frontValue.$agendakey}"></textarea>
                                {else}
                                <b id="validate-null" class="validate-null">※もくもく会名を入力してください。</b>
                                <input type="text" name="{$agendakey}" id="{$agendakey}"
                                    placeholder="{$frontValue.$agendakey}">
                                {/if}
                            </td>
                        </tr>
                        {/foreach}
                    </table>
                    <input type="hidden" name="token" value="{$token}">
                    <input type="hidden" name="post_id" value="{$post_id}">
                    <div class="button-create">
                        <input type="submit" id="submit" value="作成する" class="button">
                    </div>
                </form>
            </div>
            <div class="index-right">
                <div class="subtitle">{$howtoTitle}</div>
                <div class="about">
                    MokuMokuAppは、もくもく会の情報を気軽に共有できるWebサービスです。<br>「気軽に」がポイントで、以下のような方にオススメのサイトです。<br>
                    <ul>
                        <li>突発的に募集したい</li>
                        <li>最低限の情報を共有したい</li>
                        <li>円滑に進行したい</li>
                    </ul>
                </div>
                <div class="subtitle">製作の背景</div>
                <div class="about">
                    もくもく会開催時、参加者にスケジュールやルール、Wifiの情報を共有するのが面倒だと感じていました。<br><br>「1ページで気軽に情報を共有したい」<br>と思ったのがキッカケです。<br><br>
                    SNSシェア機能やLTタイマーなど、便利な機能も揃えています。
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}