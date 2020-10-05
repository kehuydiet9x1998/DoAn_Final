"post-update-cmd": [
"Illuminate\\Foundation\\ComposerScripts::postUpdate",
"@php artisan ide-helper:generate",
"@php artisan ide-helper:meta",
"@php artisan ide-helper:models --nowrite"
],
"post-install-cmd": [
"@php artisan ide-helper:generate",
"@php artisan ide-helper:meta",
"@php artisan ide-helper:models --nowrite"
]
