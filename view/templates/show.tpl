    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>{$create}{$update}{$delete}{$edit}{$destroy}</h1>
                <div class="post-main">
                    <div class="post-left">
                        <div class="subtitle" id="weight">
                            {$post.mokumokuname}
                        </div>
                        <div class="schedule">
                            開催時間：{$post.schedule}
                        </div>
                        <div class="contents">
                            {$agendas.contents}
                            <div class="description">
                                <pre>{$post.contents}</pre>
                            </div>
                        </div>
                        <div class="rule">
                            {$agendas.rule}
                            <div class="description">{$post.rule}</div>
                        </div>
                        <div class="edit"><a href="edit?id={$post.post_id}">{$editmsg}</a></div>
                        <div class="delete"><a href="../app/Model/destroyAgendas?id={$post.post_id}">{$deletemsg}</a>
                        </div>
                        <div class="mokudb"><a href="../view/storage">もくもくデータベース</a></div>
                    </div>
                    <div class="post-right">
                        <span id="wifi">
                            <span class="subtitle" id="weight">Wifi</span><br>
                            <span class="ssid-pass">
                                {$agendas.ssid} {$post.ssid}<br>
                                {$agendas.pass} {$post.pass}
                            </span>
                        </span>
                        <div class="subtitle" id="weight">作成者</div>
                        {if $post.user_id neq '非会員'}
                        <span><a href="users/author?id={$post.post_id}">{$post.user_id}</a></span>
                        {else}
                        <span class="nouser">{$post.user_id}</span>
                        {/if}
                        <span></span>
                    </div>
                    <div class="post-bottom">
                    </div>
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}