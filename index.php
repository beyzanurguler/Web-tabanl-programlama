<?php
// Sunucunun protokolünü ve host adresini al
$base_url = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$base_url .= $_SERVER['HTTP_HOST'] . '/projem/'; // Klasör adı 'projem' ise değiştirin

// Yönlendirme
header('Location: ' . $base_url);
exit;
?>
