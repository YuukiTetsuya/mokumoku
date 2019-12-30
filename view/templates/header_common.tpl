    <div class="container">
        <div class="header-left">
            {$leftlogo}
        </div>
        <div class="header-right">
            {if $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status neq '1'}
            <a href="view/users/login.php">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status neq '1'}
            <a href="login.php">{$login}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status neq '1'}
            <a href="users/login.php">{$login}</a>
            {elseif $smarty.server.REQUEST_URI eq '/mokumoku/' and $currentUser.status eq '1'}
            <a href="view/users/profile.php">{$login}</a>
            <a href="view/users/logout.php">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/users') and $currentUser.status eq '1'}
            <a href="profile.php">{$login}</a>
            <a href="logout.php">{$logout}</a>
            {elseif strpos($smarty.server.REQUEST_URI, '/view/') and $currentUser.status eq '1'}
            <a href="users/profile.php">{$login}</a>
            <a href="users/logout.php">{$logout}</a>
            {/if}
        </div>
        <div class="title">
            <a href="/mokumoku/">{$title}</a>
        </div>
    </div>