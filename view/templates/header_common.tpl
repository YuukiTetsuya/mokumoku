    <div class="container">
        <div class="header-left">
            <a href="/mokumoku"><img src="{if $smarty.server.REQUEST_URI eq '/mokumoku/'
                        }webroot/image/logo.png
                        {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $users neq 'users'}
                        ../webroot/image/logo.png
                        {elseif strpos($smarty.server.REQUEST_URI, '/users/')}
                        ../../webroot/image/logo.png
                        {/if}" alt="mokumoku" id="logo"></a>
        </div>
        <div class="header-right">
            {if $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status neq '1'}
            <a href="view/users/new">{$new}</a></br>
            <a id="header-login" href="view/users/login">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status neq '1'}
            <a href="new">{$new}</a></br>
            <a id="header-login" href="login">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status neq '1'}
            <a href="users/new">{$new}</a></br>
            <a id="header-login" href="users/login">{$login}</a>
            {elseif $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status eq '1'}
            <a href="view/users/profile">{$login}</a></br>
            <a id="header-login" href="view/users/logout">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status eq '1'}
            <a href="profile">{$login}</a></br>
            <a id="header-login" href="logout">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status eq '1'}
            <a href="users/profile">{$login}</a></br>
            <a id="header-login" href="users/logout">{$logout}</a>
            {/if}
        </div>
        <div class="title">
            <a href="/mokumoku/">{$title}</a>
        </div>
    </div>