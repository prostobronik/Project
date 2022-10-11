<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><!--<$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
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
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
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
			0 => "DEAL",
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
);?>--><br>
 <br>
<div class="slide-one-item home-slider owl-carousel">
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
</div>
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
);?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 &nbsp; <br>
 <br>
 <!--Меню верхнее--> <!-- <$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
		),
		"IBLOCK_TYPE" => "5",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>   -->
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
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_1.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$1,930,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_2.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$2,438,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_3.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$5,320,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_4.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$2,350,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_5.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$1,550,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6 col-lg-4 mb-4">
 <a href="property-details.html" class="prop-entry d-block"> <figure> <img alt="Image" src="local/templates/home/images/img_6.jpg" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
 <span class="price rounded">$4,291,000</span>
						<h3 class="title">853 S Lucerne Blvd</h3>
						<p class="location">
							 Los Angeles, CA 90005
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong>240m<sup>2</sup></strong>
							</div>
							<div class="col">
								 Beds: <strong>2</strong>
							</div>
							<div class="col">
								 Baths: <strong>2</strong>
							</div>
							<div class="col">
								 Garages: <strong>1</strong>
							</div>
						</div>
					</div>
				</div>
 </a>
			</div>
			<div class="site-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-7 text-center mb-5">
							<h2><br>
 </h2>
							 <!--Меню Сервис--> <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
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
							<h2>Our Services</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
							<h2 class="service-heading">Research Subburbs</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
							<h2 class="service-heading">Sold Houses</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
							<h2 class="service-heading">Security Priority</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-house"></span>
							<h2 class="service-heading">Research Subburbs</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-sold"></span>
							<h2 class="service-heading">Sold Houses</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
						<div class="col-md-6 col-lg-4 mb-4">
 <a href="#" class="service text-center border rounded"> <span class="icon flaticon-camera"></span>
							<h2 class="service-heading">Security Priority</h2>
							<p>
 <span class="read-more">Learn More</span>
							</p>
 </a>
						</div>
					</div>
				</div>
			</div>
			<div class="site-section bg-light">
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-md-7 text-center">
							<h2><br>
 </h2>
							 <!--Меню Блог--> <!-- <$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"IBLOCKS" => array("1"),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>-->
							<h2>Our Blog</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
 <a href="#"><img alt="Image" src="local/templates/home/images/img_4.jpg" class="img-fluid"></a>
							<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
								<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
 <a href="#"><img alt="Image" src="local/templates/home/images/img_2.jpg" class="img-fluid"></a>
							<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
								<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
 <a href="#"><img alt="Image" src="local/templates/home/images/img_3.jpg" class="img-fluid"></a>
							<div class="p-4 bg-white">
 <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
								<h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-section">
				<div class="container">
					<div class="row mb-5 justify-content-center">
						<div class="col-md-7">
							<div class="site-section-title text-center">
								 <!--Меню Агентов--> <!-- <$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCKS" => array(
			0 => "6",
		),
		"IBLOCK_TYPE" => "7",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>-->
								<h2>Our Agents</h2>
							</div>
						</div>
					</div>
					<div class="row block-13">
						<div class="nonloop-block-13 owl-carousel">
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_1.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_2.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_3.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_1.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_2.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_3.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_1.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_2.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
							<div class="slide-item">
								<div class="team-member text-center">
 <img alt="Image" src="local/templates/home/images/person_3.jpg" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
									<div class="text p-3">
										<h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
 <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
										<p class="mb-5">
											 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est.
										</p>
										<p>
 <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
 <br>
		</div>
 <br>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>