<!-- トップページ読み込みであればIndex用を、それ以外であれば全体用cssを読み込み -->
{if $smarty.server.REQUEST_URI eq '/mokumoku/'}
<link rel="stylesheet" href="webroot/css/styles.css">
<link rel="stylesheet" href="webroot/css/header.css">
<link rel="stylesheet" href="webroot/css/footer.css">
<link rel="stylesheet" href="webroot/css/slick.css">
{elseif strpos($smarty.server.REQUEST_URI, '/view/users/')}
<link rel="stylesheet" href="../../webroot/css/styles.css">
<link rel="stylesheet" href="../../webroot/css/header.css">
<link rel="stylesheet" href="../../webroot/css/footer.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
{elseif strpos($smarty.server.REQUEST_URI, '/view/')}
<link rel="stylesheet" href="../webroot/css/styles.css">
<link rel="stylesheet" href="../webroot/css/header.css">
<link rel="stylesheet" href="../webroot/css/footer.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
{/if}