# laravel-smartform
An easy and quick way to create forms using Twitter Bootstrap and Laravel 5

## Usage

    {{ \SmartForm::open('/my/controller', 'POST', [
        'option_id' => ['Some label:', 'select', $options], // key/value array
        'description' => ['Description', 'textarea']
    ]) }}

    {{ \SmartForm::close() }}
