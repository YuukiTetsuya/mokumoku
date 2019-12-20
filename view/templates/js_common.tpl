<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{if $smarty.server.REQUEST_URI eq '/mokumoku/'}
<script type="text/javascript" src="{$jsIndex}"></script>
<script type="text/javascript" src="{$jsSlickIndex}"></script>
{elseif $smarty.server.REQUEST_URI eq '/mokumoku/view/index.php'}
<script type=" text/javascript" src="{$js}"></script>
<script type=" text/javascript" src="{$jsSlick}"></script>
{else}
<script type=" text/javascript" src="{$js}"></script>
{/if}
</body>

</html>