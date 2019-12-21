    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <h1>{$create}</h1>
            <p>limit1 Agendas $id1（降順ソート後の最新レコード）</p>
            {$tenAgendas.1.mokumokuname}<br>
            {$tenAgendas.1.contents}<br>
            <p>limit1 Agendas$id2（降順ソート後の最新レコード）</p>
            {$tenAgendas.2.mokumokuname}<br>
            {$tenAgendas.2.contents}<br>
            <p>limit1 Agendas$id3（降順ソート後の最新レコード）</p>
            {$tenAgendas.3.mokumokuname}<br>
            {$tenAgendas.3.contents}<br>
            <p>limit3 $id1（降順ソート後の最新レコード）</p>
            {$oneAgendas.1.mokumokuname}<br>
            {$oneAgendas.1.contents}<br>
            <p>limit3 $id2（降順ソート後の最新レコード）</p>
            {$oneAgendas.2.mokumokuname}<br>
            {$oneAgendas.2.contents}<br>
            <p>limit3 $id3（降順ソート後の最新レコード）</p>
            {$oneAgendas.3.mokumokuname}<br>
            {$oneAgendas.3.contents}<br>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}