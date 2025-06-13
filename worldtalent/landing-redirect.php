<?php
// global $availableLanguages;
// $availableLanguages = ['en', 'de', 'es', 'fr', 'pt', 'ru'];

// function getBrowserLang() {
//   return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// }

// function redirectByLanguage() {
//   global $availableLanguages;

//   $lang = getBrowserLang();
//   if (!in_array($lang, $availableLanguages)) return;

//   $uri = $_SERVER['REQUEST_URI'];
//   $parsedUrl = parse_url($uri);
//   $path = $parsedUrl['path'] ?? '/';
//   $query = isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '';

//   if (preg_match('#^(/worldtalent/landing\d+/)(.*)$#', $path, $parts)) {
//     $base = $parts[1];
//     $rest = $parts[2];

//     $langInUrl = null;
//     foreach ($availableLanguages as $availableLang) {
//       if (strpos($rest, $availableLang . '/') === 0) {
//         $langInUrl = $availableLang;
//         $rest = substr($rest, strlen($availableLang) + 1);
//         break;
//       }
//     }

//     if ($lang === 'en') {
//       if ($langInUrl && $langInUrl !== 'en') {
//         $newPath = $base . $rest;
//         header("Location: " . $newPath . $query);
//         exit;
//       }
//       return;
//     }

//     if ($langInUrl === $lang) return;

//     $newPath = $base . $lang . '/' . $rest;
//     header("Location: " . $newPath . $query);
//     exit;
//   }
// }

// redirectByLanguage();


global $availableLanguages;
$availableLanguages = ['en', 'de', 'es', 'fr', 'pt', 'ru'];

function getBrowserLang() {
  return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

function redirectByLanguage() {
  global $availableLanguages;

  $lang = getBrowserLang();
  if (!in_array($lang, $availableLanguages)) return;

  $uri = $_SERVER['REQUEST_URI'];
  $parsedUrl = parse_url($uri);
  $path = $parsedUrl['path'] ?? '/';
  $query = isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '';

  $segments = explode('/', trim($path, '/'));

  $landId = null;
  foreach ($segments as $index => $segment) {
    if (ctype_digit($segment)) {
      $landId = $segment;
      $landIndex = $index;
      break;
    }
  }

  if (!$landId) return;

  $langInUrl = $segments[$landIndex + 1] ?? null;

  if ($lang === 'en') {
    if ($langInUrl && in_array($langInUrl, $availableLanguages)) {
      array_splice($segments, $landIndex + 1, 1);
      $newPath = '/' . implode('/', $segments) . '/';
      header("Location: " . $newPath . $query);
      exit;
    }
    return;
  }

  if ($langInUrl === $lang) return;

  if ($langInUrl && in_array($langInUrl, $availableLanguages)) {
    array_splice($segments, $landIndex + 1, 1);
  }

  array_splice($segments, $landIndex + 1, 0, $lang);
  $newPath = '/' . implode('/', $segments) . '/';
  header("Location: " . $newPath . $query);
  exit;
}

redirectByLanguage();
?>

