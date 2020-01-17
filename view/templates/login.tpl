    {include file='head_common.tpl'}
    <main>
        <div class="container">
            <div class="users">
                <div class="users-main">
                    <h2>{$loginFlg}</h2>
                    <h1>{$titleView}</h1>
                    <div class="form">
                        <form action="find.php" method="POST">
                            <span id="useridNo">{$useridNo}</span>
                            <div class="form-user"><input class="form-input" type="text" name="userid"
                                    placeholder="{$userid}">
                            </div>
                            <span id="passwordNo">{$passwordNo}</span>
                            <div class="form-user"><input class="form-input" type="password" name="password"
                                    placeholder="{$pass}">
                            </div>
                            <input type="submit" name="button-user" id="button-user" value="ログインする">
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