<?php
//文字化けしないようにする
function h($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

