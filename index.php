<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Мебельная компания");
$APPLICATION->SetTitle("Мебельная компания");
?><!--Верхние новости--> 

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "5",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "[DEAL] Приоритетная сделка",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?><br>
<br>
 <br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<!----><br>

 <!-- <div class="slide-one-item home-slider owl-carousel">
	<div class="site-blocks-cover" style="background-image: url(local/templates/home/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="text">
			<h2>853 S Lucerne Blvd</h2>
			<p class="location">
               <span class="property-icon icon-room"></span> Los Angeles, CA 90005
			</p>
			<p class="mb-2">
            <strong>$2,250,500</strong>
			</p>
			<p class="mb-0">
            <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
			</p>
		</div>
	</div>
	<div class="site-blocks-cover" style="background-image: url(local/templates/home/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="text">
			<h2>625 S. Berendo St</h2>
			<p class="location">
               <span class="property-icon icon-room"></span>607 Los Angeles, CA 90005
			</p>
			<p class="mb-2">
               <strong>$2,250,500</strong>
			</p>
			<p class="mb-0">
            <a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
			</p>
		</div>
	</div>
</div> --> 

<!--7,8,9--> <br>
 <br>
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-house"></span>
					<div class="text">
						<h2 class="mt-0">Wide Range of Properties</h2>
						<p>
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "q",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => ""
	)
);?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-rent"></span>
					<div class="text">
						<h2 class="mt-0">Rent or Sale</h2>
						<p>
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "qaz",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => ""
	)
);?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
 <span class="icon mr-3 flaticon-location"></span>
					<div class="text">
						<h2 class="mt-0">Property Location</h2>
						<p>
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "qwer",
		"EDIT_TEMPLATE" => ""
	)
);?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 &nbsp; <br>
 <br>


 <!--Меню верхнее--> 
 

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>New Properties for You</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">
      <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new-properties", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "new-properties",
		"DETAIL_URL" => "/obyavleniya/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_GARAGE",
			4 => "PROPERTY_FLOOR",
			5 => "PROPERTY_SQUARE",
			6 => "PROPERTY_BATHROOM",
			7 => "PROPERTY_GALLERY",
			8 => "PROPERTY_MATERIALS",
			9 => "PROPERTY_LINK",
			10 => "PROPERTY_DEAL",
			11 => "PROPERTY_GARAGE",
			12 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "5",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
	</div>

	<!--Меню Сервис-->  
		<div class="site-section">
			<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7 text-center mb-5">
							<h2><br></h2>
							<h2>Our Services</h2>
						</div>
					</div>
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"services", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "PROPERTY_DOM",
			2 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "8",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
		   </div>
	</div>



   <!--Меню Блог--> 
			<div class="site-section bg-light">
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-md-7 text-center">
							<h2><br></h2>
							<h2>Our Blog</h2>
						</div>
					</div>
               <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"our-blog", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "31536000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "our-blog",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DATE_CREATE",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
				</div>
			</div>

 <!--Меню Агентов--> 

			<div class="site-section">
				<div class="container">
					<div class="row mb-5 justify-content-center">
						<div class="col-md-7">
							<div class="site-section-title text-center">          
								<h2>Our Agents</h2>
							</div>
						</div>
					</div>
               <?$APPLICATION->IncludeComponent("bitrix:news.line", "agent", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "31536000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"FIELD_CODE" => array(	// Поля
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "PROPERTY_INFO",
			3 => "",
		),
		"IBLOCKS" => array(	// Код информационного блока
			0 => "6",
		),
		"IBLOCK_TYPE" => "7",	// Тип информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>


				</div>
	      </div>


 <br>
		</div>
 <br>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>