    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>{$titleView}{if $findmsg neq
                    ''} <span class="find-msg">{$findmsg}</span>
                    {/if}</h1>
                <div class="post-main storage">
                    <div class="post-left">
                        <h2>もくもく会一覧
                            <span title="最新の投稿順でもくもく会情報を閲覧できます" class="tooltip">　<i class="fas fa-question-circle">
                                </i></span>
                        </h2>
                        <ol>
                            {foreach $findAgendas as $all}
                            <li>
                                <a href="show?id={$all.post_id}">{$all.mokumokuname}</a>
                                <ul>
                                    <li>
                                        {$all.schedule}
                                    </li>
                                </ul>
                            </li>
                            {/foreach}
                        </ol>
                    </div>
                    <div class="post-right">
                        <h2>データベース内検索</h2>
                        <form id="search_form" name="search_form" action="find" method="POST" onsubmit="return check()">
                            <input type="text" id="search_form" name="search" placeholder="{$findmokumoku}">
                            <input type="hidden" name="token" value="{$token}">
                            <input type="submit" value="検索する">
                            <div class="check-msg" id="check-msg">※もくもく会名を入力してください</div>
                            <div class="check-vali-msg" id="check-vali-msg">※特定の記号文字は入力出来ません</div>
                        </form>
                    </div>
                </div>
                <div class="post-bottom paging">
                    <div class="paging-text">
                        {if $getPaging['current'] lt $paging and $getPaging['current'] ge 0 and $paging gt 1}
                        <a id="paging-textnext" href="search?keyword={$titleView}&page={$getPaging['next']}">次のページへ</a>
                        {elseif $getPaging['current'] ge 1 and $paging gt 1}
                        <a id="paging-textprev" href="search?keyword={$titleView}&page={$getPaging['prev']}">前のページへ</a>
                        {/if}
                    </div>
                    <div class="paging-number">
                        {if $getPaging['current'] gt 1 and $paging gt 1}
                        <a id="paging-prev" href="search?keyword={$titleView}&page={$getPaging['prev']}">◀</a>
                        {/if}
                        {for $i = 1 to $paging step 1}
                        {if $paging gt 1}
                        <a id="paging-number" href="search?keyword={$titleView}&page={$i}">{$i}</a>
                        {/if}
                        {/for}
                        {if $getPaging['current'] lt $paging and $getPaging['current'] ge 0 and $paging gt 1}
                        <a id="paging-next" href="search?keyword={$titleView}&page={$getPaging['next']}">▶</a>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}