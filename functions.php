<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'uff-8');
}

function goHome() {
  header('Location: http://' . $_SERVER['HTTP_HOST']);
  exit;
}
