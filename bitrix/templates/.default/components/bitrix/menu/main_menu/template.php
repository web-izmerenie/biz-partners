<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<div id="menu" class="column">
		<nav>
			<ul>
				<?foreach($arResult as $arItem){?>
					<li <?if($arItem['SELECTED']){?> class="active"<?}?>>
						<a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT'];?></a>
					</li>
				<?}?>
			</ul>
		</nav>
	</div>
<?}?>
