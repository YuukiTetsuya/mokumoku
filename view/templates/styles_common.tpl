<!-- トップページ読み込みであればIndex用を、それ以外であれば全体用cssを読み込み -->
{if $smarty.server.REQUEST_URI eq '/mokumoku/'}
<link rel="stylesheet" href="webroot/css/styles.css">
<link rel="stylesheet" href="webroot/css/header.css">
<link rel="stylesheet" href="webroot/css/footer.css">
<link rel="stylesheet" href="webroot/css/slick.css">
{else}
<link rel="stylesheet" href="../webroot/css/styles.css">
<link rel="stylesheet" href="../webroot/css/header.css">
<link rel="stylesheet" href="../webroot/css/footer.css">
{/if}