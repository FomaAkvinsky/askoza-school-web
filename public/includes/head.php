<?php
$pageTitle = $pageTitle ?? 'Школа корпоративного заемщика Сергея Акинина';
$pageDescription = $pageDescription ?? 'Практические знания о корпоративном кредитовании на всем жизненном цикле заемщика — от первого кредитного решения до урегулирования проблемной задолженности.';
$pageCanonical = $pageCanonical ?? 'https://school.askoza.ru/';
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="theme-color" content="#0C1E35">
  <meta name="color-scheme" content="light">
  <link rel="canonical" href="<?= htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8') ?>">

  <meta property="og:type" content="website">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:site_name" content="Школа корпоративного заемщика">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8') ?>">

  <link rel="stylesheet" href="/assets/css/style.css?v=3">
  <script defer src="/assets/js/main.js?v=2"></script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Школа корпоративного заемщика Сергея Акинина",
    "url": "https://school.askoza.ru/",
    "parentOrganization": {
      "@type": "Organization",
      "name": "АСКОЗА — Ассоциация корпоративных заемщиков и специалистов по корпоративному кредитованию",
      "url": "https://askoza.ru/"
    }
  }
  </script>
</head>
<body>
<a class="skip-link" href="#main">Перейти к содержанию</a>
