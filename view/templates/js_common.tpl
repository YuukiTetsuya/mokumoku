<!-- jQueryをgoogleCDNから読み込み -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- トップページ読み込みであればIndex用を、それ以外であれば全体用jsを、一部jsファイルはindexファイル用に個別で読み込み -->
{if $smarty.server.REQUEST_URI eq '/mokumoku/'}
<script type="text/javascript" src="webroot/js/index.js"></script>
<script type="text/javascript" src="webroot/js/slick.js"></script>
{else}
<script type=" text/javascript" src="../webroot/js/index.js"></script>
<script type=" text/javascript" src="../webroot/js/checkFunction.js"></script>
{/if}
</body>

</html>