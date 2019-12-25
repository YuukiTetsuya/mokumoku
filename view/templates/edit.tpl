    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>編集画面</h1>
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
                            <div class="description">{$post.contents}</div>
                        </div>
                        <div class="rule">
                            {$agendas.rule}
                            <div class="description">{$post.rule}</div>
                        </div>
                        <div class="edit"><a href="update.php">編集</a></div>
                    </div>
                    <div class="post-right">
                        <span id="wifi">
                            <span class="subtitle" id="weight">Wifi</span><br>
                            <span class="ssid-pass">
                                {$agendas.ssid} {$post.ssid}<br>
                                {$agendas.pass} {$post.pass}
                            </span>
                        </span>
                    </div>
                    <div class="post-bottom">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}