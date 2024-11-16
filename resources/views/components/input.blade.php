@props([
    'name' => 'input',
    'type' => 'text',
    'label' => 'label',
    'placeholder' => '....',
    'value' => null,
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" value="{{ $value }}">
</div>
