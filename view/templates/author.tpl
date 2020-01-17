    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="users">
                <div class="users-main">
                    <h1>{$titleView}</h1>
                    <div>
                        <p>
                            {$userid}：{$postUser.user_id}
                        </p>
                        <p>
                            {$created}：{$postUser.created}
                        </p>
                    </div>
                    <div class="post-left">
                    </div>
                    <div class="post-right">
                    </div>
                </div>
                <div class="post-bottom paging">
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}