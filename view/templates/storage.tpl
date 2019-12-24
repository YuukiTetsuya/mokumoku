    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>{$create}</h1>
                <div class="post-main">
                    <div class="post-left">
                        <div class="subtitle" id="weight">
                            {$tenAgendas.1.mokumokuname}
                        </div>
                        <div class="schedule">
                            開催時間：{$tenAgendas.1.schedule}
                        </div>
                        <div class="contents">
                            コンテンツ
                            <div class="description">{$tenAgendas.1.contents}</div>
                        </div>
                        <div class="rule">
                            ルール
                            <div class="description">{$tenAgendas.1.rule}</div>
                        </div>
                        <div class="edit">編集</div>
                    </div>
                    <div class="post-right">
                        <span id="wifi">
                            <span class="subtitle" id="weight">Wifi</span><br>
                            <span class="ssid-pass">
                                {$agendas.ssid} {$tenAgendas.1.ssid}<br>
                                {$agendas.pass} {$tenAgendas.1.pass}
                            </span>
                        </span>
                    </div>
                    <div class="post-bottom">
                        {$tenAgendas.1.post_id}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}