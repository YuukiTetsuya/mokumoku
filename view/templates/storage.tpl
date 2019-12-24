    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>{$titleView}</h1>
                <div class="post-main">
                    <div class="post-left">
                        <ol>
                            {foreach $tenAgendas as $all}
                            <li>
                                <a href="post.php?id={$all.post_id}">{$all.mokumokuname}</a>
                                <ul>
                                    <li>
                                        {$all.schedule}
                                    </li>
                                </ul>
                            </li>
                            {/foreach}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}