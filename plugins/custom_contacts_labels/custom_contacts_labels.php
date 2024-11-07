<?php

class custom_contacts_labels extends rcube_plugin {
    public function init() {
        $this->add_hook('contact_displayname', array($this, 'add_js_script'));
    }
    public function add_js_script($args) {
        // Включаем JavaScript-файл при отображении контактов
        $this->include_script('custom_contacts_labels.js');
        return $args;
    }
}

