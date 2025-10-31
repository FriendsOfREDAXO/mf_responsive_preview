<?php
if (rex::isBackend() && rex::getUser()) {
    rex_extension::register('STRUCTURE_CONTENT_SIDEBAR', ['FriendsOfRedaxo\ResponsivePreview\responsive_preview','get'], rex_extension::LATE);
}
?>