<?php
/* Plugin Name: Склонение дат
 * Plugin URI: https://github.com/psgtag2019/rus-dates
 * Description: Правильный вывод дат на русском языке.
 * Version: 1.0.0
 * Author: Вадим Петров
 * Author URI: https://vk.com/id510806024
 * License: GPLv2 or later
 */
 
function true_russian_date_forms($the_date = '') {
	if ( substr_count($the_date , '---') > 0 ) {
		return str_replace('---', '', $the_date);
	}
	// массив замен для русской локализации движка
	$replacements = array(
		"Январь" => "января", // "Jan" => "января"
		"Февраль" => "февраля", // "Feb" => "февраля"
		"Март" => "марта", // "Mar" => "марта"
		"Апрель" => "апреля", // "Apr" => "апреля"
		"Май" => "мая", // "May" => "мая"
		"Июнь" => "июня", // "Jun" => "июня"
		"Июль" => "июля", // "Jul" => "июля"
		"Август" => "августа", // "Aug" => "августа"
		"Сентябрь" => "сентября", // "Sep" => "сентября"
		"Октябрь" => "октября", // "Oct" => "октября"
		"Ноябрь" => "ноября", // "Nov" => "ноября"
		"Декабрь" => "декабря" // "Dec" => "декабря"
		// А это для английской локализации
		// "Jan" => "января",
		// "Feb" => "февраля",
		// "Mar" => "марта",
		// "Apr" => "апреля",
		// "May" => "мая",
		// "Jun" => "июня",
		// "Jul" => "июля",
		// "Aug" => "августа",
		// "Sep" => "сентября",
		// "Oct" => "октября",
		// "Nov" => "ноября",
		// "Dec" => "декабря"
	);
	return strtr($the_date, $replacements);
}
 
// здесь можно закомментировать лишние фильтры
add_filter('the_time', 'true_russian_date_forms');
add_filter('get_the_time', 'true_russian_date_forms');
add_filter('the_date', 'true_russian_date_forms');
add_filter('get_the_date', 'true_russian_date_forms');
add_filter('the_modified_time', 'true_russian_date_forms');
add_filter('get_the_modified_date', 'true_russian_date_forms');
add_filter('get_post_time', 'true_russian_date_forms');
add_filter('get_comment_date', 'true_russian_date_forms');
 
 ?>