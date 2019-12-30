    <div class="container">
        <div class="header-left">
            {$leftlogo}
        </div>
        <div class="header-right">
            {if $smarty.server.REQUEST_URI eq '/mokumoku/'}
            <a href="view/users/new.php">{$rightmenu}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users')}
            <a href="new.php">{$rightmenu}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/')}
            <a href="users/new.php">{$rightmenu}</a>
            {/if}
        </div>
        <div class="title">
            <a href="/mokumoku/">{$title}</a>
        </div>
    </div>