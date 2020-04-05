    <footer>
        <div class="container">
            {if $smarty.server.REQUEST_URI eq '/mokumoku/'}
            <a href="view/storage">{$mokumokudb}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users')}
            <a href="../storage">{$mokumokudb}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/')}
            <a href="storage">{$mokumokudb}</a>
            {/if}
            <div class="title t-grafic">{$title}</div>
        </div>
    </footer>