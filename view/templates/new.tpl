    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="users">
                <div class="users-main">
                    {if $createUserMsg neq NULL} <h2 class="createUser-msg">{$createUserMsg}</h2>{/if}
                    {if $createPassMsg neq NULL} <h2 class="createUser-msg">{$createPassMsg}</h2>{/if}
                    <h1>{$titleView}</h1>
                    <div class="form">
                        <form action="../../app/Model/insertUsers.php" method="POST">
                            <div class="form-user"><input class="form-input" type="text" name="userid"
                                    placeholder="{$userid}">
                            </div>
                            <div class="form-user"><input class="form-input" type="text" name="password"
                                    placeholder="{$pass}">
                            </div>
                            <input type="submit" name="button-user" id="button-user" value="作成する">
                            <input type="hidden" name="token" value="{$token}">
                        </form>
                    </div>
                    <div class="post-left">
                    </div>
                    <div class="post-right">
                    </div>
                </div>
                <div class="post-bottom paging">
                </div>
            </div>
        </div>
    </main>
    {include file='footer_common.tpl'}
    {include file='js_common.tpl'}