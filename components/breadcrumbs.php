<?php
function get_breadcrumb() {
    $breadcrumb = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    $breadcrumb .= '<li class="breadcrumb-item"><a href="/websiteForum/forumWebsite/main.php">Главная</a></li>';

    $uri = $_SERVER['REQUEST_URI'];
    $segments = array_filter(explode('/', trim($uri, '/')));

    $base_dir = "forumWebsite"; // Имя корневой директории, которую нужно пропустить
    $skip_dir = "WebsiteForum"; // Дополнительная директория, которую нужно пропустить
    $path = '';
    $translations = [
        "registration" => "Регистрация",
        "main" => "Главная",
        "photos" => "Фотографии",
        "news" => "Новости",
        "materials" => "Материалы",
        "history" => "История",
        "places" => "Места",
        "schedule" => "Расписание",
        "archive" => "Архив",
    ];

    foreach ($segments as $segment) {
        if (strtolower($segment) == strtolower($base_dir) || strtolower($segment) == strtolower($skip_dir)) continue; // Пропускаем корневую и дополнительные директории
        $path .= '/' . $segment;
        $segment_key = strtolower(str_replace(array('.php', '_'), array('', ' '), $segment));
        $translated_segment = isset($translations[$segment_key]) ? $translations[$segment_key] : ucwords(str_replace(array('.php', '_'), array('', ' '), $segment));
        if ($segment == end($segments)) {
            $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . $translated_segment . '</li>';
        } else {
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . $path . '">' . $translated_segment . '</a></li>';
        }
    }
    $breadcrumb .= '</ol></nav>';
    return $breadcrumb;
}
?>
