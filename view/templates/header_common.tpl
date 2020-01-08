    <div class="container">
        <div class="header-left">
            {$leftlogo}
        </div>
        <div class="header-right">
            {if $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status neq '1'}
            <a href="view/users/new">{$new}</a>
            <a href="view/users/login">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status neq '1'}
            <a href="new">{$new}</a>
            <a href="login">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status neq '1'}
            <a href="users/new">{$new}</a>
            <a href="users/login">{$login}</a>
            {elseif $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status eq '1'}
            <a href="view/users/profile">{$login}</a>
            <a href="view/users/logout">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status eq '1'}
            <a href="profile">{$login}</a>
            <a href="logout">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status eq '1'}
            <a href="users/profile">{$login}</a>
            <a href="users/logout">{$logout}</a>
            {/if}
        </div>
        <div class="title">
            <a href="/mokumoku/">{$title}</a>
        </div>
    </div>