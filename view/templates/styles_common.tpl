<!-- トップページ読み込みであればIndex用を、それ以外であれば全体用cssを読み込み -->
{if $smarty.server.REQUEST_URI eq '/mokumoku/'}
<link rel="stylesheet" href="{$stylesHeaderIndex}">
<link rel="stylesheet" href="{$stylesFooterIndex}">
<link rel="stylesheet" href="{$slickIndex}">
<link rel="stylesheet" href="{$stylesIndex}">
{else}
<link rel="stylesheet" href="{$styles}">
<link rel="stylesheet" href="{$stylesHeader}">
<link rel="stylesheet" href="{$stylesFooter}">
{/if}