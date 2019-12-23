    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="post">
                <h1>{$create}</h1>
                <div class="post-main">
                    <div class="post-left">
                        <div class="subtitle" id="weight">
                            {$oneAgendas.1.mokumokuname}
                        </div>
                        <div class="schedule">
                            開催時間：{$oneAgendas.1.schedule}
                        </div>
                        <div class="contents">
                            コンテンツ
                            <div class="description">{$oneAgendas.1.contents}</div>
                        </div>
                        <div class="rule">
                            ルール
                            <div class="description">{$oneAgendas.1.rule}</div>
                        </div>
                        <div class="edit">編集</div>
                    </div>
                    <div class="post-right">
                        <span id="wifi">
                            <span class="subtitle" id="weight">Wifi</span><br>
                            <span class="ssid-pass">
                                {$agendas.ssid} {$oneAgendas.1.ssid}<br>
                                {$agendas.pass} {$oneAgendas.1.pass}
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