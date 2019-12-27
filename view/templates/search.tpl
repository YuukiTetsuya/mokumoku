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
                                <a href="show.php?id={$all.post_id}">{$all.mokumokuname}</a>
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
                        <form id="search_form" name="search_form" action="find.php" method="POST"
                            onsubmit="return check()">
                            <input type="text" id="search_form" name="search" placeholder="{$findmokumoku}">
                            <input type="hidden" name="token" value="{$token}">
                            <input type="submit" value="検索する">
                            <div class="check-msg" id="check-msg">※もくもく会名を入力してください</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}