<?php
  $name = $field->getAlias();
?>

<fieldset class="form-group number-counter {{ $errors->has($name) ? ' has-danger' : '' }}">
  <input type="hidden" name="{{ $name }}" value="{{ old($name) ? old($name) : $field->getValue() }}">
  <div class="less"><i class="icon-minus"></i></div>
  <div class="more"><i class="icon-plus"></i></div>
  <input
    id="{{ $name }}"
    type="text"
    placeholder="{{ $field->getPlaceholder() }}"
    {{ $field->isRequired() ? 'required' : '' }}
    {{ isset($autofocus) && $autofocus ? 'autofocus' : '' }}
    class="{{ $field->getClass() }}"
    value="{{ old($name) ? old($name) : $field->getValue() }}">
</fieldset>
@if ($errors->has($name))
  <span class="help-block">
    <strong>{{ $errors->first($name) }}</strong>
  </span>
@else
  <small class="help-block">{{ $field->getHint() }}</small>
@endif
